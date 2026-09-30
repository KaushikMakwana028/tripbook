<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!-- ===== Custom Styles ===== -->
        <style>
            /* ---------- General ---------- */
            .page-content {
                padding: 24px;
            }

            /* ---------- Greeting Banner ---------- */
            .greeting-banner {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border-radius: 20px;
                padding: 32px 36px;
                color: #fff;
                margin-bottom: 28px;
                position: relative;
                overflow: hidden;
                box-shadow: 0 10px 40px rgba(102, 126, 234, .35);
            }

            .greeting-banner::before {
                content: '';
                position: absolute;
                width: 260px;
                height: 260px;
                background: rgba(255, 255, 255, .08);
                border-radius: 50%;
                top: -80px;
                right: -60px;
            }

            .greeting-banner::after {
                content: '';
                position: absolute;
                width: 160px;
                height: 160px;
                background: rgba(255, 255, 255, .06);
                border-radius: 50%;
                bottom: -40px;
                right: 100px;
            }

            .greeting-banner h3 {
                font-weight: 700;
                margin-bottom: 6px;
                font-size: 1.6rem;
            }

            .greeting-banner p {
                opacity: .85;
                margin: 0;
                font-size: .95rem;
            }

            .greeting-date {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: rgba(255, 255, 255, .15);
                backdrop-filter: blur(6px);
                padding: 8px 18px;
                border-radius: 50px;
                font-size: .85rem;
                margin-top: 14px;
            }

            /* ---------- Stat Cards ---------- */
            .stat-card {
                border: none;
                border-radius: 20px;
                transition: all .35s cubic-bezier(.25, .8, .25, 1);
                overflow: hidden;
                position: relative;
                cursor: default;
            }

            .stat-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 16px 48px rgba(0, 0, 0, .12);
            }

            .stat-card .card-body {
                padding: 28px 24px;
                position: relative;
                z-index: 1;
            }

            .stat-card .stat-icon {
                width: 60px;
                height: 60px;
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 26px;
                flex-shrink: 0;
                transition: transform .3s ease;
            }

            .stat-card:hover .stat-icon {
                transform: scale(1.1) rotate(5deg);
            }

            .stat-card .stat-label {
                font-size: .82rem;
                color: #7c8db5;
                text-transform: uppercase;
                letter-spacing: .6px;
                font-weight: 600;
                margin-bottom: 6px;
            }

            .stat-card .stat-value {
                font-size: 1.85rem;
                font-weight: 800;
                color: #1e293b;
                line-height: 1.1;
            }

            .stat-card .stat-badge {
                display: inline-flex;
                align-items: center;
                gap: 4px;
                font-size: .75rem;
                font-weight: 600;
                padding: 4px 10px;
                border-radius: 50px;
                margin-top: 8px;
            }

            /* Card accent stripe */
            .stat-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 4px;
                z-index: 2;
            }

            .stat-card.card-trips::before {
                background: linear-gradient(90deg, #f59e0b, #f97316);
            }

            .stat-card.card-drivers::before {
                background: linear-gradient(90deg, #10b981, #059669);
            }

            .stat-card.card-company::before {
                background: linear-gradient(90deg, #ef4444, #f43f5e);
            }

            /* Icon backgrounds */
            .icon-trips {
                background: linear-gradient(135deg, #fef3c7, #fde68a);
                color: #d97706;
            }

            .icon-drivers {
                background: linear-gradient(135deg, #d1fae5, #a7f3d0);
                color: #059669;
            }

            .icon-company {
                background: linear-gradient(135deg, #fee2e2, #fecaca);
                color: #dc2626;
            }

            /* Decorative circle on stat cards */
            .stat-card .deco-circle {
                position: absolute;
                width: 120px;
                height: 120px;
                border-radius: 50%;
                opacity: .06;
                right: -20px;
                bottom: -30px;
            }

            .stat-card.card-trips .deco-circle {
                background: #f59e0b;
            }

            .stat-card.card-drivers .deco-circle {
                background: #10b981;
            }

            .stat-card.card-company .deco-circle {
                background: #ef4444;
            }

            /* ---------- Today Section ---------- */
            .today-card {
                border: none;
                border-radius: 20px;
                box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
                overflow: hidden;
                transition: box-shadow .3s ease;
            }

            .today-card:hover {
                box-shadow: 0 8px 36px rgba(0, 0, 0, .1);
            }

            .today-card .card-body {
                padding: 32px;
            }

            .today-header {
                display: flex;
                align-items: center;
                gap: 14px;
                margin-bottom: 28px;
            }

            .today-header .header-icon {
                width: 48px;
                height: 48px;
                border-radius: 14px;
                background: linear-gradient(135deg, #667eea, #764ba2);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-size: 22px;
                flex-shrink: 0;
            }

            .today-header h6 {
                font-weight: 700;
                font-size: 1.15rem;
                color: #1e293b;
                margin: 0;
            }

            .today-header span {
                font-size: .82rem;
                color: #94a3b8;
            }

            /* Total trips hero */
            .total-trips-hero {
                background: linear-gradient(135deg, #f0f4ff 0%, #e8ecfb 100%);
                border-radius: 18px;
                padding: 28px;
                display: flex;
                align-items: center;
                gap: 20px;
                margin-bottom: 24px;
                position: relative;
                overflow: hidden;
            }

            .total-trips-hero::after {
                content: '';
                position: absolute;
                width: 100px;
                height: 100px;
                background: rgba(102, 126, 234, .08);
                border-radius: 50%;
                right: 20px;
                top: -20px;
            }

            .total-trips-hero .hero-icon {
                width: 64px;
                height: 64px;
                border-radius: 50%;
                background: linear-gradient(135deg, #667eea, #764ba2);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-size: 28px;
                flex-shrink: 0;
                box-shadow: 0 8px 24px rgba(102, 126, 234, .3);
                animation: pulse-ring 2.5s infinite;
            }

            @keyframes pulse-ring {
                0% {
                    box-shadow: 0 0 0 0 rgba(102, 126, 234, .35);
                }

                70% {
                    box-shadow: 0 0 0 14px rgba(102, 126, 234, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
                }
            }

            .total-trips-hero h2 {
                font-size: 2.4rem;
                font-weight: 800;
                color: #1e293b;
                margin: 0;
                line-height: 1;
            }

            .total-trips-hero p {
                margin: 2px 0 0;
                color: #64748b;
                font-weight: 500;
                font-size: .9rem;
            }

            /* Sub stat tiles */
            .sub-stat {
                border: 2px solid transparent;
                border-radius: 18px;
                padding: 24px 20px;
                text-align: center;
                transition: all .3s ease;
                position: relative;
                overflow: hidden;
            }

            .sub-stat:hover {
                transform: translateY(-4px);
            }

            .sub-stat.completed {
                background: linear-gradient(135deg, #ecfdf5, #d1fae5);
                border-color: #a7f3d0;
            }

            .sub-stat.completed:hover {
                box-shadow: 0 8px 30px rgba(16, 185, 129, .18);
            }

            .sub-stat.running {
                background: linear-gradient(135deg, #fffbeb, #fef3c7);
                border-color: #fde68a;
            }

            .sub-stat.running:hover {
                box-shadow: 0 8px 30px rgba(245, 158, 11, .18);
            }

            .sub-stat .sub-icon {
                width: 52px;
                height: 52px;
                border-radius: 50%;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                margin-bottom: 14px;
            }

            .sub-stat.completed .sub-icon {
                background: rgba(16, 185, 129, .15);
                color: #059669;
            }

            .sub-stat.running .sub-icon {
                background: rgba(245, 158, 11, .15);
                color: #d97706;
            }

            .sub-stat h4 {
                font-weight: 800;
                font-size: 1.6rem;
                margin-bottom: 4px;
                color: #1e293b;
            }

            .sub-stat p {
                margin: 0;
                font-size: .85rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: .5px;
            }

            .sub-stat.completed p {
                color: #059669;
            }

            .sub-stat.running p {
                color: #d97706;
            }

            /* Running spinner */
            .sub-stat.running .sub-icon i {
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                100% {
                    transform: rotate(360deg);
                }
            }

            /* ---------- Quick-Info Side Card ---------- */
            .quick-info-card {
                border: none;
                border-radius: 20px;
                box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
                overflow: hidden;
            }

            .quick-info-card .card-body {
                padding: 32px;
            }

            .info-item {
                display: flex;
                align-items: center;
                gap: 16px;
                padding: 16px 0;
                border-bottom: 1px solid #f1f5f9;
                transition: background .2s ease;
            }

            .info-item:last-child {
                border-bottom: none;
                padding-bottom: 0;
            }

            .info-item:first-child {
                padding-top: 0;
            }

            .info-item .info-icon {
                width: 44px;
                height: 44px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                flex-shrink: 0;
            }

            .info-item .info-label {
                font-size: .82rem;
                color: #94a3b8;
                margin-bottom: 2px;
            }

            .info-item .info-value {
                font-weight: 700;
                font-size: 1.05rem;
                color: #1e293b;
            }

            /* ---------- Responsive ---------- */
            @media (max-width: 767.98px) {
                .greeting-banner {
                    padding: 24px 20px;
                }

                .greeting-banner h3 {
                    font-size: 1.3rem;
                }

                .total-trips-hero h2 {
                    font-size: 1.8rem;
                }

                .stat-card .stat-value {
                    font-size: 1.5rem;
                }
            }
           /* ── Company Code Box ── */
.company-code-box {
    margin-top: 15px;
    display: inline-flex;
    flex-direction: column;
    gap: 6px;
}
.greeting-banner{
    display:flex;
    flex-direction:column;
    align-items:flex-start;
    gap:10px;
}

.greeting-date{
    margin-top:5px;
}

.code-label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    opacity: 0.7;
    display: block;
}

.code-card {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.18);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 14px;
    padding: 10px 14px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.15), inset 0 1px 0 rgba(255,255,255,0.25);
    backdrop-filter: blur(6px);
}

.code-number {
    font-size: 28px;
    font-weight: 900;
    letter-spacing: 6px;
    background: white;
    color: #5b6cff;
    display: inline-block;
    padding: 6px 16px;
    border-radius: 10px;
    box-shadow: 0 4px 14px rgba(91, 108, 255, 0.3);
    user-select: all;
    position: relative;
}

.code-number::before {
    content: '';
    position: absolute;
    top: -4px;
    right: -4px;
    width: 10px;
    height: 10px;
    background: #4ade80;
    border-radius: 50%;
    border: 2px solid white;
    box-shadow: 0 0 6px rgba(74, 222, 128, 0.7);
}

.copy-btn {
    background: rgba(255, 255, 255, 0.22);
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 10px;
    color: white;
    padding: 8px 12px;
    cursor: pointer;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 5px;
    font-weight: 600;
    transition: all 0.2s ease;
    white-space: nowrap;
}

.copy-btn:hover {
    background: rgba(255, 255, 255, 0.35);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.copy-btn.copied {
    background: rgba(74, 222, 128, 0.3);
    border-color: rgba(74, 222, 128, 0.5);
    color: #d1fae5;
}

.copy-btn i {
    font-size: 15px;
}
        </style>

        <!-- ===== Greeting Banner ===== -->
       <div class="greeting-banner">
<?php
$admin = $this->session->userdata('admin');

$user_name     = !empty($admin['name']) ? $admin['name'] : 'User';
$company_code  = !empty($admin['company_code']) ? $admin['company_code'] : '';
?>

<h3>
    👋 Welcome back, <?= ucfirst($user_name); ?>!
</h3>

<?php if($company_code){ ?>
<div class="company-code-box">
    <span class="code-label">Company Code</span>
    <div class="code-card">
        <div class="code-number" id="companyCodeVal"><?= $company_code; ?></div>
        <button class="copy-btn" onclick="copyCompanyCode(this)" title="Copy code">
            <i class='bx bx-copy'></i>
            <span>Copy</span>
        </button>
    </div>
</div>
<?php } ?>

<div class="greeting-date">
    <i class="bx bx-calendar"></i>
    <span id="currentDate"></span>
</div>

</div>

<script>
function copyCompanyCode(btn) {
    const code = document.getElementById('companyCodeVal').innerText.trim();
    navigator.clipboard.writeText(code).then(() => {
        btn.classList.add('copied');
        btn.querySelector('i').className = 'bx bx-check';
        btn.querySelector('span').textContent = 'Copied!';
        setTimeout(() => {
            btn.classList.remove('copied');
            btn.querySelector('i').className = 'bx bx-copy';
            btn.querySelector('span').textContent = 'Copy';
        }, 2000);
    });
}
</script>
        <!-- ===== Stat Cards Row ===== -->
        <div class="row g-4 mb-4">
            <!-- Total This Month Trips -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card stat-card card-trips">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="stat-label mb-0">This Month's Trips</p>
                                <h4 class="stat-value"><?= $total_month_trips ?></h4>
                                <span class="stat-badge" style="background:#fef3c7;color:#d97706;">
                                    <i class="bx bx-trending-up"></i> This Month
                                </span>
                            </div>
                            <div class="stat-icon icon-trips">
                                <i class="bx bxs-car"></i>
                            </div>
                        </div>
                        <div class="deco-circle"></div>
                    </div>
                </div>
            </div>

            <!-- Total Drivers -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card stat-card card-drivers">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="stat-label mb-0">Total Drivers</p>
                                <h4 class="stat-value"><?= $total_drivers ?></h4>
                                <span class="stat-badge" style="background:#d1fae5;color:#059669;">
                                    <i class="bx bx-group"></i> Active
                                </span>
                            </div>
                            <div class="stat-icon icon-drivers">
                                <i class="bx bxs-user-badge"></i>
                            </div>
                        </div>
                        <div class="deco-circle"></div>
                    </div>
                </div>
            </div>

            <!-- Total Companies -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card stat-card card-company">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="stat-label mb-0">Total Companies</p>
                                <h4 class="stat-value"><?= $total_companies ?></h4>
                                <span class="stat-badge" style="background:#fee2e2;color:#dc2626;">
                                    <i class="bx bx-buildings"></i> Registered
                                </span>
                            </div>
                            <div class="stat-icon icon-company">
                                <i class="bx bxs-building-house"></i>
                            </div>
                        </div>
                        <div class="deco-circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== Today Section ===== -->
        <div class="row g-4">
            <!-- Today's Trip Data -->
            <div class="col-12 col-xl-7">
                <div class="card today-card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="today-header">
                            <div class="header-icon">
                                <i class="bx bx-map-alt"></i>
                            </div>
                            <div>
                                <h6>Today's Trip Data</h6>
                                <span>Real-time trip overview</span>
                            </div>
                        </div>

                        <!-- Hero – Total Trips -->
                        <div class="total-trips-hero">
                            <div class="hero-icon">
                                <i class="bx bx-trip"></i>
                            </div>
                            <div>
                                <h2><?= $total_today_trips ?></h2>
                                <p>Total Trips Today</p>
                            </div>
                        </div>

                        <!-- Sub Stats -->
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="sub-stat completed">
                                    <div class="sub-icon">
                                        <i class="bx bx-check-circle"></i>
                                    </div>
                                    <h4><?= $completed_trips_today ?></h4>
                                    <p>Completed</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="sub-stat running">
                                    <div class="sub-icon">
                                        <i class="bx bx-loader-alt"></i>
                                    </div>
                                    <h4><?= $running_trips_today ?></h4>
                                    <p>Running</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Info Side Panel -->
            <div class="col-12 col-xl-5">
                <div class="card quick-info-card h-100">
                    <div class="card-body d-flex flex-column">
                        <div class="today-header">
                            <div class="header-icon" style="background:linear-gradient(135deg,#f59e0b,#f97316);">
                                <i class="bx bx-bar-chart-alt-2"></i>
                            </div>
                            <div>
                                <h6>Quick Summary</h6>
                                <span>Key metrics at a glance</span>
                            </div>
                        </div>

                        <div class="flex-grow-1">
                            <!-- Completion Rate -->
                            <div class="info-item">
                                <div class="info-icon" style="background:#ecfdf5;color:#059669;">
                                    <i class="bx bx-check-double"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="info-label">Completion Rate</div>
                                    <div class="info-value" id="completionRate">—</div>
                                </div>
                            </div>

                            <!-- Active Now -->
                            <div class="info-item">
                                <div class="info-icon" style="background:#fef3c7;color:#d97706;">
                                    <i class="bx bx-pulse"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="info-label">Active Trips Right Now</div>
                                    <div class="info-value"><?= $running_trips_today ?></div>
                                </div>
                                <span class="badge rounded-pill"
                                    style="background:#fef3c7;color:#d97706;font-size:.75rem;">
                                    <i class="bx bx-radio-circle-marked bx-flashing"></i> Live
                                </span>
                            </div>

                            <!-- Trips This Month -->
                            <div class="info-item">
                                <div class="info-icon" style="background:#ede9fe;color:#7c3aed;">
                                    <i class="bx bx-calendar-event"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="info-label">Trips This Month</div>
                                    <div class="info-value"><?= $total_month_trips ?></div>
                                </div>
                            </div>

                            <!-- Fleet Size -->
                            <div class="info-item">
                                <div class="info-icon" style="background:#e0f2fe;color:#0284c7;">
                                    <i class="bx bx-car"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="info-label">Registered Drivers</div>
                                    <div class="info-value"><?= $total_drivers ?></div>
                                </div>
                            </div>

                            <!-- Companies -->
                            <div class="info-item">
                                <div class="info-icon" style="background:#fee2e2;color:#dc2626;">
                                    <i class="bx bx-buildings"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="info-label">Partner Companies</div>
                                    <div class="info-value"><?= $total_companies ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->

<!-- ===== Inline Script ===== -->
<script>
    // Display current date
    document.getElementById('currentDate').textContent =
        new Date().toLocaleDateString('en-US', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });

    // Calculate completion rate
    (function () {
        var total = parseInt('<?= $total_today_trips ?>') || 0;
        var completed = parseInt('<?= $completed_trips_today ?>') || 0;
        var rate = total > 0 ? Math.round((completed / total) * 100) : 0;
        document.getElementById('completionRate').textContent = rate + '%';
    })();

    // Animate numbers on load
    document.querySelectorAll('.stat-value, .total-trips-hero h2, .sub-stat h4').forEach(function (el) {
        var target = parseInt(el.textContent) || 0;
        if (target === 0) return;
        var current = 0;
        var step = Math.ceil(target / 40);
        var timer = setInterval(function () {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = current.toLocaleString();
        }, 30);
    });
</script>