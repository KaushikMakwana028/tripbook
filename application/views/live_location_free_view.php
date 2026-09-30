<style>
    .live-page-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    .live-hero {
        background: linear-gradient(135deg, #059669 0%, #10b981 50%, #047857 100%);
        border-radius: 16px;
        padding: 24px 28px;
        margin-bottom: 24px;
        color: #fff;
        box-shadow: 0 10px 40px rgba(16, 185, 129, 0.28);
        position: relative;
        overflow: hidden;
    }

    .live-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 280px;
        height: 280px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
    }

    .live-hero-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 14px;
        position: relative;
        z-index: 2;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 9px 16px;
        background: rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        color: #fff;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .btn-back:hover {
        background: rgba(255, 255, 255, 0.32);
        color: #fff;
        transform: translateY(-1px);
    }

    .live-hero-title {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .live-hero-icon {
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.22);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .live-hero-title h4 {
        margin: 0;
        font-weight: 700;
        font-size: 1.35rem;
        color: #fff;
    }

    .live-hero-title p {
        margin: 2px 0 0;
        font-size: 0.85rem;
        opacity: 0.9;
        color: #fff;
    }

    .live-status-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 16px;
        border-radius: 20px;
        font-size: 0.82rem;
        font-weight: 700;
        position: relative;
        z-index: 2;
    }

    .live-status-pill.running {
        background: #ffffff;
        color: #059669;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
    }

    .live-status-pill.completed {
        background: #f1f5f9;
        color: #475569;
    }

    .pulse-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #10b981;
        animation: livePulse 1.4s infinite;
    }

    @keyframes livePulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.4);
            opacity: 0.5;
        }
    }

    /* Info cards */
    .live-info-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-bottom: 24px;
    }

    .live-info-card {
        background: #fff;
        border-radius: 12px;
        padding: 16px 20px;
        border: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        gap: 14px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    .live-info-card .icon-box {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: #f0fdf4;
        color: #10b981;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .live-info-card .info-label {
        font-size: 0.78rem;
        color: #64748b;
        margin-bottom: 2px;
        font-weight: 500;
    }

    .live-info-card .info-value {
        font-size: 0.95rem;
        font-weight: 700;
        color: #1e293b;
    }

    /* Map Card */
    .live-map-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        overflow: hidden;
    }

    .live-map-card-header {
        padding: 16px 22px;
        border-bottom: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        background: #ffffff;
    }

    .live-map-card-header h5 {
        margin: 0;
        font-size: 1rem;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    #liveStatusText {
        font-size: 0.85rem;
        font-weight: 600;
        color: #10b981;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .follow-toggle-label {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.82rem;
        font-weight: 600;
        color: #475569;
        cursor: pointer;
        user-select: none;
        background: #f8fafc;
        padding: 5px 12px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
    }

    #liveMapFree {
        height: 560px;
        width: 100%;
        background: #f8fafc;
    }

    .route-legend {
        padding: 12px 20px;
        background: #f8fafc;
        border-top: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        gap: 20px;
        font-size: 0.82rem;
        font-weight: 600;
        color: #475569;
        flex-wrap: wrap;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .legend-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    /* Vehicle Marker Styles */
    .vehicle-div-icon {
        background: transparent !important;
        border: none !important;
    }

    .vehicle-live-marker {
        position: relative;
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .vehicle-pulse-ring {
        position: absolute;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: rgba(16, 185, 129, 0.45);
        animation: vehiclePulse 2s infinite cubic-bezier(0, 0, 0.2, 1);
        pointer-events: none;
    }

    .vehicle-pulse-ring.ring-2 {
        animation-delay: 0.8s;
        background: rgba(34, 197, 94, 0.28);
    }

    @keyframes vehiclePulse {
        0% {
            transform: scale(0.6);
            opacity: 1;
        }

        100% {
            transform: scale(2.2);
            opacity: 0;
        }
    }

    .vehicle-badge {
        position: relative;
        z-index: 2;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: linear-gradient(135deg, #065f46 0%, #10b981 55%, #34d399 100%);
        border: 3px solid #ffffff;
        box-shadow: 0 8px 24px rgba(16, 185, 129, 0.5), 0 2px 8px rgba(0, 0, 0, 0.25);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .vehicle-badge:hover {
        transform: scale(1.12);
    }

    .vehicle-driver-tag {
        position: absolute;
        top: -24px;
        left: 50%;
        transform: translateX(-50%);
        background: #0f172a;
        color: #ffffff;
        padding: 3px 10px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 700;
        white-space: nowrap;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        gap: 5px;
        pointer-events: none;
        z-index: 5;
    }

    .vehicle-driver-tag::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 4px 4px 0 4px;
        border-style: solid;
        border-color: #0f172a transparent transparent transparent;
    }

    .vehicle-driver-tag .live-beacon-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #22c55e;
        animation: livePulse 1.2s infinite;
    }

    .leaflet-control-layers {
        border-radius: 10px !important;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.18) !important;
        border: 1px solid #e2e8f0 !important;
        padding: 8px 12px !important;
        font-size: 0.82rem !important;
        font-weight: 600 !important;
        background: #ffffff !important;
    }

    .leaflet-popup-content-wrapper {
        border-radius: 12px !important;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.18) !important;
        padding: 2px !important;
    }

    @media (max-width: 992px) {
        .live-info-row {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .live-info-row {
            grid-template-columns: 1fr;
        }

        #liveMapFree {
            height: 420px;
        }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>

<div class="page-wrapper">
    <div class="page-content">
        <div class="live-page-wrapper">

            <!-- Hero Header -->
            <div class="live-hero">
                <div class="live-hero-top">
                    <div class="live-hero-title">
                        <div class="live-hero-icon"><i class="bx bx-shield-quarter"></i></div>
                        <div>
                            <h4>Live Location — Trip #<?= $trip['id']; ?></h4>
                            <p><?= !empty($trip['from_location']) ? $trip['from_location'] : 'On Call Trip'; ?><?= !empty($trip['to_location']) ? ' → ' . $trip['to_location'] : ''; ?></p>
                        </div>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                        <span class="live-status-pill <?= $trip['status'] === 'completed' ? 'completed' : 'running'; ?>">
                            <span class="pulse-dot"></span>
                            <?= strtoupper($trip['status']); ?>
                        </span>
                        <a href="<?= base_url('driver/live_location/' . $trip['id']); ?>" class="btn-back">
                            <i class="bx bx-map-pin"></i> Switch to Google Map
                        </a>
                        <a href="<?= base_url('booking'); ?>" class="btn-back">
                            <i class="bx bx-arrow-back"></i> Back to Trips
                        </a>
                    </div>
                </div>
            </div>

            <!-- Trip Info Cards -->
            <div class="live-info-row">
                <div class="live-info-card">
                    <div class="icon-box"><i class="bx bx-user"></i></div>
                    <div>
                        <div class="info-label">Driver</div>
                        <div class="info-value"><?= !empty($trip['driver_name']) ? $trip['driver_name'] : 'N/A'; ?></div>
                    </div>
                </div>
                <div class="live-info-card">
                    <div class="icon-box"><i class="bx bx-car"></i></div>
                    <div>
                        <div class="info-label">Vehicle</div>
                        <div class="info-value"><?= !empty($trip['vehicle_number']) ? $trip['vehicle_number'] : 'N/A'; ?></div>
                    </div>
                </div>
                <div class="live-info-card">
                    <div class="icon-box"><i class="bx bx-phone"></i></div>
                    <div>
                        <div class="info-label">Customer</div>
                        <div class="info-value"><?= !empty($trip['customer_name']) ? $trip['customer_name'] : 'N/A'; ?></div>
                    </div>
                </div>
                <div class="live-info-card">
                    <div class="icon-box"><i class="bx bx-calendar"></i></div>
                    <div>
                        <div class="info-label">Trip Date</div>
                        <div class="info-value"><?= !empty($trip['trip_date']) ? date('d M Y', strtotime($trip['trip_date'])) : 'N/A'; ?></div>
                    </div>
                </div>
            </div>

            <!-- Map Card -->
            <div class="live-map-card">
                <div class="live-map-card-header">
                    <h5>
                        <i class="bx bx-check-shield" style="color:#10b981; font-size:1.25rem;"></i>
                        100% Free Live Tracking
                        <span style="background:#e0f2fe; color:#0369a1; font-size:11px; font-weight:700; padding:2px 8px; border-radius:10px; border:1px solid #bae6fd; margin-left:6px;">Zero Risk (Esri / OSM)</span>
                    </h5>
                    <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                        <div id="liveStatusText">
                            <i class="bx bx-loader-alt bx-spin" style="color:#f59e0b"></i> Connecting to driver GPS...
                        </div>
                        <label class="follow-toggle-label">
                            <input type="checkbox" id="followMarkerCheck" checked style="accent-color:#10b981;">
                            <span>Follow Vehicle</span>
                        </label>
                    </div>
                </div>
                <div id="liveMapFree"></div>
                <div class="route-legend">
                    <div class="legend-item"><span class="legend-dot" style="background:#10b981;"></span> Pickup Point</div>
                    <div class="legend-item"><span class="legend-dot" style="background:#059669;"></span> Live Vehicle Position</div>
                </div>
            </div>

            <div style="margin-top:16px; text-align:center;">
                <a href="<?= base_url('trip_details/' . $trip['id']); ?>" style="color:#059669; font-size:0.85rem; font-weight:600; text-decoration:none;">
                    <i class="bx bx-detail"></i> View Full Trip Details
                </a>
            </div>

        </div>
    </div>
</div>

<?php
$initLat = !empty($trip['current_lat']) ? (float)$trip['current_lat'] : 23.0795;
$initLng = !empty($trip['current_lng']) ? (float)$trip['current_lng'] : 72.6726;
?>
<script>
    const TRIP_ID = <?= (int) $trip['id']; ?>;
    const DRIVER_NAME = <?= json_encode(!empty($trip['driver_name']) ? $trip['driver_name'] : 'Driver'); ?>;
    const VEHICLE_NO = <?= json_encode(!empty($trip['vehicle_number']) ? $trip['vehicle_number'] : 'N/A'); ?>;
    const INIT_LAT = <?= $initLat ?>;
    const INIT_LNG = <?= $initLng ?>;
    const API_URL = '<?= base_url("driver/get_trip_location/" . $trip["id"]); ?>';
    const POLL_MS = 5000; // Poll every 5 seconds

    let map = null;
    let liveMarker = null;
    let startMarker = null;
    let pollTimer = null;

    function makeVehicleIcon() {
        return L.divIcon({
            html: `
                <div class="vehicle-live-marker">
                    <div class="vehicle-pulse-ring"></div>
                    <div class="vehicle-pulse-ring ring-2"></div>
                    <div class="vehicle-driver-tag">
                        <span class="live-beacon-dot"></span>
                        <span>${DRIVER_NAME}</span>
                    </div>
                    <div class="vehicle-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Roof Cab Sign -->
                            <rect x="9.5" y="4.5" width="5" height="1.8" rx="0.8" fill="#FACC15"/>
                            <!-- Car Chassis Body -->
                            <path d="M19 8.2C18.8 7.5 18.2 6.8 17.2 6.8H6.8C5.8 6.8 5.2 7.5 5 8.2L3.5 13.2V19.5C3.5 20.1 3.9 20.5 4.5 20.5H5.5C6.1 20.5 6.5 20.1 6.5 19.5V18.5H17.5V19.5C17.5 20.1 17.9 20.5 18.5 20.5H19.5C20.1 20.5 20.5 20.1 20.5 19.5V13.2L19 8.2Z" fill="#FFFFFF"/>
                            <!-- Windshield Glass -->
                            <path d="M5.6 13L6.8 8.6H17.2L18.4 13H5.6Z" fill="#38BDF8"/>
                            <!-- Windshield Reflection -->
                            <path d="M7.4 9.2L6.6 12.2H10.5L11.5 9.2H7.4Z" fill="#FFFFFF" fill-opacity="0.55"/>
                            <!-- Headlights -->
                            <ellipse cx="6" cy="15.5" rx="1.6" ry="1.2" fill="#FACC15"/>
                            <ellipse cx="18" cy="15.5" rx="1.6" ry="1.2" fill="#FACC15"/>
                            <!-- Front Grille -->
                            <rect x="9" y="15.2" width="6" height="1.6" rx="0.8" fill="#0F172A" fill-opacity="0.35"/>
                        </svg>
                    </div>
                </div>
            `,
            className: 'vehicle-div-icon',
            iconSize: [54, 54],
            iconAnchor: [27, 27],
            popupAnchor: [0, -32]
        });
    }

    function makePickupIcon() {
        return L.divIcon({
            html: `<div style="width:32px;height:32px;background:#10b981;border:3px solid #fff;
                               border-radius:50%;display:flex;align-items:center;justify-content:center;
                               box-shadow:0 3px 10px rgba(16,185,129,0.6);font-size:15px;color:#fff;">
                     📍
                   </div>`,
            className: '',
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });
    }

    function initMap() {
        map = L.map('liveMapFree', {
            maxZoom: 19
        }).setView([INIT_LAT, INIT_LNG], 16);

        // 1. Esri World Street Map (100% Free & Legally Open)
        const street = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            maxNativeZoom: 17,
            attribution: 'Tiles &copy; Esri'
        });

        // 2. OpenStreetMap (100% Free & Open-source, NO API key required, NO watermark)
        const osm = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            subdomains: ['a', 'b', 'c'],
            attribution: '&copy; OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team'
        });

        // 3. Esri Satellite with Roads & Place Labels
        const imagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            maxNativeZoom: 17,
            attribution: 'Tiles &copy; Esri'
        });
        const roads = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Reference/World_Transportation/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            maxNativeZoom: 15
        });
        const places = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Reference/World_Boundaries_and_Places/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            maxNativeZoom: 15
        });
        const satellite = L.layerGroup([imagery, roads, places]);

        // Default to Street
        street.addTo(map);

        const baseMaps = {
            "🗺️ Esri Street Map": street,
            "🌐 OpenStreetMap": osm,
            "🛰️ Esri Satellite": satellite
        };
        L.control.layers(baseMaps, null, {
            position: 'topright'
        }).addTo(map);
        L.control.scale({
            imperial: false,
            position: 'bottomleft'
        }).addTo(map);
    }

    async function pollLocation(isFirstLoad) {
        try {
            const res = await fetch(API_URL, {
                cache: 'no-store',
                credentials: 'same-origin'
            });
            if (!res.ok) throw new Error('HTTP ' + res.status);
            const d = await res.json();

            if (!d.status && d.message) {
                document.getElementById('liveStatusText').innerHTML = d.message;
                return;
            }

            const curLat = parseFloat(d.lat !== null && d.lat !== undefined ? d.lat : d.current_lat);
            const curLng = parseFloat(d.lng !== null && d.lng !== undefined ? d.lng : d.current_lng);
            const updatedAt = d.updated_at || d.location_updated_at || new Date().toLocaleTimeString();

            if (isNaN(curLat) || isNaN(curLng)) {
                document.getElementById('liveStatusText').innerHTML = '<i class="bx bx-info-circle"></i> Waiting for driver GPS signal...';
                return;
            }

            // Pickup point marker (first coordinate in route if available)
            if (d.trail && d.trail.length > 0 && !startMarker) {
                const first = d.trail[0];
                const pLat = parseFloat(first.lat);
                const pLng = parseFloat(first.lng);
                if (!isNaN(pLat) && !isNaN(pLng)) {
                    startMarker = L.marker([pLat, pLng], {
                        icon: makePickupIcon(),
                        zIndexOffset: 100
                    }).addTo(map).bindPopup(`
                        <div style="padding:8px 12px; font-family:inherit;">
                            <div style="font-weight:700; font-size:0.88rem; color:#10b981; margin-bottom:4px;">📍 Pickup Point</div>
                            <div style="font-size:0.78rem; color:#64748b;">Trip journey started here</div>
                        </div>
                    `);
                }
            }

            // Update live vehicle marker (NO BLUE LINE)
            const popupContent = `
                <div style="padding:8px 12px; font-family:inherit; min-width:190px;">
                    <div style="font-weight:700; font-size:0.92rem; color:#1e293b; margin-bottom:4px; display:flex; align-items:center; gap:6px;">
                        <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#22c55e;"></span>
                        ${DRIVER_NAME}
                    </div>
                    <div style="font-size:0.78rem; color:#64748b; margin-bottom:4px;">
                        Vehicle: <strong style="color:#0f172a;">${VEHICLE_NO}</strong>
                    </div>
                    <div style="font-size:0.75rem; color:#059669; font-weight:700; margin-bottom:6px;">
                        ● 100% FREE LIVE GPS
                    </div>
                    <div style="font-size:0.75rem; color:#64748b;">
                        Updated: ${updatedAt}
                    </div>
                </div>
            `;

            if (liveMarker) {
                liveMarker.setLatLng([curLat, curLng]);
                if (liveMarker.getPopup()) {
                    liveMarker.getPopup().setContent(popupContent);
                }
            } else {
                liveMarker = L.marker([curLat, curLng], {
                    icon: makeVehicleIcon(),
                    zIndexOffset: 300
                }).addTo(map).bindPopup(popupContent);
            }

            // Pan or center
            const followChecked = document.getElementById('followMarkerCheck').checked;
            if (isFirstLoad) {
                map.setView([curLat, curLng], 16);
            } else if (followChecked) {
                map.panTo([curLat, curLng], {
                    animate: true,
                    duration: 1.0
                });
            }

            const nowTime = new Date().toLocaleTimeString('en-US', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            });
            document.getElementById('liveStatusText').innerHTML = `
                <i class="bx bx-radio-circle" style="color:#10b981; animation:livePulse 1.4s infinite"></i> 
                Live — updated at ${nowTime}
            `;
        } catch (e) {
            console.error(e);
            document.getElementById('liveStatusText').innerHTML = `
                <i class="bx bx-loader-alt bx-spin" style="color:#f59e0b"></i> Connecting to GPS...
            `;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        initMap();
        pollLocation(true);
        pollTimer = setInterval(() => pollLocation(false), POLL_MS);
    });

    window.addEventListener('beforeunload', function() {
        if (pollTimer) clearInterval(pollTimer);
    });
</script>