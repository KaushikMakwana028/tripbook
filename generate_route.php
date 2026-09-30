<?php
$urlAtoB = 'https://router.project-osrm.org/route/v1/driving/72.672573,23.079490;72.6564444,23.0860956?overview=full&geometries=geojson';
$urlBtoA = 'https://router.project-osrm.org/route/v1/driving/72.6564444,23.0860956;72.672573,23.079490?overview=full&geometries=geojson';

$options = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: TripsBook-Simulation/1.0\r\n"
    ]
];
$context = stream_context_create($options);

$resA = json_decode(file_get_contents($urlAtoB, false, $context), true);
$resB = json_decode(file_get_contents($urlBtoA, false, $context), true);

$coordsA = $resA['routes'][0]['geometry']['coordinates'];
$coordsB = $resB['routes'][0]['geometry']['coordinates'];

// Helper to interpolate between two [lat, lng] points so step size is smooth (~25-35 meters)
function interpolatePoints($p1, $p2, $maxDistDeg = 0.0003) {
    $dLat = $p2[0] - $p1[0];
    $dLng = $p2[1] - $p1[1];
    $dist = sqrt($dLat * $dLat + $dLng * $dLng);
    $steps = max(1, ceil($dist / $maxDistDeg));
    $pts = [];
    for ($i = 0; $i < $steps; $i++) {
        $fraction = $i / $steps;
        $pts[] = [
            round($p1[0] + $dLat * $fraction, 7),
            round($p1[1] + $dLng * $fraction, 7)
        ];
    }
    return $pts;
}

$rawPoints = [];
foreach ($coordsA as $c) {
    $rawPoints[] = [$c[1], $c[0]];
}
foreach ($coordsB as $c) {
    $rawPoints[] = [$c[1], $c[0]];
}

$smoothPath = [];
for ($i = 0; $i < count($rawPoints) - 1; $i++) {
    $segment = interpolatePoints($rawPoints[$i], $rawPoints[$i + 1]);
    foreach ($segment as $pt) {
        $smoothPath[] = $pt;
    }
}
$smoothPath[] = end($rawPoints);

echo "Total smooth waypoints: " . count($smoothPath) . "\n";
file_put_contents(__DIR__ . '/smooth_route.json', json_encode($smoothPath, JSON_PRETTY_PRINT));
