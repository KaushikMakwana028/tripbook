<style>
  /* ===== Enhanced Trip Details Page Styles ===== */

  /* Breadcrumb Enhanced */
  .breadcrumb-enhanced {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    border-radius: 15px;
    padding: 18px 25px;
    margin-bottom: 25px;
    border: 1px solid rgba(102, 126, 234, 0.1);
    animation: fadeInDown 0.4s ease;
  }

  .breadcrumb-enhanced .breadcrumb {
    margin: 0;
    padding: 0;
    background: transparent;
  }

  .breadcrumb-enhanced .breadcrumb-item a {
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
  }

  .breadcrumb-enhanced .breadcrumb-item a:hover {
    color: #764ba2;
  }

  .breadcrumb-enhanced .breadcrumb-item.active {
    color: #495057;
    font-weight: 600;
  }

  .breadcrumb-enhanced .breadcrumb-title {
    font-size: 20px;
    font-weight: 700;
    color: #2d3748;
  }

  .btn-back-breadcrumb {
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 8px 18px;
    font-size: 13px;
    font-weight: 600;
    color: #4a5568;
    background: #fff;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .btn-back-breadcrumb:hover {
    border-color: #667eea;
    color: #667eea;
    background: #f8f9ff;
    transform: translateY(-1px);
  }

  /* Main Trip Card */
  .trip-detail-card {
    background: #ffffff;
    border: none;
    border-radius: 22px;
    box-shadow: 0 10px 45px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    animation: fadeInUp 0.5s ease;
    transition: box-shadow 0.3s;
  }

  .trip-detail-card:hover {
    box-shadow: 0 18px 55px rgba(0, 0, 0, 0.12);
  }

  /* Card Header */
  .trip-card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 30px 35px;
    position: relative;
    overflow: hidden;
  }

  .trip-card-header::before {
    content: '';
    position: absolute;
    top: -60%;
    right: -18%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.07);
    border-radius: 50%;
  }

  .trip-card-header::after {
    content: '';
    position: absolute;
    bottom: -70%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 50%;
  }

  .trip-header-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 15px;
  }

  .trip-header-left {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .trip-header-icon {
    width: 58px;
    height: 58px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #fff;
    backdrop-filter: blur(10px);
  }

  .trip-header-text h5 {
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    margin: 0;
  }

  .trip-header-text .header-sub {
    color: rgba(255, 255, 255, 0.75);
    font-size: 13px;
    margin-top: 4px;
    display: flex;
    align-items: center;
    gap: 5px;
  }

  /* Status Badge in Header */
  .header-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 22px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    position: relative;
    z-index: 1;
  }

  .header-status-badge.completed {
    background: rgba(72, 187, 120, 0.2);
    color: #c6f6d5;
    border: 1px solid rgba(72, 187, 120, 0.3);
  }

  .header-status-badge.running {
    background: rgba(245, 158, 11, 0.2);
    color: #fef3c7;
    border: 1px solid rgba(245, 158, 11, 0.3);
    animation: pulse-badge 2s infinite;
  }

  .header-status-badge .badge-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
  }

  .header-status-badge.completed .badge-dot {
    background: #48bb78;
    box-shadow: 0 0 8px rgba(72, 187, 120, 0.6);
  }

  .header-status-badge.running .badge-dot {
    background: #f59e0b;
    animation: blink 1.2s infinite;
    box-shadow: 0 0 8px rgba(245, 158, 11, 0.6);
  }

  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
  }

  @keyframes pulse-badge {
    0%, 100% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.3); }
    50% { box-shadow: 0 0 0 8px rgba(245, 158, 11, 0); }
  }

  /* Card Body */
  .trip-card-body {
    padding: 35px;
  }

  /* Quick Stats Row */
  .quick-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
    margin-bottom: 32px;
  }

  .stat-card {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    border-radius: 16px;
    padding: 22px 20px;
    text-align: center;
    border: 1px solid rgba(102, 126, 234, 0.08);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    border-radius: 16px 16px 0 0;
  }

  .stat-card.km::before { background: linear-gradient(90deg, #667eea, #764ba2); }
  .stat-card.hours::before { background: linear-gradient(90deg, #f093fb, #f5576c); }
  .stat-card.otp::before { background: linear-gradient(90deg, #43e97b, #38f9d7); }

  .stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  }

  .stat-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 12px;
  }

  .stat-card.km .stat-card-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
  }

  .stat-card.hours .stat-card-icon {
    background: linear-gradient(135deg, #f093fb, #f5576c);
    color: #fff;
  }

  .stat-card.otp .stat-card-icon {
    background: linear-gradient(135deg, #43e97b, #38f9d7);
    color: #fff;
  }

  .stat-card-value {
    font-size: 26px;
    font-weight: 800;
    color: #2d3748;
    line-height: 1.2;
  }

  .stat-card-label {
    font-size: 12px;
    font-weight: 600;
    color: #718096;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-top: 4px;
  }

  /* Detail Sections */
  .detail-section {
    margin-bottom: 28px;
  }

  .section-heading {
    font-size: 15px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 18px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f0f2ff;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .section-heading .heading-icon {
    width: 32px;
    height: 32px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 15px;
  }

  .section-heading .heading-icon.time { background: linear-gradient(135deg, #667eea, #764ba2); }
  .section-heading .heading-icon.distance { background: linear-gradient(135deg, #f093fb, #f5576c); }
  .section-heading .heading-icon.verify { background: linear-gradient(135deg, #43e97b, #38f9d7); }

  /* Detail Rows */
  .detail-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }

  .detail-item {
    background: #fafbff;
    border: 1px solid #edf2f7;
    border-radius: 14px;
    padding: 18px 20px;
    display: flex;
    align-items: center;
    gap: 14px;
    transition: all 0.3s ease;
  }

  .detail-item:hover {
    background: #f0f2ff;
    border-color: rgba(102, 126, 234, 0.2);
    transform: translateX(4px);
  }

  .detail-item-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
  }

  .detail-item-icon.start-time {
    background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
    color: #4338ca;
  }

  .detail-item-icon.end-time {
    background: linear-gradient(135deg, #fce7f3, #fbcfe8);
    color: #be185d;
  }

  .detail-item-icon.start-km {
    background: linear-gradient(135deg, #d1fae5, #a7f3d0);
    color: #065f46;
  }

  .detail-item-icon.end-km {
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    color: #991b1b;
  }

  .detail-item-content {
    flex: 1;
  }

  .detail-item-label {
    font-size: 11px;
    font-weight: 700;
    color: #718096;
    text-transform: uppercase;
    letter-spacing: 0.7px;
    margin-bottom: 3px;
  }

  .detail-item-value {
    font-size: 16px;
    font-weight: 700;
    color: #2d3748;
  }

  .detail-item-value.muted {
    color: #a0aec0;
    font-weight: 500;
  }

  /* Journey Visual */
  .journey-visual {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 28px;
    border: 1px solid rgba(102, 126, 234, 0.08);
    position: relative;
  }

  .journey-row {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .journey-point {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0;
    position: relative;
  }

  .journey-dot {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 3px solid;
    z-index: 2;
  }

  .journey-dot.start {
    border-color: #48bb78;
    background: #c6f6d5;
  }

  .journey-dot.end {
    border-color: #e53e3e;
    background: #fed7d7;
  }

  .journey-line-container {
    flex: 1;
    position: relative;
    height: 4px;
  }

  .journey-line-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: #e2e8f0;
    border-radius: 4px;
  }

  .journey-line-fill {
    position: absolute;
    top: 0;
    left: 0;
    height: 4px;
    background: linear-gradient(90deg, #48bb78, #667eea, #e53e3e);
    border-radius: 4px;
    animation: lineGrow 1.5s ease forwards;
    width: 0;
  }

  @keyframes lineGrow {
    to { width: 100%; }
  }

  .journey-car-icon {
    position: absolute;
    top: -12px;
    font-size: 22px;
    color: #667eea;
    animation: carMove 1.5s ease forwards;
    left: 0;
  }

  @keyframes carMove {
    to { left: calc(100% - 22px); }
  }

  .journey-info {
    text-align: center;
  }

  .journey-info .info-label {
    font-size: 11px;
    font-weight: 600;
    color: #a0aec0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .journey-info .info-value {
    font-size: 14px;
    font-weight: 700;
    color: #2d3748;
    margin-top: 2px;
  }

  .journey-center-stat {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    border-radius: 12px;
    padding: 8px 18px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    text-align: center;
    z-index: 3;
    display: none;
  }

  /* Verification Badge */
  .verification-card {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 20px 24px;
    border-radius: 14px;
    transition: all 0.3s;
  }

  .verification-card.verified {
    background: linear-gradient(135deg, #f0fff4 0%, #c6f6d5 100%);
    border: 1px solid rgba(72, 187, 120, 0.2);
  }

  .verification-card.not-verified {
    background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
    border: 1px solid rgba(229, 62, 62, 0.2);
  }

  .verification-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
  }

  .verification-card.verified .verification-icon {
    background: rgba(72, 187, 120, 0.15);
    color: #22543d;
  }

  .verification-card.not-verified .verification-icon {
    background: rgba(229, 62, 62, 0.15);
    color: #9b2c2c;
  }

  .verification-text h6 {
    font-size: 15px;
    font-weight: 700;
    margin: 0 0 3px;
  }

  .verification-card.verified .verification-text h6 { color: #22543d; }
  .verification-card.not-verified .verification-text h6 { color: #9b2c2c; }

  .verification-text p {
    font-size: 12px;
    margin: 0;
    color: #718096;
  }

  /* Footer Actions */
  .trip-footer {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    margin: 0 -35px -35px;
    padding: 24px 35px;
    border-top: 1px solid #edf2f7;
    border-radius: 0 0 22px 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }

  .trip-id-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 6px 14px;
    font-size: 12px;
    font-weight: 600;
    color: #718096;
  }

  .trip-id-tag strong {
    color: #2d3748;
  }

  .footer-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }

  .btn-back-trips {
    background: #fff;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 11px 24px;
    font-size: 14px;
    font-weight: 600;
    color: #4a5568;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
  }

  .btn-back-trips:hover {
    border-color: #667eea;
    color: #667eea;
    background: #f8f9ff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.12);
  }

  .btn-print-trip {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 12px;
    padding: 11px 24px;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    cursor: pointer;
  }

  .btn-print-trip:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.45);
  }

  /* Animations */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-15px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .anim-delay-1 { animation-delay: 0.1s; }
  .anim-delay-2 { animation-delay: 0.2s; }
  .anim-delay-3 { animation-delay: 0.3s; }
  .anim-delay-4 { animation-delay: 0.4s; }

  .fade-section {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
  }

  .fade-section.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Responsive */
  @media (max-width: 768px) {
    .trip-card-header {
      padding: 24px 20px;
    }

    .trip-card-body {
      padding: 24px 20px;
    }

    .quick-stats {
      grid-template-columns: 1fr;
    }

    .detail-grid {
      grid-template-columns: 1fr;
    }

    .trip-footer {
      margin: 0 -20px -24px;
      padding: 20px;
      flex-direction: column;
      align-items: stretch;
      text-align: center;
    }

    .footer-actions {
      justify-content: center;
    }

    .trip-header-content {
      flex-direction: column;
      align-items: flex-start;
    }

    .stat-card-value {
      font-size: 22px;
    }

    .journey-row {
      flex-direction: column;
      align-items: stretch;
    }

    .journey-line-container {
      height: 40px;
      width: 4px;
      margin: 0 auto;
    }

    .journey-line-bg,
    .journey-line-fill {
      width: 4px;
      height: 100%;
    }

    .journey-line-fill {
      animation: lineGrowV 1.5s ease forwards;
      height: 0;
      width: 4px;
    }

    @keyframes lineGrowV {
      to { height: 100%; }
    }

    .journey-car-icon {
      display: none;
    }
  }

  @media print {
    .page-wrapper { padding: 0; }
    .breadcrumb-enhanced, .btn-print-trip, .btn-back-trips, .btn-back-breadcrumb { display: none !important; }
    .trip-detail-card { box-shadow: none; border: 1px solid #ddd; }
    .trip-card-header { background: #667eea !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
    .trip-footer { background: #f8f9ff !important; -webkit-print-color-adjust: exact; }
  }
</style>

<div class="page-wrapper">
  <div class="page-content">

    <!-- Enhanced Breadcrumb -->
    <div class="breadcrumb-enhanced">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div class="d-flex align-items-center gap-3">
          <div class="breadcrumb-title">Trips</div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item">
                <a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i> Dashboard</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?= base_url('driver'); ?>">Drivers</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?= base_url('driver/view/' . (isset($trip['user_id']) ? $trip['user_id'] : '')); ?>">Trips</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Trip Details</li>
            </ol>
          </nav>
        </div>
        <a href="<?= base_url('driver/view/' . (isset($trip['user_id']) ? $trip['user_id'] : '')); ?>" class="btn-back-breadcrumb">
          <i class="bx bx-arrow-back"></i> Back to Trips
        </a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="row">
      <div class="col-lg-9 col-xl-8 mx-auto">

        <?php
        $start_km    = isset($trip['start_km']) ? (float) $trip['start_km'] : 0;
        $end_km      = isset($trip['end_km']) ? (float) $trip['end_km'] : 0;
        $total_km    = ($end_km > $start_km) ? round($end_km - $start_km, 2) : 0;

        $start_time  = isset($trip['start_time']) ? strtotime($trip['start_time']) : 0;
        $end_time    = isset($trip['end_time']) ? strtotime($trip['end_time']) : 0;
        $total_hours = ($start_time && $end_time && $end_time > $start_time)
          ? round(($end_time - $start_time) / 3600, 2)
          : 0;

        $is_completed = (isset($trip['status']) && strtolower($trip['status']) === 'completed');
        $is_verified  = (isset($trip['otp_verified']) && $trip['otp_verified'] == 1);
        $status_class = $is_completed ? 'completed' : 'running';
        $status_label = $is_completed ? 'Completed' : 'Running';
        ?>

        <!-- Trip Detail Card -->
        <div class="trip-detail-card card">

          <!-- Card Header -->
          <div class="trip-card-header">
            <div class="trip-header-content">
              <div class="trip-header-left">
                <div class="trip-header-icon">
                  <i class="bx bx-trip"></i>
                </div>
                <div class="trip-header-text">
                  <h5>Trip Summary</h5>
                  <div class="header-sub">
                    <i class="bx bx-calendar"></i>
                    <?= isset($trip['trip_date']) ? date('d M Y', strtotime($trip['trip_date'])) : 'N/A'; ?>
                    <?php if (isset($trip['from_location']) || isset($trip['to_location'])): ?>
                      &nbsp;•&nbsp;
                      <i class="bx bx-map"></i>
                      <?= isset($trip['from_location']) ? $trip['from_location'] : ''; ?>
                      → <?= isset($trip['to_location']) ? $trip['to_location'] : ''; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div class="header-status-badge <?= $status_class; ?>">
                <span class="badge-dot"></span>
                <?= $status_label; ?>
              </div>
            </div>
          </div>

          <!-- Card Body -->
          <div class="trip-card-body">

            <!-- Quick Stats -->
            <div class="quick-stats fade-section">
              <div class="stat-card km">
                <div class="stat-card-icon">
                  <i class="bx bx-tachometer"></i>
                </div>
                <div class="stat-card-value"><?= $total_km; ?></div>
                <div class="stat-card-label">Total Kilometers</div>
              </div>

              <div class="stat-card hours">
                <div class="stat-card-icon">
                  <i class="bx bx-time-five"></i>
                </div>
                <div class="stat-card-value"><?= $total_hours; ?></div>
                <div class="stat-card-label">Total Hours</div>
              </div>

              <div class="stat-card otp">
                <div class="stat-card-icon">
                  <i class="bx <?= $is_verified ? 'bx-check-shield' : 'bx-shield-x'; ?>"></i>
                </div>
                <div class="stat-card-value"><?= $is_verified ? '✓' : '✗'; ?></div>
                <div class="stat-card-label">OTP <?= $is_verified ? 'Verified' : 'Pending'; ?></div>
              </div>
            </div>

            <!-- Journey Visual -->
            <div class="journey-visual fade-section">
              <div class="journey-row">
                <div class="journey-info" style="min-width: 100px;">
                  <div class="info-label">Start</div>
                  <div class="info-value">
                    <?= ($start_time) ? date('h:i A', $start_time) : '—'; ?>
                  </div>
                  <div class="info-label" style="margin-top: 4px;"><?= number_format($start_km, 2); ?> km</div>
                </div>

                <div class="journey-point">
                  <div class="journey-dot start"></div>
                </div>

                <div class="journey-line-container">
                  <div class="journey-line-bg"></div>
                  <div class="journey-line-fill"></div>
                  <div class="journey-car-icon">
                    <i class="bx bxs-car"></i>
                  </div>
                </div>

                <div class="journey-point">
                  <div class="journey-dot end"></div>
                </div>

                <div class="journey-info" style="min-width: 100px;">
                  <div class="info-label">End</div>
                  <div class="info-value">
                    <?= ($end_time) ? date('h:i A', $end_time) : '—'; ?>
                  </div>
                  <div class="info-label" style="margin-top: 4px;"><?= number_format($end_km, 2); ?> km</div>
                </div>
              </div>
            </div>

            <!-- Time Details Section -->
            <div class="detail-section fade-section">
              <div class="section-heading">
                <span class="heading-icon time"><i class="bx bx-time-five"></i></span>
                Time Details
              </div>
              <div class="detail-grid">
                <div class="detail-item">
                  <div class="detail-item-icon start-time">
                    <i class="bx bx-log-in-circle"></i>
                  </div>
                  <div class="detail-item-content">
                    <div class="detail-item-label">Start Time</div>
                    <div class="detail-item-value <?= !$start_time ? 'muted' : ''; ?>">
                      <?= $start_time ? date('h:i A', $start_time) : '—'; ?>
                    </div>
                  </div>
                </div>

                <div class="detail-item">
                  <div class="detail-item-icon end-time">
                    <i class="bx bx-log-out-circle"></i>
                  </div>
                  <div class="detail-item-content">
                    <div class="detail-item-label">End Time</div>
                    <div class="detail-item-value <?= !$end_time ? 'muted' : ''; ?>">
                      <?= $end_time ? date('h:i A', $end_time) : '—'; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Distance Details Section -->
            <div class="detail-section fade-section">
              <div class="section-heading">
                <span class="heading-icon distance"><i class="bx bx-trip"></i></span>
                Distance Details
              </div>
              <div class="detail-grid">
                <div class="detail-item">
                  <div class="detail-item-icon start-km">
                    <i class="bx bx-play-circle"></i>
                  </div>
                  <div class="detail-item-content">
                    <div class="detail-item-label">Start KM</div>
                    <div class="detail-item-value">
                      <?= isset($trip['start_km']) ? number_format($trip['start_km'], 2) . ' km' : '—'; ?>
                    </div>
                  </div>
                </div>

                <div class="detail-item">
                  <div class="detail-item-icon end-km">
                    <i class="bx bx-stop-circle"></i>
                  </div>
                  <div class="detail-item-content">
                    <div class="detail-item-label">End KM</div>
                    <div class="detail-item-value">
                      <?= isset($trip['end_km']) ? number_format($trip['end_km'], 2) . ' km' : '—'; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Verification Section -->
            <div class="detail-section fade-section">
              <div class="section-heading">
                <span class="heading-icon verify"><i class="bx bx-shield-quarter"></i></span>
                Verification & Status
              </div>

              <div class="detail-grid">
                <div class="verification-card <?= $is_verified ? 'verified' : 'not-verified'; ?>">
                  <div class="verification-icon">
                    <i class="bx <?= $is_verified ? 'bx-check-shield' : 'bx-shield-x'; ?>"></i>
                  </div>
                  <div class="verification-text">
                    <h6><?= $is_verified ? 'OTP Verified' : 'OTP Not Verified'; ?></h6>
                    <p><?= $is_verified ? 'Customer identity confirmed via OTP' : 'OTP verification is still pending'; ?></p>
                  </div>
                </div>

                <div class="detail-item">
                  <div class="detail-item-icon <?= $is_completed ? 'start-km' : 'end-km'; ?>">
                    <i class="bx <?= $is_completed ? 'bx-check-circle' : 'bx-loader-circle'; ?>"></i>
                  </div>
                  <div class="detail-item-content">
                    <div class="detail-item-label">Trip Status</div>
                    <div class="detail-item-value" style="color: <?= $is_completed ? '#22543d' : '#92400e'; ?>;">
                      <?= $status_label; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer -->
            <div class="trip-footer">
              <div class="trip-id-tag">
                <i class="bx bx-hash"></i>
                Trip ID: <strong>#<?= isset($trip['id']) ? $trip['id'] : '—'; ?></strong>
              </div>

              <div class="footer-actions">
                <a href="<?= base_url('driver/view/' . (isset($trip['user_id']) ? $trip['user_id'] : '')); ?>"
                   class="btn-back-trips">
                  <i class="bx bx-arrow-back"></i> Back to Trips
                </a>
                <button class="btn-print-trip" onclick="window.print();">
                  <i class="bx bx-printer"></i> Print
                </button>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Intersection Observer for fade-in sections
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, index * 100);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.fade-section').forEach(section => {
    observer.observe(section);
  });
});
</script>