<style>
  /* ===== Enhanced Add Driver Page Styles ===== */

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

  /* Main Card */
  .driver-add-card {
    background: #ffffff;
    border: none;
    border-radius: 22px;
    box-shadow: 0 10px 45px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    animation: fadeInUp 0.5s ease;
    transition: box-shadow 0.3s;
  }

  .driver-add-card:hover {
    box-shadow: 0 18px 55px rgba(0, 0, 0, 0.12);
  }

  /* Card Header */
  .card-header-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 30px 35px;
    position: relative;
    overflow: hidden;
  }

  .card-header-gradient::before {
    content: '';
    position: absolute;
    top: -55%;
    right: -18%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.07);
    border-radius: 50%;
  }

  .card-header-gradient::after {
    content: '';
    position: absolute;
    bottom: -65%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 50%;
  }

  .card-header-gradient .header-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .header-icon-box {
    width: 58px;
    height: 58px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #fff;
    backdrop-filter: blur(10px);
  }

  .header-text h5 {
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    margin: 0;
  }

  .header-text p {
    color: rgba(255, 255, 255, 0.78);
    font-size: 13px;
    margin: 4px 0 0;
    display: flex;
    align-items: center;
    gap: 5px;
  }

  /* Progress Steps */
  .form-progress {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    padding: 22px 35px;
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    border-bottom: 1px solid #edf2f7;
  }

  .progress-step {
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
  }

  .progress-step .step-circle {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 700;
    border: 2px solid #d2d6dc;
    background: #fff;
    color: #a0aec0;
    transition: all 0.4s ease;
    position: relative;
    z-index: 2;
  }

  .progress-step.active .step-circle {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-color: transparent;
    color: #fff;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
  }

  .progress-step.completed .step-circle {
    background: #48bb78;
    border-color: transparent;
    color: #fff;
    box-shadow: 0 4px 12px rgba(72, 187, 120, 0.3);
  }

  .progress-step .step-label {
    font-size: 12px;
    font-weight: 600;
    color: #a0aec0;
    transition: color 0.3s;
  }

  .progress-step.active .step-label {
    color: #667eea;
  }

  .progress-step.completed .step-label {
    color: #48bb78;
  }

  .progress-connector {
    width: 60px;
    height: 2px;
    background: #e2e8f0;
    margin: 0 8px;
    position: relative;
    top: -1px;
    border-radius: 2px;
    overflow: hidden;
  }

  .progress-connector .connector-fill {
    width: 0;
    height: 100%;
    background: linear-gradient(90deg, #48bb78, #667eea);
    border-radius: 2px;
    transition: width 0.5s ease;
  }

  .progress-connector.filled .connector-fill {
    width: 100%;
  }

  /* Card Body */
  .card-body-form {
    padding: 35px;
  }

  /* Section Dividers */
  .form-section {
    margin-bottom: 32px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
  }

  .form-section.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .section-title {
    font-size: 15px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 2px solid #f0f2ff;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .section-title .title-icon {
    width: 32px;
    height: 32px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 15px;
  }

  .section-title .title-icon.personal { background: linear-gradient(135deg, #667eea, #764ba2); }
  .section-title .title-icon.vehicle { background: linear-gradient(135deg, #f093fb, #f5576c); }
  .section-title .title-icon.photo { background: linear-gradient(135deg, #4facfe, #00f2fe); }
  .section-title .title-icon.security { background: linear-gradient(135deg, #43e97b, #38f9d7); }

  .section-title .badge-required {
    font-size: 10px;
    font-weight: 700;
    color: #e53e3e;
    background: #fff5f5;
    border: 1px solid #fed7d7;
    border-radius: 6px;
    padding: 2px 8px;
    margin-left: auto;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Form Grid */
  .form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .form-grid.single {
    grid-template-columns: 1fr;
  }

  /* Enhanced Form Controls */
  .form-field {
    position: relative;
    margin-bottom: 0;
  }

  .form-field .form-label {
    font-size: 13px;
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: color 0.3s;
  }

  .form-field .form-label i {
    font-size: 16px;
    color: #667eea;
  }

  .form-field .form-label .required-star {
    color: #e53e3e;
    font-weight: 700;
  }

  .form-field .form-control,
  .form-field .form-select {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 12px 16px;
    font-size: 14px;
    color: #2d3748;
    background: #fafbff;
    transition: all 0.3s ease;
    height: auto;
  }

  .form-field .form-control:focus,
  .form-field .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.12);
    background: #fff;
  }

  .form-field .form-control:hover,
  .form-field .form-select:hover {
    border-color: #b8c4ff;
  }

  .form-field .form-control::placeholder {
    color: #b0b8c4;
    font-weight: 400;
  }

  .form-field .form-control.is-valid {
    border-color: #48bb78;
    box-shadow: 0 0 0 4px rgba(72, 187, 120, 0.1);
  }

  .form-field .form-control.is-invalid,
  .form-field .form-select.is-invalid {
    border-color: #fc8181;
    box-shadow: 0 0 0 4px rgba(252, 129, 129, 0.1);
  }

  .form-field .invalid-feedback {
    font-size: 12px;
    margin-top: 6px;
    color: #e53e3e;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .form-field .field-hint {
    font-size: 11px;
    color: #a0aec0;
    margin-top: 5px;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .form-field .field-hint i { font-size: 13px; }

  .form-field .char-counter {
    position: absolute;
    right: 14px;
    bottom: 14px;
    font-size: 11px;
    color: #a0aec0;
    font-weight: 600;
    pointer-events: none;
  }

  /* Profile Image Upload */
  .profile-upload-zone {
    border: 2px dashed #d2d6dc;
    border-radius: 18px;
    padding: 35px;
    text-align: center;
    background: linear-gradient(135deg, #fafbff 0%, #f5f7ff 100%);
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
  }

  .profile-upload-zone:hover {
    border-color: #667eea;
    background: linear-gradient(135deg, #f0f2ff 0%, #e8ebff 100%);
    transform: translateY(-2px);
  }

  .profile-upload-zone.drag-over {
    border-color: #667eea;
    background: rgba(102, 126, 234, 0.06);
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
  }

  .profile-upload-zone.has-file {
    border-style: solid;
    border-color: #48bb78;
    background: linear-gradient(135deg, #f0fff4 0%, #e6ffed 100%);
  }

  .upload-placeholder {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .upload-icon-circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    color: #667eea;
    margin-bottom: 5px;
    transition: all 0.3s;
  }

  .profile-upload-zone:hover .upload-icon-circle {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    transform: scale(1.05);
  }

  .upload-text {
    color: #718096;
    font-size: 14px;
  }

  .upload-text strong {
    color: #667eea;
    cursor: pointer;
  }

  .upload-text small {
    display: block;
    margin-top: 4px;
    color: #a0aec0;
    font-size: 12px;
  }

  /* Preview Container */
  .preview-container {
    display: none;
    flex-direction: column;
    align-items: center;
    gap: 12px;
  }

  .preview-container.show {
    display: flex;
  }

  .preview-image-wrapper {
    position: relative;
    display: inline-block;
  }

  .preview-image-wrapper img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    transition: transform 0.3s;
  }

  .preview-image-wrapper:hover img {
    transform: scale(1.05);
  }

  .preview-badge {
    position: absolute;
    bottom: 4px;
    right: 4px;
    width: 32px;
    height: 32px;
    background: #48bb78;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    border: 3px solid #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
  }

  .preview-file-info {
    font-size: 12px;
    color: #4a5568;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .preview-file-info .file-size {
    background: #edf2f7;
    padding: 2px 8px;
    border-radius: 6px;
    font-size: 11px;
    color: #718096;
  }

  .btn-remove-image {
    background: none;
    border: 1px solid #e53e3e;
    color: #e53e3e;
    border-radius: 8px;
    padding: 5px 14px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .btn-remove-image:hover {
    background: #e53e3e;
    color: #fff;
  }

  /* Password Field */
  .password-wrapper .input-group {
    border-radius: 12px;
    overflow: hidden;
  }

  .password-wrapper .form-control {
    border-right: none;
    border-radius: 12px 0 0 12px !important;
  }

  .password-wrapper .btn-toggle-pw {
    border: 2px solid #e2e8f0;
    border-left: none;
    background: #fafbff;
    color: #667eea;
    padding: 12px 16px;
    border-radius: 0 12px 12px 0 !important;
    transition: all 0.3s;
    cursor: pointer;
  }

  .password-wrapper .btn-toggle-pw:hover {
    background: #f0f2ff;
    color: #764ba2;
  }

  .password-wrapper .form-control:focus + .btn-toggle-pw {
    border-color: #667eea;
  }

  /* Password Strength */
  .password-strength {
    margin-top: 10px;
  }

  .strength-bar-wrapper {
    display: flex;
    gap: 4px;
    margin-bottom: 6px;
  }

  .strength-bar {
    flex: 1;
    height: 4px;
    border-radius: 4px;
    background: #e2e8f0;
    transition: all 0.3s;
  }

  .strength-bar.weak { background: #e53e3e; }
  .strength-bar.medium { background: #f59e0b; }
  .strength-bar.strong { background: #48bb78; }

  .strength-label {
    font-size: 11px;
    font-weight: 600;
    transition: color 0.3s;
  }

  .strength-label.weak { color: #e53e3e; }
  .strength-label.medium { color: #f59e0b; }
  .strength-label.strong { color: #48bb78; }

  /* Form Footer */
  .form-footer {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    margin: 0 -35px -35px;
    padding: 25px 35px;
    border-top: 1px solid #edf2f7;
    border-radius: 0 0 22px 22px;
  }

  .footer-actions {
    display: flex;
    gap: 15px;
  }

  .btn-submit-driver {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 14px;
    padding: 15px 30px;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    letter-spacing: 0.5px;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.35);
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
  }

  .btn-submit-driver::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
  }

  .btn-submit-driver:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(102, 126, 234, 0.5);
  }

  .btn-submit-driver:hover::before {
    left: 100%;
  }

  .btn-submit-driver:active {
    transform: translateY(-1px);
  }

  .btn-submit-driver:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
  }

  .btn-reset-form {
    background: #fff;
    border: 2px solid #e2e8f0;
    border-radius: 14px;
    padding: 15px 28px;
    font-size: 15px;
    font-weight: 600;
    color: #4a5568;
    transition: all 0.3s ease;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .btn-reset-form:hover {
    border-color: #fc8181;
    color: #e53e3e;
    background: #fff5f5;
    transform: translateY(-2px);
  }

  .btn-cancel-form {
    background: #fff;
    border: 2px solid #e2e8f0;
    border-radius: 14px;
    padding: 15px 28px;
    font-size: 15px;
    font-weight: 600;
    color: #4a5568;
    transition: all 0.3s ease;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .btn-cancel-form:hover {
    border-color: #a0aec0;
    color: #2d3748;
    background: #f7fafc;
    transform: translateY(-2px);
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

  @keyframes shake {
    0%, 100% { transform: translateX(0); }
    20%, 60% { transform: translateX(-6px); }
    40%, 80% { transform: translateX(6px); }
  }

  .shake {
    animation: shake 0.4s ease;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .form-grid {
      grid-template-columns: 1fr;
    }

    .card-body-form {
      padding: 24px 20px;
    }

    .card-header-gradient {
      padding: 24px 20px;
    }

    .form-progress {
      padding: 16px 15px;
      gap: 0;
      overflow-x: auto;
    }

    .progress-connector {
      width: 30px;
    }

    .progress-step .step-label {
      display: none;
    }

    .form-footer {
      margin: 0 -20px -24px;
      padding: 20px;
    }

    .footer-actions {
      flex-direction: column;
    }
  }
</style>

<div class="page-wrapper">
  <div class="page-content">

    <!-- Enhanced Breadcrumb -->
    <div class="breadcrumb-enhanced">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div class="d-flex align-items-center gap-3">
          <div class="breadcrumb-title">Drivers</div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item">
                <a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i> Dashboard</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?= base_url('driver'); ?>">Drivers</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Add New Driver</li>
            </ol>
          </nav>
        </div>
        <a href="<?= base_url('driver'); ?>" class="btn-back-breadcrumb">
          <i class="bx bx-arrow-back"></i> Back to List
        </a>
      </div>
    </div>

    <!-- Enhanced Card -->
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="driver-add-card card">

          <!-- Card Header -->
          <div class="card-header-gradient">
            <div class="header-content">
              <div class="header-icon-box">
                <i class="bx bx-user-plus"></i>
              </div>
              <div class="header-text">
                <h5>Add New Driver</h5>
                <p><i class="bx bx-info-circle"></i> Fill in the details below to register a new driver</p>
              </div>
            </div>
          </div>

          <!-- Progress Steps -->
          <div class="form-progress">
            <div class="progress-step active" data-step="1">
              <div class="step-circle">1</div>
              <span class="step-label">Personal Info</span>
            </div>
            <div class="progress-connector" id="conn1">
              <div class="connector-fill"></div>
            </div>
            <div class="progress-step" data-step="2">
              <div class="step-circle">2</div>
              <span class="step-label">Vehicle Details</span>
            </div>
            <div class="progress-connector" id="conn2">
              <div class="connector-fill"></div>
            </div>
            <div class="progress-step" data-step="3">
              <div class="step-circle">3</div>
              <span class="step-label">Photo</span>
            </div>
            <div class="progress-connector" id="conn3">
              <div class="connector-fill"></div>
            </div>
            <div class="progress-step" data-step="4">
              <div class="step-circle">4</div>
              <span class="step-label">Security</span>
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body-form">
            <form id="driverForm" method="post" enctype="multipart/form-data" novalidate>

              <!-- Section 1: Personal Information -->
              <div class="form-section" data-section="1">
                <div class="section-title">
                  <span class="title-icon personal"><i class="bx bx-user"></i></span>
                  Personal Information
                  <span class="badge-required">Required</span>
                </div>

                <div class="form-grid">
                  <!-- Driver Name -->
                  <div class="form-field">
                    <label for="driver_name" class="form-label">
                      <i class="bx bx-user-circle"></i> Driver Name
                      <span class="required-star">*</span>
                    </label>
                    <input type="text" name="driver_name" class="form-control" id="driver_name"
                           placeholder="Enter full name" required>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter driver name.</div>
                  </div>

                  <!-- Email -->
                  <div class="form-field">
                    <label for="email" class="form-label">
                      <i class="bx bx-envelope"></i> Email Address
                      <span class="required-star">*</span>
                    </label>
                    <input type="email" name="email" class="form-control" id="email"
                           placeholder="example@email.com" required>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter a valid email.</div>
                  </div>

                  <!-- Mobile -->
                  <div class="form-field">
                    <label for="mobile" class="form-label">
                      <i class="bx bx-phone"></i> Mobile Number
                      <span class="required-star">*</span>
                    </label>
                    <input type="text" name="mobile" class="form-control" id="mobile"
                           placeholder="Enter 10-digit number" maxlength="10" required pattern="[0-9]{10}">
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter a valid 10-digit mobile number.</div>
                    <span class="char-counter" id="mobileCounter">0/10</span>
                  </div>

                  <!-- Location -->
                  <div class="form-field">
                    <label for="location" class="form-label">
                      <i class="bx bx-map"></i> Location
                    </label>
                    <input type="text" name="location" class="form-control" id="location"
                           placeholder="City, State">
                    <div class="field-hint"><i class="bx bx-info-circle"></i> Optional — Driver's base location</div>
                  </div>

                  <!-- Company -->
                  <div class="form-field" style="grid-column: 1 / -1;">
                    <label for="company_id" class="form-label">
                      <i class="bx bx-buildings"></i> Company
                      <span class="required-star">*</span>
                    </label>
                    <select name="company_id" id="company_id" class="form-select" required>
                      <option value="">-- Select Company --</option>
                      <?php if (!empty($companies)): ?>
                        <?php foreach ($companies as $company): ?>
                          <option value="<?= $company->id; ?>">
                            <?= ucfirst($company->company_name); ?>
                          </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </select>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please select a company.</div>
                  </div>
                </div>
              </div>

              <!-- Section 2: Vehicle Details -->
              <div class="form-section" data-section="2">
                <div class="section-title">
                  <span class="title-icon vehicle"><i class="bx bx-car"></i></span>
                  Vehicle & Licence Details
                  <span class="badge-required">Required</span>
                </div>

                <div class="form-grid">
                  <!-- Vehicle Name -->
                  <div class="form-field">
                    <label for="vehicle_name" class="form-label">
                      <i class="bx bx-car"></i> Vehicle Name
                      <span class="required-star">*</span>
                    </label>
                    <input type="text" name="vehicle_name" class="form-control" id="vehicle_name"
                           placeholder="e.g., Toyota Innova" required>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter vehicle name.</div>
                  </div>

                  <!-- Vehicle Number -->
                  <div class="form-field">
                    <label for="vehicle_number" class="form-label">
                      <i class="bx bx-hash"></i> Vehicle Number
                      <span class="required-star">*</span>
                    </label>
                    <input type="text" name="vehicle_number" class="form-control" id="vehicle_number"
                           placeholder="e.g., MH 12 AB 1234" required>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter vehicle number.</div>
                  </div>

                  <!-- Licence Number -->
                  <div class="form-field" style="grid-column: 1 / -1;">
                    <label for="licence_number" class="form-label">
                      <i class="bx bx-id-card"></i> Licence Number
                      <span class="required-star">*</span>
                    </label>
                    <input type="text" name="licence_number" class="form-control" id="licence_number"
                           placeholder="e.g., DL-0420110012345" required>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter licence number.</div>
                  </div>
                </div>
              </div>

              <!-- Section 3: Profile Image -->
              <div class="form-section" data-section="3">
                <div class="section-title">
                  <span class="title-icon photo"><i class="bx bx-camera"></i></span>
                  Profile Photo
                  <span class="badge-required">Required</span>
                </div>

                <div class="profile-upload-zone" id="dropZone">
                  <!-- Placeholder -->
                  <div class="upload-placeholder" id="uploadPlaceholder">
                    <div class="upload-icon-circle">
                      <i class="bx bx-cloud-upload"></i>
                    </div>
                    <div class="upload-text">
                      <strong>Click to upload</strong> or drag & drop<br>
                      <small>PNG, JPG, JPEG — Max 2MB</small>
                    </div>
                  </div>

                  <!-- Preview -->
                  <div class="preview-container" id="previewContainer">
                    <div class="preview-image-wrapper">
                      <img id="profilePreview" src="#" alt="Preview">
                      <div class="preview-badge">
                        <i class="bx bx-check"></i>
                      </div>
                    </div>
                    <div class="preview-file-info" id="fileInfo"></div>
                    <button type="button" class="btn-remove-image" id="removeImage">
                      <i class="bx bx-trash"></i> Remove
                    </button>
                  </div>

                  <input type="file" name="profile_image" class="d-none" id="profile_image"
                         accept="image/png, image/jpeg, image/jpg" required>
                </div>
                <div class="invalid-feedback" id="imageError" style="display:none;">
                  <i class="bx bx-error-circle"></i> Please upload a valid profile image (JPG, PNG, JPEG).
                </div>
              </div>

              <!-- Section 4: Password -->
              <div class="form-section" data-section="4">
                <div class="section-title">
                  <span class="title-icon security"><i class="bx bx-lock-alt"></i></span>
                  Security
                  <span class="badge-required">Required</span>
                </div>

                <div class="form-grid single">
                  <div class="form-field">
                    <label for="password" class="form-label">
                      <i class="bx bx-key"></i> Password
                      <span class="required-star">*</span>
                    </label>
                    <div class="password-wrapper">
                      <div class="input-group">
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Create a strong password" minlength="6" required>
                        <button type="button" class="btn-toggle-pw" id="togglePassword">
                          <i class="bx bx-hide" id="toggleIcon"></i>
                        </button>
                      </div>
                    </div>

                    <!-- Password Strength Meter -->
                    <div class="password-strength" id="passwordStrength" style="display: none;">
                      <div class="strength-bar-wrapper">
                        <div class="strength-bar" id="bar1"></div>
                        <div class="strength-bar" id="bar2"></div>
                        <div class="strength-bar" id="bar3"></div>
                        <div class="strength-bar" id="bar4"></div>
                      </div>
                      <span class="strength-label" id="strengthLabel"></span>
                    </div>

                    <div class="field-hint">
                      <i class="bx bx-info-circle"></i> Minimum 6 characters with letters and numbers recommended
                    </div>
                    <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Password must be at least 6 characters.</div>
                  </div>
                </div>
              </div>

              <!-- Footer -->
              <div class="form-footer">
                <div class="footer-actions">
                  <button class="btn-submit-driver" id="submit_driver" type="submit">
                    <i class="bx bx-check-circle"></i> Save Driver
                  </button>
                  <button type="button" class="btn-reset-form" id="resetForm">
                    <i class="bx bx-reset"></i> Reset
                  </button>
                  <a href="<?= base_url('driver'); ?>" class="btn-cancel-form">
                    <i class="bx bx-x"></i> Cancel
                  </a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

<script>
$(document).ready(function () {

  // ===== Animate Sections on Load =====
  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, i * 120);
        sectionObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.form-section').forEach(s => sectionObserver.observe(s));

  // ===== Progress Steps Tracking =====
  function updateProgress() {
    const sections = [
      { fields: ['#driver_name', '#email', '#mobile', '#company_id'], step: 1 },
      { fields: ['#vehicle_name', '#vehicle_number', '#licence_number'], step: 2 },
      { fields: ['#profile_image'], step: 3, isFile: true },
      { fields: ['#password'], step: 4 }
    ];

    sections.forEach((section, idx) => {
      let filled = true;
      section.fields.forEach(sel => {
        const el = $(sel);
        if (section.isFile) {
          if (!el[0].files || !el[0].files.length) filled = false;
        } else {
          if (!el.val() || !el.val().trim()) filled = false;
        }
      });

      const stepEl = $(`.progress-step[data-step="${section.step}"]`);
      const connEl = $(`#conn${idx}`);

      if (filled) {
        stepEl.addClass('completed').removeClass('active');
        stepEl.find('.step-circle').html('<i class="bx bx-check" style="font-size:16px;"></i>');
        if (connEl.length) connEl.addClass('filled');
      } else {
        stepEl.removeClass('completed');
        stepEl.find('.step-circle').text(section.step);
        if (connEl.length) connEl.removeClass('filled');
      }
    });

    // Set first incomplete step as active
    const allSteps = document.querySelectorAll('.progress-step');
    let activeSet = false;
    allSteps.forEach(step => {
      if (!step.classList.contains('completed') && !activeSet) {
        step.classList.add('active');
        activeSet = true;
      } else if (!step.classList.contains('completed')) {
        step.classList.remove('active');
      }
    });
  }

  // Track all inputs for progress
  $('#driverForm input, #driverForm select').on('input change', function () {
    updateProgress();
  });

  // ===== Mobile Number — Digits Only =====
  $('#mobile').on('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '');
    $('#mobileCounter').text(this.value.length + '/10');
  });

  // ===== Real-time Validation =====
  $('#driverForm .form-control, #driverForm .form-select').on('input change', function () {
    if (this.checkValidity()) {
      $(this).removeClass('is-invalid').addClass('is-valid');
    } else if ($(this).val()) {
      $(this).removeClass('is-valid').addClass('is-invalid');
    } else {
      $(this).removeClass('is-valid is-invalid');
    }
  });

  // ===== Password Toggle =====
  $('#togglePassword').on('click', function () {
    const input = $('#password');
    const icon = $('#toggleIcon');
    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      icon.removeClass('bx-hide').addClass('bx-show');
    } else {
      input.attr('type', 'password');
      icon.removeClass('bx-show').addClass('bx-hide');
    }
  });

  // ===== Password Strength Meter =====
  $('#password').on('input', function () {
    const val = $(this).val();
    const meter = $('#passwordStrength');
    const bars = ['#bar1', '#bar2', '#bar3', '#bar4'];
    const label = $('#strengthLabel');

    if (!val) {
      meter.hide();
      return;
    }
    meter.show();

    let score = 0;
    if (val.length >= 6) score++;
    if (val.length >= 8) score++;
    if (/[A-Z]/.test(val) && /[a-z]/.test(val)) score++;
    if (/[0-9]/.test(val) && /[^A-Za-z0-9]/.test(val)) score++;

    bars.forEach((b, i) => {
      const bar = $(b);
      bar.removeClass('weak medium strong');
      if (i < score) {
        if (score <= 1) bar.addClass('weak');
        else if (score <= 2) bar.addClass('medium');
        else bar.addClass('strong');
      }
    });

    label.removeClass('weak medium strong');
    if (score <= 1) { label.addClass('weak').text('Weak'); }
    else if (score <= 2) { label.addClass('medium').text('Fair'); }
    else if (score === 3) { label.addClass('strong').text('Strong'); }
    else { label.addClass('strong').text('Very Strong'); }
  });

  // ===== Profile Image Upload =====
  const dropZone = document.getElementById('dropZone');
  const fileInput = document.getElementById('profile_image');

  dropZone.addEventListener('click', function (e) {
    if (e.target.closest('#removeImage')) return;
    fileInput.click();
  });

  ['dragenter', 'dragover'].forEach(evt => {
    dropZone.addEventListener(evt, function (e) {
      e.preventDefault();
      this.classList.add('drag-over');
    });
  });

  ['dragleave', 'drop'].forEach(evt => {
    dropZone.addEventListener(evt, function (e) {
      e.preventDefault();
      this.classList.remove('drag-over');
    });
  });

  dropZone.addEventListener('drop', function (e) {
    const files = e.dataTransfer.files;
    if (files.length) {
      fileInput.files = files;
      handleFilePreview(files[0]);
    }
  });

  fileInput.addEventListener('change', function () {
    if (this.files[0]) handleFilePreview(this.files[0]);
  });

  function handleFilePreview(file) {
    const validTypes = ['image/jpeg', 'image/png', 'image/jpg'];
    if (!validTypes.includes(file.type)) {
      Swal.fire({
        icon: 'warning',
        title: 'Invalid File',
        text: 'Please upload JPG, JPEG, or PNG image.',
        confirmButtonColor: '#667eea'
      });
      fileInput.value = '';
      return;
    }

    if (file.size > 2 * 1024 * 1024) {
      Swal.fire({
        icon: 'warning',
        title: 'File Too Large',
        text: 'Please select an image under 2MB.',
        confirmButtonColor: '#667eea'
      });
      fileInput.value = '';
      return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
      $('#profilePreview').attr('src', e.target.result);
      $('#uploadPlaceholder').hide();
      $('#previewContainer').addClass('show');
      dropZone.classList.add('has-file');

      const sizeKB = (file.size / 1024).toFixed(1);
      $('#fileInfo').html(
        `<i class="bx bx-image"></i> ${file.name} <span class="file-size">${sizeKB} KB</span>`
      );

      $('#imageError').hide();
      updateProgress();
    };
    reader.readAsDataURL(file);
  }

  $('#removeImage').on('click', function (e) {
    e.stopPropagation();
    fileInput.value = '';
    $('#previewContainer').removeClass('show');
    $('#uploadPlaceholder').show();
    dropZone.classList.remove('has-file');
    updateProgress();
  });

  // ===== Form Submit =====
  $('#driverForm').on('submit', function (e) {
    e.preventDefault();

    const form = this;
    if (!form.checkValidity()) {
      e.stopPropagation();
      $(form).addClass('was-validated');

      // Show image error if needed
      if (!fileInput.files || !fileInput.files.length) {
        $('#imageError').show();
      }

      // Scroll to first invalid
      const firstInvalid = $(form).find(':invalid').first();
      if (firstInvalid.length) {
        $('html, body').animate({
          scrollTop: firstInvalid.closest('.form-section').offset().top - 100
        }, 400);
        firstInvalid.focus();

        // Shake effect
        firstInvalid.closest('.form-field, .profile-upload-zone').addClass('shake');
        setTimeout(() => {
          firstInvalid.closest('.form-field, .profile-upload-zone').removeClass('shake');
        }, 500);
      }
      return false;
    }

    const formData = new FormData(form);

    $.ajax({
      url: '<?= base_url("driver/save_driver"); ?>',
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      dataType: 'json',
      beforeSend: function () {
        $('#submit_driver').prop('disabled', true).html(
          '<span class="spinner-border spinner-border-sm me-2"></span> Saving Driver...'
        );
      },
      success: function (response) {
        $('#submit_driver').prop('disabled', false).html(
          '<i class="bx bx-check-circle"></i> Save Driver'
        );

        if (response.status === 'success') {
          Swal.fire({
            icon: 'success',
            title: 'Driver Added!',
            text: response.message,
            timer: 2500,
            showConfirmButton: false,
            customClass: { popup: 'rounded-4' }
          }).then(() => {
            window.location.href = "<?= base_url('driver'); ?>";
          });

          // Reset form
          $('#driverForm')[0].reset();
          $('#previewContainer').removeClass('show');
          $('#uploadPlaceholder').show();
          dropZone.classList.remove('has-file');
          $('#passwordStrength').hide();
          $('#mobileCounter').text('0/10');
          $('.form-control, .form-select').removeClass('is-valid is-invalid');
          $(form).removeClass('was-validated');

          // Reset progress
          $('.progress-step').removeClass('completed active');
          $('.progress-step[data-step="1"]').addClass('active');
          $('.progress-step .step-circle').each(function (i) {
            $(this).text(i + 1);
          });
          $('.progress-connector').removeClass('filled');

        } else {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: response.message,
            confirmButtonColor: '#667eea'
          });
        }
      },
      error: function () {
        $('#submit_driver').prop('disabled', false).html(
          '<i class="bx bx-check-circle"></i> Save Driver'
        );
        Swal.fire({
          icon: 'error',
          title: 'Server Error',
          text: 'Something went wrong. Please try again.',
          confirmButtonColor: '#667eea'
        });
      }
    });
  });

  // ===== Reset Form Button =====
  $('#resetForm').on('click', function () {
    Swal.fire({
      title: 'Reset Form?',
      text: 'All entered data will be cleared.',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Yes, Reset',
      cancelButtonText: 'Cancel',
      confirmButtonColor: '#e53e3e',
      cancelButtonColor: '#a0aec0',
      customClass: { popup: 'rounded-4' }
    }).then((result) => {
      if (result.isConfirmed) {
        $('#driverForm')[0].reset();
        $('#previewContainer').removeClass('show');
        $('#uploadPlaceholder').show();
        dropZone.classList.remove('has-file');
        $('#passwordStrength').hide();
        $('#mobileCounter').text('0/10');
        $('.form-control, .form-select').removeClass('is-valid is-invalid');
        $('#driverForm').removeClass('was-validated');
        $('#imageError').hide();

        // Reset progress
        $('.progress-step').removeClass('completed active');
        $('.progress-step[data-step="1"]').addClass('active');
        $('.progress-step .step-circle').each(function (i) {
          $(this).text(i + 1);
        });
        $('.progress-connector').removeClass('filled');
      }
    });
  });

  // ===== Initial progress state =====
  updateProgress();
});
</script>