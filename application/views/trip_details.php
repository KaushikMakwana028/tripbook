<style>
  /* ===== Professional Edit Trip Page Styles ===== */
  .edit-trip-wrapper {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 15px;
  }

  /* Page Header */
  .page-header-trip {
    background: linear-gradient(135deg, #6366f1 0%, #4f46e5 50%, #4338ca 100%);
    border-radius: 16px;
    padding: 28px 32px;
    margin-bottom: 28px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(99, 102, 241, 0.3);
  }

  .page-header-trip::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -15%;
    width: 320px;
    height: 320px;
    background: rgba(255, 255, 255, 0.07);
    border-radius: 50%;
  }

  .page-header-trip::after {
    content: '';
    position: absolute;
    bottom: -60%;
    left: -8%;
    width: 220px;
    height: 220px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 50%;
  }

  .page-header-trip .header-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
  }

  .page-header-trip .header-left {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .page-header-trip .header-icon {
    width: 56px;
    height: 56px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.15);
  }

  .page-header-trip h4 {
    color: #fff;
    font-weight: 700;
    font-size: 1.5rem;
    margin: 0;
    letter-spacing: -0.3px;
  }

  .page-header-trip .header-subtitle {
    color: rgba(255, 255, 255, 0.8);
    margin: 4px 0 0;
    font-size: 0.88rem;
  }

  .breadcrumb-modern {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 18px;
    position: relative;
    z-index: 2;
  }

  .breadcrumb-modern a {
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
    font-size: 0.85rem;
    transition: color 0.2s;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .breadcrumb-modern a:hover {
    color: #fff;
  }

  .breadcrumb-modern .separator {
    color: rgba(255, 255, 255, 0.4);
    font-size: 0.75rem;
  }

  .breadcrumb-modern .current {
    color: #fff;
    font-size: 0.85rem;
    font-weight: 600;
  }

  .back-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: rgba(255, 255, 255, 0.85);
    text-decoration: none;
    font-size: 0.85rem;
    font-weight: 500;
    padding: 8px 16px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.15);
    transition: all 0.3s ease;
  }

  .back-link:hover {
    background: rgba(255, 255, 255, 0.25);
    color: #fff;
    transform: translateX(-3px);
  }

  /* Trip ID Badge */
  .trip-id-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: #eef2ff;
    border: 1px solid #c7d2fe;
    border-radius: 22px;
    font-size: 0.82rem;
    font-weight: 600;
    color: #6366f1;
    margin-bottom: 24px;
  }

  .trip-id-badge i {
    font-size: 15px;
  }

  /* Form Card */
  .form-card {
    background: #fff;
    border-radius: 16px;
    border: 1px solid #e8ecf1;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    margin-bottom: 24px;
  }

  .form-card:hover {
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
  }

  .form-card-header {
    padding: 24px 28px;
    border-bottom: 1px solid #f0f2f5;
    display: flex;
    align-items: center;
    gap: 14px;
    background: #fafbfc;
  }

  .form-card-header .icon-box {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    flex-shrink: 0;
  }

  .form-card-header .icon-box.indigo {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
  }

  .form-card-header .header-text h5 {
    margin: 0;
    font-weight: 700;
    font-size: 1.05rem;
    color: #1a1d29;
  }

  .form-card-header .header-text p {
    margin: 2px 0 0;
    font-size: 0.82rem;
    color: #8b95a5;
  }

  .form-card-body {
    padding: 28px;
  }

  /* Section Dividers */
  .section-title {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 22px;
    padding-bottom: 12px;
    border-bottom: 2px solid #f1f5f9;
  }

  .section-title .section-icon {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
  }

  .section-title .section-icon.driver {
    background: #eff6ff;
    color: #3b82f6;
  }

  .section-title .section-icon.vehicle {
    background: #f3e8ff;
    color: #8b5cf6;
  }

  .section-title .section-icon.route {
    background: #ecfdf5;
    color: #10b981;
  }

  .section-title .section-icon.time {
    background: #fef3c7;
    color: #f59e0b;
  }

  .section-title .section-icon.customer {
    background: #fce7f3;
    color: #ec4899;
  }

  .section-title h6 {
    margin: 0;
    font-weight: 700;
    font-size: 0.92rem;
    color: #1e293b;
  }

  .section-title span {
    font-size: 0.78rem;
    color: #94a3b8;
    font-weight: 400;
  }

  .section-spacer {
    margin-top: 32px;
  }

  /* Form Groups */
  .form-group-modern {
    margin-bottom: 20px;
    position: relative;
  }

  .form-group-modern .form-label-modern {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    font-size: 0.85rem;
    color: #344054;
    margin-bottom: 8px;
    letter-spacing: 0.2px;
  }

  .form-group-modern .form-label-modern .label-icon {
    width: 26px;
    height: 26px;
    border-radius: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
  }

  .form-group-modern .form-label-modern .label-icon.blue {
    background: #eff6ff;
    color: #3b82f6;
  }

  .form-group-modern .form-label-modern .label-icon.purple {
    background: #f3e8ff;
    color: #8b5cf6;
  }

  .form-group-modern .form-label-modern .label-icon.green {
    background: #ecfdf5;
    color: #10b981;
  }

  .form-group-modern .form-label-modern .label-icon.amber {
    background: #fef3c7;
    color: #f59e0b;
  }

  .form-group-modern .form-label-modern .label-icon.pink {
    background: #fce7f3;
    color: #ec4899;
  }

  .form-group-modern .form-label-modern .label-icon.slate {
    background: #f1f5f9;
    color: #64748b;
  }

  .form-group-modern .form-label-modern .required-dot {
    width: 6px;
    height: 6px;
    background: #ef4444;
    border-radius: 50%;
    margin-left: 2px;
  }

  .form-group-modern .form-control-modern {
    width: 100%;
    padding: 12px 16px;
    font-size: 0.92rem;
    color: #1a1d29;
    background: #f9fafb;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    outline: none;
  }

  .form-group-modern .form-control-modern::placeholder {
    color: #9ca3af;
    font-weight: 400;
  }

  .form-group-modern .form-control-modern:hover {
    border-color: #c7ccd4;
    background: #fff;
  }

  .form-group-modern .form-control-modern:focus {
    border-color: #6366f1;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
  }

  .form-group-modern .error-message {
    display: none;
    align-items: center;
    gap: 6px;
    margin-top: 6px;
    font-size: 0.78rem;
    color: #ef4444;
    font-weight: 500;
  }

  .form-group-modern .error-message i {
    font-size: 13px;
  }

  .form-group-modern.has-error .error-message {
    display: flex;
  }

  .form-group-modern.has-error .form-control-modern {
    border-color: #ef4444;
  }

  .form-group-modern.has-error .form-control-modern:focus {
    box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
  }

  .form-group-modern.is-valid .form-control-modern {
    border-color: #10b981;
  }

  /* Info Banner */
  .info-banner {
    background: linear-gradient(135deg, #eef2ff, #e0e7ff);
    border: 1px solid #c7d2fe;
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 28px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .info-banner .info-icon {
    width: 36px;
    height: 36px;
    background: #6366f1;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
    flex-shrink: 0;
  }

  .info-banner .info-text {
    font-size: 0.84rem;
    color: #4b5563;
    line-height: 1.5;
  }

  .info-banner .info-text strong {
    color: #1e293b;
  }

  /* Route Visual */
  .route-visual {
    display: flex;
    align-items: center;
    gap: 0;
    padding: 16px 0;
    margin-bottom: 8px;
  }

  .route-point {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    flex: 1;
  }

  .route-point .point-dot {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 3px solid;
    position: relative;
  }

  .route-point .point-dot.start {
    border-color: #10b981;
    background: #ecfdf5;
  }

  .route-point .point-dot.end {
    border-color: #ef4444;
    background: #fef2f2;
  }

  .route-point .point-label {
    font-size: 0.75rem;
    color: #94a3b8;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .route-line {
    flex: 2;
    height: 3px;
    background: linear-gradient(90deg, #10b981, #6366f1, #ef4444);
    border-radius: 3px;
    position: relative;
    margin: 0 -8px;
    margin-bottom: 20px;
  }

  .route-line .route-car {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30px;
    height: 30px;
    background: #6366f1;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
  }

  /* KM/Time Grid */
  .metrics-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 16px;
  }

  /* Form Divider */
  .form-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 36px 0 28px;
    color: #c7ccd4;
    font-size: 0.78rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1.2px;
  }

  .form-divider::before,
  .form-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #e5e7eb;
  }

  /* Action Buttons */
  .form-actions {
    display: flex;
    gap: 12px;
    padding-top: 8px;
  }

  .btn-update-trip {
    flex: 1;
    padding: 14px 28px;
    font-size: 0.95rem;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    letter-spacing: 0.3px;
    position: relative;
    overflow: hidden;
  }

  .btn-update-trip::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
    transition: left 0.5s ease;
  }

  .btn-update-trip:hover::before {
    left: 100%;
  }

  .btn-update-trip:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(99, 102, 241, 0.4);
  }

  .btn-update-trip:active {
    transform: translateY(0);
  }

  .btn-update-trip:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none !important;
    box-shadow: none !important;
  }

  .btn-cancel-trip {
    padding: 14px 28px;
    font-size: 0.95rem;
    font-weight: 600;
    color: #667085;
    background: #fff;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-decoration: none;
  }

  .btn-cancel-trip:hover {
    background: #f9fafb;
    border-color: #d1d5db;
    color: #374151;
  }

  /* Field Row Grid */
  .fields-row {
    display: grid;
    gap: 16px;
  }

  .fields-row.cols-3 {
    grid-template-columns: repeat(3, 1fr);
  }

  .fields-row.cols-2 {
    grid-template-columns: repeat(2, 1fr);
  }

  .fields-row.cols-4 {
    grid-template-columns: repeat(4, 1fr);
  }

  /* Animations */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-in {
    animation: fadeInUp 0.5s ease forwards;
  }

  .animate-in:nth-child(1) {
    animation-delay: 0s;
  }

  .animate-in:nth-child(2) {
    animation-delay: 0.08s;
  }

  .animate-in:nth-child(3) {
    animation-delay: 0.14s;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .page-header-trip {
      padding: 22px 20px;
      border-radius: 12px;
    }

    .page-header-trip h4 {
      font-size: 1.2rem;
    }

    .form-card-body {
      padding: 22px 18px;
    }

    .form-card-header {
      padding: 20px 18px;
    }

    .fields-row.cols-3,
    .fields-row.cols-4 {
      grid-template-columns: 1fr;
    }

    .fields-row.cols-2 {
      grid-template-columns: 1fr;
    }

    .form-actions {
      flex-direction: column-reverse;
    }

    .btn-cancel-trip {
      width: 100%;
      justify-content: center;
    }

    .header-content {
      flex-direction: column;
      align-items: flex-start !important;
    }

    .route-visual {
      flex-direction: column;
      gap: 0;
    }

    .route-line {
      width: 3px;
      height: 40px;
      margin: 0;
    }

    .metrics-grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 576px) {
    .metrics-grid {
      grid-template-columns: 1fr;
    }

    .edit-trip-wrapper {
      padding: 0 8px;
    }
  }
</style>

<div class="page-wrapper">
  <div class="page-content">
    <div class="edit-trip-wrapper">

      <!-- Page Header -->
      <div class="page-header-trip animate-in">
        <div class="header-content">
          <div class="header-left">
            <div class="header-icon">
              <i class="bx bxs-edit-location"></i>
            </div>
            <div>
              <h4>Edit Trip</h4>
              <p class="header-subtitle">Update trip details and information</p>
            </div>
          </div>
          <a href="<?= base_url('booking'); ?>" class="back-link">
            <i class="bx bx-arrow-back"></i>
            Back to Trips
          </a>
        </div>
        <div class="breadcrumb-modern">
          <a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i> Dashboard</a>
          <span class="separator"><i class="bx bx-chevron-right"></i></span>
          <a href="<?= base_url('booking'); ?>">Trips</a>
          <span class="separator"><i class="bx bx-chevron-right"></i></span>
          <span class="current">Edit Trip</span>
        </div>
      </div>

      <!-- Form -->
      <form id="tripEditForm" method="post" novalidate>
        <input type="hidden" name="id" value="<?= isset($trip['id']) ? $trip['id'] : ''; ?>">

        <!-- Trip ID Badge -->
        <div class="trip-id-badge animate-in">
          <i class="bx bx-hash"></i>
          Trip ID: #<?= isset($trip['id']) ? $trip['id'] : 'N/A'; ?>
        </div>

        <!-- === Section 1: Driver & Vehicle Info === -->
        <div class="form-card animate-in">
          <div class="form-card-header">
            <div class="icon-box indigo"><i class="bx bx-user-circle"></i></div>
            <div class="header-text">
              <h5>Driver & Vehicle Information</h5>
              <p>Update driver and vehicle details for this trip</p>
            </div>
          </div>
          <div class="form-card-body">

            <!-- Driver Section -->
            <div class="section-title">
              <div class="section-icon driver"><i class="bx bx-user"></i></div>
              <div>
                <h6>Driver Details</h6>
                <span>Driver identification info</span>
              </div>
            </div>

            <div class="fields-row cols-3">
              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon blue"><i class="bx bx-user"></i></span>
                  Driver Name <span class="required-dot"></span>
                </label>
                <input type="text" name="driver_name" class="form-control-modern" id="driver_name"
                  placeholder="e.g. John Smith" value="<?= isset($trip['driver_name']) ? $trip['driver_name'] : ''; ?>"
                  required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter driver name</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon blue"><i class="bx bx-phone"></i></span>
                  Driver Mobile <span class="required-dot"></span>
                </label>
                <input type="text" name="driver_mobile" class="form-control-modern" id="driver_mobile"
                  placeholder="e.g. 9876543210" maxlength="10"
                  value="<?= isset($trip['driver_mobile']) ? $trip['driver_mobile'] : ''; ?>" required
                  pattern="[0-9]{10}">
                <div class="error-message"><i class="bx bx-error-circle"></i> Enter valid 10-digit number</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon blue"><i class="bx bx-id-card"></i></span>
                  Licence Number <span class="required-dot"></span>
                </label>
                <input type="text" name="licence_number" class="form-control-modern" id="licence_number"
                  placeholder="e.g. MH01-2024-001234"
                  value="<?= isset($trip['licence_number']) ? $trip['licence_number'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter licence number</div>
              </div>
            </div>

            <!-- Vehicle Section -->
            <div class="section-spacer"></div>
            <div class="section-title">
              <div class="section-icon vehicle"><i class="bx bx-car"></i></div>
              <div>
                <h6>Vehicle Details</h6>
                <span>Vehicle identification info</span>
              </div>
            </div>

            <div class="fields-row cols-2">
              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon purple"><i class="bx bx-car"></i></span>
                  Vehicle Name <span class="required-dot"></span>
                </label>
                <input type="text" name="vehicle_name" class="form-control-modern" id="vehicle_name"
                  placeholder="e.g. Toyota Innova"
                  value="<?= isset($trip['vehicle_name']) ? $trip['vehicle_name'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter vehicle name</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon purple"><i class="bx bx-hash"></i></span>
                  Vehicle Number <span class="required-dot"></span>
                </label>
                <input type="text" name="vehicle_number" class="form-control-modern" id="vehicle_number"
                  placeholder="e.g. MH12AB1234"
                  value="<?= isset($trip['vehicle_number']) ? $trip['vehicle_number'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter vehicle number</div>
              </div>
            </div>

          </div>
        </div>

        <!-- === Section 2: Route & Schedule === -->
        <div class="form-card animate-in">
          <div class="form-card-header">
            <div class="icon-box indigo"><i class="bx bx-map-alt"></i></div>
            <div class="header-text">
              <h5>Route & Schedule</h5>
              <p>Update route, timing, and kilometer details</p>
            </div>
          </div>
          <div class="form-card-body">

            <!-- Route Visual -->
            <div class="route-visual">
              <div class="route-point">
                <div class="point-dot start"></div>
                <span class="point-label">Start</span>
              </div>
              <div class="route-line">
                <div class="route-car"><i class="bx bxs-car"></i></div>
              </div>
              <div class="route-point">
                <div class="point-dot end"></div>
                <span class="point-label">End</span>
              </div>
            </div>

            <!-- Route Section -->
            <div class="section-title">
              <div class="section-icon route"><i class="bx bx-map-pin"></i></div>
              <div>
                <h6>Route Details</h6>
                <span>Start and end locations</span>
              </div>
            </div>

            <div class="fields-row cols-3">
              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon green"><i class="bx bx-calendar"></i></span>
                  Trip Date <span class="required-dot"></span>
                </label>
                <input type="date" name="trip_date" class="form-control-modern" id="trip_date"
                  value="<?= isset($trip['trip_date']) ? $trip['trip_date'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please select trip date</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon green"><i class="bx bx-radio-circle-marked"></i></span>
                  From Location <span class="required-dot"></span>
                </label>
                <input type="text" name="from_location" class="form-control-modern" id="from_location"
                  placeholder="e.g. Mumbai" value="<?= isset($trip['from_location']) ? $trip['from_location'] : ''; ?>"
                  required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter from location</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon green"><i class="bx bx-map"></i></span>
                  To Location <span class="required-dot"></span>
                </label>
                <input type="text" name="to_location" class="form-control-modern" id="to_location"
                  placeholder="e.g. Pune" value="<?= isset($trip['to_location']) ? $trip['to_location'] : ''; ?>"
                  required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter to location</div>
              </div>
            </div>

            <!-- KM & Time Section -->
            <div class="section-spacer"></div>
            <div class="section-title">
              <div class="section-icon time"><i class="bx bx-tachometer"></i></div>
              <div>
                <h6>Kilometer & Time</h6>
                <span>Trip distance and timing</span>
              </div>
            </div>

            <div class="metrics-grid">
              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon amber"><i class="bx bx-play-circle"></i></span>
                  Start KM <span class="required-dot"></span>
                </label>
                <input type="number" step="0.01" name="start_km" class="form-control-modern" id="start_km"
                  placeholder="0.00" value="<?= isset($trip['start_km']) ? $trip['start_km'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Required</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon amber"><i class="bx bx-stop-circle"></i></span>
                  End KM
                </label>
                <input type="number" step="0.01" name="end_km" class="form-control-modern" id="end_km"
                  placeholder="0.00" value="<?= isset($trip['end_km']) ? $trip['end_km'] : ''; ?>">
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon amber"><i class="bx bx-time"></i></span>
                  Start Time <span class="required-dot"></span>
                </label>
                <input type="time" name="start_time" class="form-control-modern" id="start_time"
                  value="<?= isset($trip['start_time']) ? $trip['start_time'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Required</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon amber"><i class="bx bx-time-five"></i></span>
                  End Time
                </label>
                <input type="time" name="end_time" class="form-control-modern" id="end_time"
                  value="<?= isset($trip['end_time']) ? $trip['end_time'] : ''; ?>">
              </div>
            </div>

          </div>
        </div>

        <!-- === Section 3: Customer Info === -->
        <div class="form-card animate-in">
          <div class="form-card-header">
            <div class="icon-box indigo"><i class="bx bx-group"></i></div>
            <div class="header-text">
              <h5>Customer Information</h5>
              <p>Update passenger/customer details</p>
            </div>
          </div>
          <div class="form-card-body">

            <div class="section-title">
              <div class="section-icon customer"><i class="bx bx-user-check"></i></div>
              <div>
                <h6>Customer Details</h6>
                <span>Passenger contact information</span>
              </div>
            </div>

            <div class="fields-row cols-2">
              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon pink"><i class="bx bx-user"></i></span>
                  Customer Name <span class="required-dot"></span>
                </label>
                <input type="text" name="customer_name" class="form-control-modern" id="customer_name"
                  placeholder="e.g. Jane Doe"
                  value="<?= isset($trip['customer_name']) ? $trip['customer_name'] : ''; ?>" required>
                <div class="error-message"><i class="bx bx-error-circle"></i> Please enter customer name</div>
              </div>

              <div class="form-group-modern">
                <label class="form-label-modern">
                  <span class="label-icon pink"><i class="bx bx-phone"></i></span>
                  Customer Mobile <span class="required-dot"></span>
                </label>
                <input type="text" name="customer_mobile" class="form-control-modern" id="customer_mobile"
                  placeholder="e.g. 9876543210" maxlength="10"
                  value="<?= isset($trip['customer_mobile']) ? $trip['customer_mobile'] : ''; ?>" required
                  pattern="[0-9]{10}">
                <div class="error-message"><i class="bx bx-error-circle"></i> Enter valid 10-digit number</div>
              </div>
            </div>

            <!-- Info Banner -->
            <div class="info-banner" style="margin-top: 12px;">
              <div class="info-icon"><i class="bx bx-info-alt"></i></div>
              <div class="info-text">
                <strong>Review before saving.</strong> All changes will be applied immediately. Ensure all details are
                accurate before updating this trip record.
              </div>
            </div>

          </div>
        </div>

        <!-- === Actions === -->
        <div class="form-card animate-in">
          <div class="form-card-body" style="padding: 24px 28px;">
            <div class="form-actions">
              <a href="<?= base_url('booking'); ?>" class="btn-cancel-trip">
                <i class="bx bx-x"></i>
                Cancel
              </a>
              <button class="btn-update-trip" id="update_trip" type="submit">
                <i class="bx bx-save"></i>
                Update Trip
              </button>
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>

<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script>
  $(document).ready(function () {

    // Live validation clearing
    $('.form-control-modern').on('input change', function () {
      const group = $(this).closest('.form-group-modern');
      group.removeClass('has-error');

      if ($.trim($(this).val()).length > 0) {
        group.addClass('is-valid');
      } else {
        group.removeClass('is-valid');
      }
    });

    // Only allow digits for phone fields
    $('#driver_mobile, #customer_mobile').on('input', function () {
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });

    // Form submission
    $('#tripEditForm').on('submit', function (e) {
      e.preventDefault();
      let valid = true;
      const form = this;

      // Validate required fields
      $(form).find('.form-control-modern[required]').each(function () {
        const group = $(this).closest('.form-group-modern');
        const val = $.trim($(this).val());

        if (val === '') {
          group.addClass('has-error').removeClass('is-valid');
          valid = false;
        }
      });

      // Validate phone patterns
      const driverMob = $('#driver_mobile').val();
      const custMob = $('#customer_mobile').val();

      if (driverMob && !/^[0-9]{10}$/.test(driverMob)) {
        $('#driver_mobile').closest('.form-group-modern').addClass('has-error').removeClass('is-valid');
        valid = false;
      }

      if (custMob && !/^[0-9]{10}$/.test(custMob)) {
        $('#customer_mobile').closest('.form-group-modern').addClass('has-error').removeClass('is-valid');
        valid = false;
      }

      if (!valid) {
        // Scroll to first error
        const firstError = $('.form-group-modern.has-error').first();
        if (firstError.length) {
          $('html, body').animate({
            scrollTop: firstError.offset().top - 100
          }, 400);
          firstError.find('.form-control-modern').focus();
        }
        return false;
      }

      $.ajax({
        url: "<?= base_url('driver/update_trip') ?>",
        type: "POST",
        data: $(form).serialize(),
        dataType: "json",
        beforeSend: function () {
          $('#update_trip').prop('disabled', true).html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Updating...'
          );
        },
        success: function (response) {
          $('#update_trip').prop('disabled', false).html(
            '<i class="bx bx-save"></i> Update Trip'
          );

          if (response.status) {
            Swal.fire({
              icon: 'success',
              title: 'Trip Updated!',
              text: response.message,
              timer: 2000,
              showConfirmButton: false,
              customClass: { popup: 'rounded-4' }
            }).then(() => {
              window.location.href = "<?= base_url('booking') ?>";
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Update Failed',
              text: response.message,
              confirmButtonColor: '#6366f1',
              customClass: { popup: 'rounded-4' }
            });
          }
        },
        error: function () {
          $('#update_trip').prop('disabled', false).html(
            '<i class="bx bx-save"></i> Update Trip'
          );
          Swal.fire({
            icon: 'error',
            title: 'Server Error',
            text: 'Something went wrong. Please try again.',
            confirmButtonColor: '#6366f1',
            customClass: { popup: 'rounded-4' }
          });
        }
      });
    });

    // Set initial valid states for pre-filled fields
    $('.form-control-modern').each(function () {
      if ($.trim($(this).val()).length > 0) {
        $(this).closest('.form-group-modern').addClass('is-valid');
      }
    });
  });
</script>