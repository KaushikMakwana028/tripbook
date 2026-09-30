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

    /* Layer switcher custom style */
    .map-layer-switcher {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1000;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        padding: 10px 14px;
        min-width: 170px;
        border: 1px solid #e8ecf1;
    }

    .map-layer-switcher .switcher-title {
        font-size: 0.7rem;
        font-weight: 700;
        color: #8b95a5;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
        padding-bottom: 6px;
        border-bottom: 1px solid #f0f2f5;
    }

    .map-layer-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 7px 10px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 0.82rem;
        font-weight: 600;
        color: #475569;
        transition: all 0.2s;
        border: 2px solid transparent;
        margin-bottom: 4px;
        background: #f8fafc;
        width: 100%;
        text-align: left;
    }

    .map-layer-btn:last-child {
        margin-bottom: 0;
    }

    .map-layer-btn:hover {
        background: #eff6ff;
        color: #3b82f6;
    }

    .map-layer-btn.active {
        background: #eff6ff;
        border-color: #3b82f6;
        color: #3b82f6;
    }

    .map-layer-btn .layer-icon {
        font-size: 14px;
        width: 20px;
        text-align: center;
    }

    @keyframes driverRing {
        0% {
            transform: scale(0.8);
            opacity: 0.8;
        }

        70% {
            transform: scale(1.6);
            opacity: 0;
        }

        100% {
            transform: scale(0.8);
            opacity: 0;
        }
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
</style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<div class="page-wrapper">
    <div class="page-content">
        <div class="live-page-wrapper">

            <!-- Hero -->
            <div class="live-hero">
                <div class="live-hero-top">
                    <div class="live-hero-title">
                        <div class="live-hero-icon"><i class="bx bx-current-location"></i></div>
                        <div>
                            <h4>Live Location — Trip #<?= $trip['id']; ?></h4>
                            <p><?= !empty($trip['from_location']) ? $trip['from_location'] : 'On Call Trip'; ?><?= !empty($trip['to_location']) ? ' → ' . $trip['to_location'] : ''; ?></p>
                        </div>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <span class="live-status-pill <?= $trip['status'] === 'completed' ? 'completed' : 'running'; ?>">
                            <span class="pulse-dot"></span>
                            <?= strtoupper($trip['status']); ?>
                        </span>
                        <a href="<?= base_url('booking'); ?>" class="btn-back">
                            <i class="bx bx-arrow-back"></i> Back to Trips
                        </a>
                    </div>
                </div>
            </div>

            <!-- Info cards -->
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

            <!-- Map -->
            <div class="live-map-card">
                <div class="live-map-card-header">
                    <h5><i class="bx bx-map-alt"></i> Route Tracking</h5>
                    <div id="liveStatusText">
                        <i class="bx bx-loader-alt bx-spin"></i> Loading map...
                    </div>
                </div>
                <div style="position:relative;">
                    <div id="liveMap"></div>
                    <!-- Custom Layer Switcher -->
                    <div class="map-layer-switcher" id="layerSwitcher">
                        <div class="switcher-title">🗺️ Map Style</div>
                        <button class="map-layer-btn active" onclick="switchLayer('street')" id="btn-street">
                            <span class="layer-icon">🛣️</span> Street
                        </button>
                        <button class="map-layer-btn" onclick="switchLayer('topo')" id="btn-topo">
                            <span class="layer-icon">🗻</span> Topo
                        </button>
                        <button class="map-layer-btn" onclick="switchLayer('satellite')" id="btn-satellite">
                            <span class="layer-icon">🛰️</span> Satellite
                        </button>
                        <button class="map-layer-btn" onclick="switchLayer('hybrid')" id="btn-hybrid">
                            <span class="layer-icon">🌍</span> Hybrid
                        </button>
                    </div>
                </div>
                <div class="route-legend">
                    <div class="legend-item"><span class="legend-dot" style="background:#10b981;"></span> Pickup</div>
                    <div class="legend-item"><span class="legend-dot" style="background:#3b82f6;"></span> Traveled Route</div>
                    <div class="legend-item"><span class="legend-dot" style="background:#ef4444;"></span> Drop Point</div>
                    <div class="legend-item"><span class="legend-dot" style="background:#f59e0b;"></span> Driver Position</div>
                </div>
            </div>

            <div style="margin-top:16px; text-align:center;">
                <a href="<?= base_url('trip_details/' . $trip['id']); ?>"
                    style="color:#3b82f6; font-size:0.85rem; font-weight:600; text-decoration:none;">
                    <i class="bx bx-detail"></i> View Full Trip Details
                </a>
            </div>

        </div>
    </div>
</div>

<script>
    const TRIP_ID = <?= (int) $trip['id']; ?>;

    let liveMap = null;
    let liveMarker = null;
    let livePolyline = null;
    let startMarker = null;
    let endMarker = null;
    let livePollInterval = null;
    let currentLayerKey = 'street';
    let activeTileLayer = null;
    let overlayLayer = null;

    /* ══════════════════════════════════════════════
       TILE DEFINITIONS  — All 100% FREE, No API Key
       Tested working as of 2024
    ══════════════════════════════════════════════ */
    function getTileLayer(key) {
        switch (key) {

            /* ── STREET ──────────────────────────────────
               OpenStreetMap via openstreetmap.de mirror
               Shows road names, shops, POIs perfectly     */
            case 'street':
                return L.tileLayer(
                    'https://tile.openstreetmap.de/{z}/{x}/{y}.png', {
                        maxZoom: 18,
                        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        // Set a proper referrer header via crossOrigin
                        crossOrigin: true
                    }
                );

                /* ── TOPO ────────────────────────────────────
                   OpenTopoMap — terrain + all OSM labels       */
            case 'topo':
                return L.tileLayer(
                    'https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                        maxZoom: 17,
                        attribution: '© <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
                    }
                );

                /* ── SATELLITE ───────────────────────────────
                   Esri World Imagery — free, no key needed     */
            case 'satellite':
                return L.tileLayer(
                    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                        maxZoom: 19,
                        attribution: 'Imagery © Esri, Maxar, Earthstar Geographics'
                    }
                );

                /* ── HYBRID ──────────────────────────────────
                   Satellite + OSM road/label overlay           */
            case 'hybrid':
                return null; // handled separately below

            default:
                return getTileLayer('street');
        }
    }

    /* ══════════════════════════════════════════════
       LAYER SWITCHER
    ══════════════════════════════════════════════ */
    function switchLayer(key) {
        if (!liveMap) return;
        currentLayerKey = key;

        /* Remove existing tile + overlay */
        if (activeTileLayer) {
            liveMap.removeLayer(activeTileLayer);
            activeTileLayer = null;
        }
        if (overlayLayer) {
            liveMap.removeLayer(overlayLayer);
            overlayLayer = null;
        }

        if (key === 'hybrid') {
            /* Satellite base */
            activeTileLayer = L.tileLayer(
                'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    maxZoom: 19,
                    attribution: 'Imagery © Esri'
                }
            ).addTo(liveMap);

            /* OSM road+label overlay on top */
            overlayLayer = L.tileLayer(
                'https://tile.openstreetmap.de/{z}/{x}/{y}.png', {
                    maxZoom: 18,
                    opacity: 0.6,
                    attribution: '© OpenStreetMap contributors'
                }
            ).addTo(liveMap);

        } else {
            activeTileLayer = getTileLayer(key);
            if (activeTileLayer) activeTileLayer.addTo(liveMap);
        }

        /* Update button states */
        document.querySelectorAll('.map-layer-btn').forEach(b => b.classList.remove('active'));
        const activeBtn = document.getElementById('btn-' + key);
        if (activeBtn) activeBtn.classList.add('active');

        /* Re-bring markers/polyline to front */
        setTimeout(() => {
            if (livePolyline) livePolyline.bringToFront();
            if (liveMarker) liveMarker.bringToFront();
            if (startMarker) startMarker.bringToFront();
            if (endMarker) endMarker.bringToFront();
        }, 300);
    }

    /* ══════════════════════════════════════════════
       CUSTOM MARKERS
    ══════════════════════════════════════════════ */
    function makeDriverIcon() {
        return L.divIcon({
            html: `<div style="position:relative;width:46px;height:46px;display:flex;align-items:center;justify-content:center;">
                 <div style="position:absolute;width:46px;height:46px;border-radius:50%;
                             background:rgba(245,158,11,0.3);
                             animation:driverRing 1.8s infinite ease-out;"></div>
                 <div style="width:34px;height:34px;background:#f59e0b;border:3px solid #fff;
                             border-radius:50%;display:flex;align-items:center;justify-content:center;
                             box-shadow:0 4px 14px rgba(245,158,11,0.7);font-size:17px;z-index:2;">
                   🚖
                 </div>
               </div>`,
            className: '',
            iconSize: [46, 46],
            iconAnchor: [23, 23],
            popupAnchor: [0, -26]
        });
    }

    function makePickupIcon() {
        return L.divIcon({
            html: `<div style="width:32px;height:32px;background:#10b981;border:3px solid #fff;
                           border-radius:50%;display:flex;align-items:center;justify-content:center;
                           box-shadow:0 3px 10px rgba(16,185,129,0.6);font-size:16px;">
                 📍
               </div>`,
            className: '',
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -34]
        });
    }

    function makeDropIcon() {
        return L.divIcon({
            html: `<div style="width:32px;height:32px;background:#ef4444;border:3px solid #fff;
                           border-radius:50%;display:flex;align-items:center;justify-content:center;
                           box-shadow:0 3px 10px rgba(239,68,68,0.6);font-size:16px;">
                 🏁
               </div>`,
            className: '',
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -34]
        });
    }

    /* ══════════════════════════════════════════════
       INIT MAP
    ══════════════════════════════════════════════ */
    function initLiveMap() {
        liveMap = L.map('liveMap', {
            center: [22.3072, 73.1812],
            zoom: 15,
            zoomControl: true,
            attributionControl: true
        });

        /* Add default street layer */
        activeTileLayer = getTileLayer('street');
        if (activeTileLayer) activeTileLayer.addTo(liveMap);

        /* Scale bar */
        L.control.scale({
            imperial: false,
            position: 'bottomleft'
        }).addTo(liveMap);

        /* Inject driver ring animation */
        if (!document.getElementById('driverRingStyle')) {
            const s = document.createElement('style');
            s.id = 'driverRingStyle';
            s.textContent = `
            @keyframes driverRing {
                0%   { transform:scale(0.8); opacity:0.9; }
                70%  { transform:scale(1.8); opacity:0; }
                100% { transform:scale(0.8); opacity:0; }
            }`;
            document.head.appendChild(s);
        }
    }

    /* ══════════════════════════════════════════════
       FETCH LIVE LOCATION
    ══════════════════════════════════════════════ */
    let isFirstLoad = true;

    function fetchLiveLocation() {
        fetch('<?= base_url("driver/get_trip_location/") ?>' + TRIP_ID)
            .then(r => r.json())
            .then(res => {
                if (!res.status) {
                    document.getElementById('liveStatusText').innerHTML =
                        '<i class="bx bx-error-circle" style="color:#ef4444"></i> ' +
                        (res.message || 'Unable to load location data');
                    return;
                }

                const trail = res.trail || [];
                const latlngs = trail.map(p => [parseFloat(p.lat), parseFloat(p.lng)]);

                /* Polyline */
                if (latlngs.length > 0) {
                    if (livePolyline) {
                        livePolyline.setLatLngs(latlngs);
                    } else {
                        livePolyline = L.polyline(latlngs, {
                            color: '#3b82f6',
                            weight: 5,
                            opacity: 0.85,
                            lineJoin: 'round'
                        }).addTo(liveMap);
                    }
                }

                /* Pickup marker */
                if (latlngs.length > 0 && !startMarker) {
                    startMarker = L.marker(latlngs[0], {
                            icon: makePickupIcon(),
                            zIndexOffset: 100
                        })
                        .addTo(liveMap)
                        .bindPopup(`<div style="padding:10px 14px;min-width:160px;">
                    <div style="font-weight:700;font-size:0.9rem;color:#10b981;margin-bottom:3px;">📍 Pickup Point</div>
                    <div style="font-size:0.78rem;color:#64748b;">Trip started here</div>
                </div>`);
                }

                /* Current position */
                const curLat = res.current_lat ?
                    parseFloat(res.current_lat) :
                    (latlngs.length ? latlngs[latlngs.length - 1][0] : null);
                const curLng = res.current_lng ?
                    parseFloat(res.current_lng) :
                    (latlngs.length ? latlngs[latlngs.length - 1][1] : null);

                if (res.trip_status === 'completed') {
                    /* Remove live driver marker, add drop marker */
                    if (liveMarker) {
                        liveMap.removeLayer(liveMarker);
                        liveMarker = null;
                    }
                    if (curLat && curLng && !endMarker) {
                        endMarker = L.marker([curLat, curLng], {
                                icon: makeDropIcon(),
                                zIndexOffset: 200
                            })
                            .addTo(liveMap)
                            .bindPopup(`<div style="padding:10px 14px;min-width:160px;">
                        <div style="font-weight:700;font-size:0.9rem;color:#ef4444;margin-bottom:3px;">🏁 Drop Point</div>
                        <div style="font-size:0.78rem;color:#64748b;">Trip ended here</div>
                    </div>`);
                    }
                } else if (curLat && curLng) {
                    if (liveMarker) {
                        liveMarker.setLatLng([curLat, curLng]);
                    } else {
                        liveMarker = L.marker([curLat, curLng], {
                                icon: makeDriverIcon(),
                                zIndexOffset: 300
                            })
                            .addTo(liveMap)
                            .bindPopup(`<div style="padding:10px 14px;min-width:180px;">
                        <div style="font-weight:700;font-size:0.9rem;color:#1a1d29;margin-bottom:3px;">
                            🚖 <?= !empty($trip['driver_name']) ? addslashes($trip['driver_name']) : 'Driver'; ?>
                        </div>
                        <div style="font-size:0.78rem;color:#64748b;margin-bottom:4px;">
                            Vehicle: <?= !empty($trip['vehicle_number']) ? addslashes($trip['vehicle_number']) : 'N/A'; ?>
                        </div>
                        <div style="font-size:0.78rem;font-weight:700;color:#10b981;">● LIVE TRACKING</div>
                    </div>`);
                    }
                }

                /* Fit / Pan */
                if (isFirstLoad) {
                    isFirstLoad = false;
                    if (livePolyline && latlngs.length > 1) {
                        liveMap.fitBounds(livePolyline.getBounds(), {
                            padding: [50, 50]
                        });
                    } else if (curLat && curLng) {
                        liveMap.setView([curLat, curLng], 16);
                    }
                } else if (res.trip_status !== 'completed' && curLat && curLng) {
                    liveMap.panTo([curLat, curLng], {
                        animate: true,
                        duration: 1
                    });
                }

                /* Status text */
                if (res.trip_status === 'completed') {
                    document.getElementById('liveStatusText').innerHTML =
                        '<i class="bx bx-check-circle" style="color:#10b981"></i> Trip Completed — Full route displayed';
                    if (livePollInterval) {
                        clearInterval(livePollInterval);
                        livePollInterval = null;
                    }
                } else {
                    document.getElementById('liveStatusText').innerHTML =
                        '<i class="bx bx-radio-circle" style="color:#f59e0b;animation:livePulse 1.5s infinite"></i> Live — updated ' +
                        (res.location_updated_at || 'just now');
                }
            })
            .catch(err => {
                console.error(err);
                document.getElementById('liveStatusText').innerHTML =
                    '<i class="bx bx-error" style="color:#ef4444"></i> Connection error. Retrying in 10s...';
            });
    }

    /* ══════════════════════════════════════════════
       BOOT
    ══════════════════════════════════════════════ */
    document.addEventListener('DOMContentLoaded', function() {
        initLiveMap();
        fetchLiveLocation();
        livePollInterval = setInterval(fetchLiveLocation, 10000);
    });

    window.addEventListener('beforeunload', function() {
        if (livePollInterval) clearInterval(livePollInterval);
    });
</script>