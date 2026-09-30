<?php
/**
 * Driver Location Simulation Loop for TripsBook
 * Simulates a vehicle driving realistically along the road network between
 * Point A (23.079490, 72.672573) and Point B (23.0860956, 72.6564444) in a continuous loop.
 */

date_default_timezone_set('Asia/Kolkata');
set_time_limit(0);
ignore_user_abort(true);

$tripId = isset($argv[1]) ? (int)$argv[1] : 1402;
$driverMobile = '8128966154';
$driverPassword = '123456';
$baseApiUrl = 'http://localhost/kaushik/tripsbook/api';
$stepIntervalSec = 2; // update every 2 seconds
$logFile = __DIR__ . '/simulation.log';

$waypointsFile = __DIR__ . '/smooth_route.json';
if (!file_exists($waypointsFile)) {
    die("Waypoints file smooth_route.json not found!\n");
}
$waypoints = json_decode(file_get_contents($waypointsFile), true);
$totalPoints = count($waypoints);

echo "========================================================\n";
echo "   TRIPSBOOK LIVE DRIVER SIMULATION (ROAD LOOP)\n";
echo "========================================================\n";
echo "Trip ID     : #$tripId\n";
echo "Total Points: $totalPoints (approx 8.2 km round trip)\n";
echo "Start/End A : 23.079490, 72.672573 (Shri Balaji Rd, Naroda)\n";
echo "Turn Point B: 23.0860956, 72.6564444 (Nava Naroda)\n";
echo "Interval    : {$stepIntervalSec}s per GPS update\n";
echo "========================================================\n\n";

function getDriverToken($baseApiUrl, $mobile, $password) {
    $ch = curl_init("$baseApiUrl/login");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'mobile' => $mobile,
        'password' => $password
    ]));
    $res = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 && $res) {
        $json = json_decode($res, true);
        if (!empty($json['data']['token'])) {
            return $json['data']['token'];
        }
    }
    return null;
}

function sendLocationUpdate($baseApiUrl, $token, $tripId, $lat, $lng) {
    $ch = curl_init("$baseApiUrl/update_location");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        "Authorization: Bearer $token"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'trip_id' => $tripId,
        'latitude' => $lat,
        'longitude' => $lng
    ]));
    $res = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ['code' => $httpCode, 'response' => $res];
}

$token = getDriverToken($baseApiUrl, $driverMobile, $driverPassword);
if (!$token) {
    die("Failed to login as driver ($driverMobile) to obtain JWT token!\n");
}
echo "[" . date('H:i:s') . "] Driver logged in successfully. JWT Token acquired.\n";
echo "[" . date('H:i:s') . "] Starting real-time GPS simulation loop...\n\n";

$loopCount = 1;
while (true) {
    echo "--- Starting Loop #$loopCount ---\n";
    for ($i = 0; $i < $totalPoints; $i++) {
        $lat = $waypoints[$i][0];
        $lng = $waypoints[$i][1];

        $result = sendLocationUpdate($baseApiUrl, $token, $tripId, $lat, $lng);

        if ($result['code'] === 401 || empty($result['code'])) {
            echo "[" . date('H:i:s') . "] Token expired or connection error, renewing...\n";
            $token = getDriverToken($baseApiUrl, $driverMobile, $driverPassword);
            if ($token) {
                $result = sendLocationUpdate($baseApiUrl, $token, $tripId, $lat, $lng);
            }
        }

        $step = $i + 1;
        $logLine = date('[H:i:s]') . " [Point $step/$totalPoints] Lat: $lat, Lng: $lng => HTTP {$result['code']}\n";
        echo $logLine;
        file_put_contents($logFile, $logLine, FILE_APPEND);

        sleep($stepIntervalSec);
    }
    $loopCount++;
    $loopEndMsg = "[" . date('H:i:s') . "] Loop finished. Restarting from Point A in 2 seconds...\n";
    echo $loopEndMsg;
    file_put_contents($logFile, $loopEndMsg, FILE_APPEND);
    sleep(2);
}
