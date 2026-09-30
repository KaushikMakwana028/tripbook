<style>
    .live-page-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    .live-hero {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 50%, #1e40af 100%);
        border-radius: 16px;
        padding: 24px 28px;
        margin-bottom: 24px;
        color: #fff;
        box-shadow: 0 10px 40px rgba(59, 130, 246, 0.3);
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
        background: rgba(255, 255, 255, 0.07);
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
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 10px;
        color: #fff;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .btn-back:hover {
        background: rgba(255, 255, 255, 0.28);
        color: #fff;
        transform: translateX(-2px);
    }

    .live-hero-title {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .live-hero-icon {
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.2);
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
    }

    .live-hero-title p {
        margin: 2px 0 0;
        font-size: 0.85rem;
        opacity: 0.85;
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
        background: rgba(251, 191, 36, 0.2);
        border: 1px solid rgba(251, 191, 36, 0.5);
        color: #fef3c7;
    }

    .live-status-pill.completed {
        background: rgba(16, 185, 129, 0.2);
        border: 1px solid rgba(16, 185, 129, 0.5);
        color: #d1fae5;
    }

    .live-status-pill .pulse-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: currentColor;
    }

    .live-status-pill.running .pulse-dot {
        animation: livePulse 1.5s infinite;
    }

    @keyframes livePulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(0.8);
        }
    }

    .live-info-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
        margin-bottom: 20px;
    }

    .live-info-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #e8ecf1;
        padding: 16px 18px;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }

    .live-info-card .icon-box {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
        background: #eff6ff;
        color: #3b82f6;
    }

    .live-info-card .info-label {
        font-size: 0.72rem;
        color: #8b95a5;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .live-info-card .info-value {
        font-size: 0.92rem;
        color: #1a1d29;
        font-weight: 700;
        margin-top: 2px;
    }

    .live-map-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e8ecf1;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
        overflow: hidden;
    }

    .live-map-card-header {
        padding: 16px 22px;
        border-bottom: 1px solid #f0f2f5;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        background: #fafbfc;
    }

    .live-map-card-header h5 {
        margin: 0;
        font-weight: 700;
        font-size: 1rem;
        color: #1a1d29;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    #liveStatusText {
        font-size: 0.85rem;
        color: #475569;
    }

    #liveMap {
        width: 100%;
        height: 640px;
    }

    .route-legend {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 12px 22px;
        border-top: 1px solid #f0f2f5;
        font-size: 0.8rem;
        color: #64748b;
        flex-wrap: wrap;
    }

    .route-legend .legend-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .legend-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
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

        #liveMap {
            height: 420px;
        }
    }

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
        background: rgba(37, 99, 235, 0.4);
        animation: vehiclePulse 2s infinite cubic-bezier(0, 0, 0.2, 1);
        pointer-events: none;
    }

    .vehicle-pulse-ring.ring-2 {
        animation-delay: 0.8s;
        background: rgba(59, 130, 246, 0.25);
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
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 55%, #38bdf8 100%);
        border: 3px solid #ffffff;
        box-shadow: 0 8px 24px rgba(37, 99, 235, 0.5), 0 2px 8px rgba(0, 0, 0, 0.3);
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

    .leaflet-control-layers-base label {
        margin-bottom: 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .leaflet-control-layers-base label:last-child {
        margin-bottom: 0;
    }

    .leaflet-popup-content-wrapper {
        border-radius: 12px !important;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.18) !important;
        padding: 2px !important;
    }
</style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<div class="page-wrapper">
    <div class="page-content">
        <div class="live-page-wrapper">

            <!-- Hero header -->
            <div class="live-hero">
                <div class="live-hero-top">
                    <div class="live-hero-title">
                        <div class="live-hero-icon"><i class="bx bx-current-location"></i></div>
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
                        <a href="<?= base_url('driver/live_location_free/' . $trip['id']); ?>" class="btn-back" style="background:#10b981; color:#ffffff; border-color:#059669;">
                            <i class="bx bx-shield-quarter"></i> Open Free Map Page
                        </a>
                        <a href="<?= base_url('booking'); ?>" class="btn-back">
                            <i class="bx bx-arrow-back"></i> Back to Trips
                        </a>
                    </div>
                </div>
            </div>

            <!-- Trip info cards -->
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

            <!-- Map card -->
            <div class="live-map-card">
                <div class="live-map-card-header">
                    <h5><i class="bx bx-navigation"></i> Live Vehicle Tracking</h5>
                    <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap;">
                        <div id="liveStatusText">Loading...</div>
                        <a href="<?= base_url('driver/live_location_free/' . $trip['id']); ?>" class="btn btn-sm" style="display:inline-flex; align-items:center; gap:6px; background:#f0fdf4; color:#16a34a; border:1px solid #bbf7d0; border-radius:8px; padding:5px 12px; font-size:0.8rem; font-weight:600; text-decoration:none;">
                            <i class="bx bx-check-shield"></i> Open Free Map Page
                        </a>
                        <a id="btnGoogleMaps" href="#" target="_blank" class="btn btn-sm" style="display:none; align-items:center; gap:6px; background:#eff6ff; color:#2563eb; border:1px solid #bfdbfe; border-radius:8px; padding:5px 12px; font-size:0.8rem; font-weight:600; text-decoration:none;">
                            <i class="bx bx-link-external"></i> View on Google Maps
                        </a>
                    </div>
                </div>
                <div id="liveMap"></div>
                <div class="route-legend">
                    <div class="legend-item"><span class="legend-dot" style="background:#10b981;"></span> Pickup Point</div>
                    <div class="legend-item"><span class="legend-dot" style="background:#2563eb;"></span> Live Driver Position</div>
                </div>
            </div>

            <div style="margin-top:16px; text-align:center;">
                <a href="<?= base_url('trip_details/' . $trip['id']); ?>" style="color:#3b82f6; font-size:0.85rem; font-weight:600; text-decoration:none;">
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

    let liveMap = null;
    let liveMarker = null;
    let startMarker = null;
    let endMarker = null;
    let livePollInterval = null;

    function makeDriverIcon() {
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
                            <!-- Taxi / Cab Roof Sign -->
                            <rect x="9.5" y="4.5" width="5" height="1.8" rx="0.8" fill="#FACC15"/>
                            <!-- Car Chassis Body -->
                            <path d="M19 8.2C18.8 7.5 18.2 6.8 17.2 6.8H6.8C5.8 6.8 5.2 7.5 5 8.2L3.5 13.2V19.5C3.5 20.1 3.9 20.5 4.5 20.5H5.5C6.1 20.5 6.5 20.1 6.5 19.5V18.5H17.5V19.5C17.5 20.1 17.9 20.5 18.5 20.5H19.5C20.1 20.5 20.5 20.1 20.5 19.5V13.2L19 8.2Z" fill="#FFFFFF"/>
                            <!-- Windshield Glass -->
                            <path d="M5.6 13L6.8 8.6H17.2L18.4 13H5.6Z" fill="#38BDF8"/>
                            <!-- Windshield Reflection -->
                            <path d="M7.4 9.2L6.6 12.2H10.5L11.5 9.2H7.4Z" fill="#FFFFFF" fill-opacity="0.55"/>
                            <!-- Dual Bright LED Headlights -->
                            <ellipse cx="6" cy="15.5" rx="1.6" ry="1.2" fill="#FACC15"/>
                            <ellipse cx="18" cy="15.5" rx="1.6" ry="1.2" fill="#FACC15"/>
                            <!-- Front Grille Accent -->
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

    function makeDropIcon() {
        return L.divIcon({
            html: `<div style="width:32px;height:32px;background:#ef4444;border:3px solid #fff;
                               border-radius:50%;display:flex;align-items:center;justify-content:center;
                               box-shadow:0 3px 10px rgba(239,68,68,0.6);font-size:15px;color:#fff;">
                     🏁
                   </div>`,
            className: '',
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });
    }

    function initLiveMap() {
        // Initialize map directly at trip location
        liveMap = L.map('liveMap', {
            maxZoom: 20
        }).setView([INIT_LAT, INIT_LNG], 16);

        // 1. Google Maps Hybrid (Satellite Imagery + Roads + Shop Names + POIs) — 100% Free, NO API Key needed
        const googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Map data &copy; Google Maps'
        });

        // 2. Google Maps Streets (Standard Roadmap with Shops, Landmarks, Roads) — 100% Free, NO API Key needed
        const googleStreets = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Map data &copy; Google Maps'
        });

        // 3. OpenStreetMap (100% Free & Open-source, NO API key required, NO watermark)
        const osm = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            subdomains: ['a', 'b', 'c'],
            attribution: '&copy; OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team'
        });

        // 4. Esri World Imagery (Satellite) — 100% Free
        const esriSat = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            attribution: 'Tiles &copy; Esri'
        });

        // Set Google Streets as default
        googleStreets.addTo(liveMap);

        // Layer switcher
        const baseMaps = {
            "🗺️ Google Streets (Shops & Roads)": googleStreets,
            "🛰️ Google Hybrid (Satellite + Shops)": googleHybrid,
            "🌐 OpenStreetMap": osm,
            "🌍 Esri Satellite": esriSat
        };
        L.control.layers(baseMaps, null, {
            position: 'topright'
        }).addTo(liveMap);

        // Scale bar
        L.control.scale({
            imperial: false,
            position: 'bottomleft'
        }).addTo(liveMap);
    }

    function fetchLiveLocation(isFirstLoad) {
        const url = '<?= base_url("driver/get_trip_location/") ?>' + TRIP_ID;

        fetch(url, {
                credentials: 'same-origin'
            })
            .then(res => {
                if (!res.ok) {
                    throw new Error('HTTP ' + res.status + ' ' + res.statusText);
                }
                return res.json();
            })
            .then(res => {
                if (!res.status) {
                    document.getElementById('liveStatusText').innerHTML = res.message || 'Unable to load location';
                    return;
                }

                const trail = res.trail || [];
                const curLat = (res.current_lat !== null && res.current_lat !== undefined && res.current_lat !== '') ?
                    parseFloat(res.current_lat) :
                    (trail.length ? parseFloat(trail[trail.length - 1].lat) : null);
                const curLng = (res.current_lng !== null && res.current_lng !== undefined && res.current_lng !== '') ?
                    parseFloat(res.current_lng) :
                    (trail.length ? parseFloat(trail[trail.length - 1].lng) : null);

                if (trail.length === 0 && !curLat) {
                    document.getElementById('liveStatusText').innerHTML = '<i class="bx bx-info-circle"></i> Waiting for driver GPS signal...';
                    return;
                }

                const latlngs = trail.map(p => [parseFloat(p.lat), parseFloat(p.lng)]).filter(p => !isNaN(p[0]) && !isNaN(p[1]));

                // Pickup point marker (first coordinate in route)
                if (latlngs.length > 0 && !startMarker) {
                    startMarker = L.marker(latlngs[0], {
                        icon: makePickupIcon(),
                        zIndexOffset: 100
                    }).addTo(liveMap).bindPopup(`
                        <div style="padding:8px 12px; font-family:inherit;">
                            <div style="font-weight:700; font-size:0.88rem; color:#10b981; margin-bottom:4px;">📍 Pickup Point</div>
                            <div style="font-size:0.78rem; color:#64748b;">Trip journey started here</div>
                        </div>
                    `);
                }

                // Update "Open in Google Maps" header link
                const gmapsBtn = document.getElementById('btnGoogleMaps');
                if (gmapsBtn && curLat && curLng) {
                    gmapsBtn.href = `https://www.google.com/maps?q=${curLat},${curLng}`;
                    gmapsBtn.style.display = 'inline-flex';
                }

                // Vehicle or Drop marker
                if (res.trip_status === 'completed') {
                    if (liveMarker) {
                        liveMap.removeLayer(liveMarker);
                        liveMarker = null;
                    }
                    if (curLat && curLng && !endMarker) {
                        endMarker = L.marker([curLat, curLng], {
                            icon: makeDropIcon(),
                            zIndexOffset: 200
                        }).addTo(liveMap).bindPopup(`
                            <div style="padding:8px 12px; font-family:inherit;">
                                <div style="font-weight:700; font-size:0.88rem; color:#ef4444; margin-bottom:4px;">🏁 Drop Point</div>
                                <div style="font-size:0.78rem; color:#64748b;">Trip destination reached</div>
                                <div style="margin-top:6px;">
                                    <a href="https://www.google.com/maps?q=${curLat},${curLng}" target="_blank" style="color:#2563eb; font-size:0.75rem; text-decoration:none; font-weight:600;">
                                        <i class="bx bx-link-external"></i> Open in Google Maps
                                    </a>
                                </div>
                            </div>
                        `);
                    }
                } else if (curLat && curLng) {
                    const popupContent = `
                        <div style="padding:8px 12px; font-family:inherit; min-width:190px;">
                            <div style="font-weight:700; font-size:0.92rem; color:#1e293b; margin-bottom:4px; display:flex; align-items:center; gap:6px;">
                                <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#22c55e;"></span>
                                ${DRIVER_NAME}
                            </div>
                            <div style="font-size:0.78rem; color:#64748b; margin-bottom:4px;">
                                Vehicle: <strong style="color:#0f172a;">${VEHICLE_NO}</strong>
                            </div>
                            <div style="font-size:0.75rem; color:#2563eb; font-weight:700; margin-bottom:6px;">
                                📡 LIVE GPS ACTIVE (Every 10s)
                            </div>
                            <div>
                                <a href="https://www.google.com/maps?q=${curLat},${curLng}" target="_blank" style="color:#2563eb; font-size:0.75rem; text-decoration:none; font-weight:600;">
                                    <i class="bx bx-link-external"></i> Open in Google Maps
                                </a>
                            </div>
                        </div>
                    `;

                    if (liveMarker) {
                        liveMarker.setLatLng([curLat, curLng]);
                        if (liveMarker.getPopup()) {
                            liveMarker.getPopup().setContent(popupContent);
                        } else {
                            liveMarker.bindPopup(popupContent);
                        }
                    } else {
                        liveMarker = L.marker([curLat, curLng], {
                            icon: makeDriverIcon(),
                            zIndexOffset: 300
                        }).addTo(liveMap).bindPopup(popupContent);
                    }
                    liveMarker.bringToFront();
                }

                // Smoothly center vehicle on map (every 10s refresh)
                if (curLat && curLng) {
                    if (isFirstLoad) {
                        liveMap.setView([curLat, curLng], 17);
                    } else if (res.trip_status !== 'completed') {
                        liveMap.panTo([curLat, curLng], {
                            animate: true,
                            duration: 1.2
                        });
                    }
                }

                const nowTime = new Date().toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                });
                const statusLabel = res.trip_status === 'completed' ?
                    '<i class="bx bx-check-circle" style="color:#10b981"></i> Trip completed' :
                    '<i class="bx bx-radio-circle" style="color:#10b981; animation:livePulse 1.5s infinite"></i> Live — refreshed at ' + nowTime;
                document.getElementById('liveStatusText').innerHTML = statusLabel;

                if (res.trip_status === 'completed' && livePollInterval) {
                    clearInterval(livePollInterval);
                    livePollInterval = null;
                }
            })
            .catch(err => {
                console.error("fetchLiveLocation error:", err);
                document.getElementById('liveStatusText').innerHTML = '<i class="bx bx-loader-alt bx-spin" style="color:#f59e0b"></i> Connecting to driver GPS...';
            });
    }

    document.addEventListener('DOMContentLoaded', function() {
        initLiveMap();
        fetchLiveLocation(true);
        livePollInterval = setInterval(() => fetchLiveLocation(false), 10000);
    });

    window.addEventListener('beforeunload', function() {
        if (livePollInterval) clearInterval(livePollInterval);
    });
</script>