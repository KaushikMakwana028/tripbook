<style>
  /* ===== Enhanced Driver Edit Page Styles ===== */
  .driver-edit-wrapper {
    min-height: 100vh;
    padding: 30px 0;
  }

  .driver-edit-card {
    background: #ffffff;
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .driver-edit-card:hover {
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
  }

  /* Card Header */
  .card-header-custom {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 30px 35px;
    position: relative;
    overflow: hidden;
  }

  .card-header-custom::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
  }

  .card-header-custom::after {
    content: '';
    position: absolute;
    bottom: -60%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
  }

  .card-header-custom h5 {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    margin: 0;
    position: relative;
    z-index: 1;
  }

  .card-header-custom p {
    color: rgba(255, 255, 255, 0.8);
    margin: 5px 0 0;
    font-size: 14px;
    position: relative;
    z-index: 1;
  }

  .header-icon {
    width: 55px;
    height: 55px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #fff;
    backdrop-filter: blur(10px);
    position: relative;
    z-index: 1;
  }

  /* Card Body */
  .card-body-custom {
    padding: 35px 35px 25px;
  }

  /* Breadcrumb Enhanced */
  .breadcrumb-enhanced {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    border-radius: 15px;
    padding: 18px 25px;
    margin-bottom: 25px;
    border: 1px solid rgba(102, 126, 234, 0.1);
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

  /* Section Dividers */
  .form-section {
    margin-bottom: 30px;
  }

  .section-title {
    font-size: 16px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f0f2ff;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .section-title i {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
  }

  /* Form Controls Enhanced */
  .form-floating-custom {
    position: relative;
    margin-bottom: 22px;
  }

  .form-floating-custom .form-label {
    font-size: 13px;
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: color 0.3s;
  }

  .form-floating-custom .form-label i {
    font-size: 16px;
    color: #667eea;
  }

  .form-floating-custom .form-control,
  .form-floating-custom .form-select {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 12px 16px;
    font-size: 14px;
    color: #2d3748;
    background-color: #fafbff;
    transition: all 0.3s ease;
    height: auto;
  }

  .form-floating-custom .form-control:focus,
  .form-floating-custom .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
    background-color: #fff;
  }

  .form-floating-custom .form-control:hover,
  .form-floating-custom .form-select:hover {
    border-color: #b8c4ff;
  }

  .form-floating-custom .form-control.is-invalid,
  .form-floating-custom .form-select.is-invalid {
    border-color: #fc8181;
    box-shadow: 0 0 0 4px rgba(252, 129, 129, 0.15);
  }

  .form-floating-custom .invalid-feedback {
    font-size: 12px;
    margin-top: 6px;
    color: #e53e3e;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .form-floating-custom .input-icon {
    position: absolute;
    right: 16px;
    top: 45px;
    color: #a0aec0;
    font-size: 18px;
    pointer-events: none;
  }

  /* Profile Image Upload */
  .profile-upload-area {
    border: 2px dashed #d2d6dc;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
    background: linear-gradient(135deg, #fafbff 0%, #f5f7ff 100%);
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
  }

  .profile-upload-area:hover {
    border-color: #667eea;
    background: linear-gradient(135deg, #f0f2ff 0%, #e8ebff 100%);
    transform: translateY(-2px);
  }

  .profile-upload-area.drag-over {
    border-color: #667eea;
    background: rgba(102, 126, 234, 0.08);
  }

  .profile-preview-container {
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
  }

  .profile-preview-container img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    transition: all 0.3s ease;
  }

  .profile-preview-container:hover img {
    transform: scale(1.05);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
  }

  .profile-preview-badge {
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 35px;
    height: 35px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    border: 3px solid #fff;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    transition: transform 0.3s;
  }

  .profile-preview-badge:hover {
    transform: scale(1.1);
  }

  .upload-text {
    color: #718096;
    font-size: 13px;
    margin-top: 10px;
  }

  .upload-text strong {
    color: #667eea;
  }

  /* Password Toggle */
  .password-wrapper {
    position: relative;
  }

  .password-wrapper .input-group {
    border-radius: 12px;
    overflow: hidden;
  }

  .password-wrapper .form-control {
    border-right: none;
    border-radius: 12px 0 0 12px !important;
  }

  .password-wrapper .btn-toggle-password {
    border: 2px solid #e2e8f0;
    border-left: none;
    background: #fafbff;
    color: #667eea;
    padding: 12px 16px;
    border-radius: 0 12px 12px 0 !important;
    transition: all 0.3s;
  }

  .password-wrapper .btn-toggle-password:hover {
    background: #f0f2ff;
    color: #764ba2;
  }

  .password-wrapper .form-control:focus~.btn-toggle-password,
  .password-wrapper .form-control:focus+.btn-toggle-password {
    border-color: #667eea;
  }

  .password-hint {
    font-size: 12px;
    color: #a0aec0;
    margin-top: 6px;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .password-hint i {
    font-size: 14px;
  }

  /* Submit Button */
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
    box-shadow: 0 12px 35px rgba(102, 126, 234, 0.45);
  }

  .btn-submit-driver:hover::before {
    left: 100%;
  }

  .btn-submit-driver:active {
    transform: translateY(-1px);
  }

  .btn-cancel {
    background: #f7fafc;
    border: 2px solid #e2e8f0;
    border-radius: 14px;
    padding: 15px 30px;
    font-size: 16px;
    font-weight: 600;
    color: #4a5568;
    transition: all 0.3s ease;
  }

  .btn-cancel:hover {
    background: #edf2f7;
    border-color: #cbd5e0;
    color: #2d3748;
    transform: translateY(-2px);
  }

  /* Row spacing */
  .form-row-custom {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  @media (max-width: 768px) {
    .form-row-custom {
      grid-template-columns: 1fr;
    }

    .card-body-custom {
      padding: 25px 20px 20px;
    }

    .card-header-custom {
      padding: 25px 20px;
    }

    .btn-actions {
      flex-direction: column;
    }
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

  .animate-delay-1 {
    animation-delay: 0.1s;
  }

  .animate-delay-2 {
    animation-delay: 0.2s;
  }

  .animate-delay-3 {
    animation-delay: 0.3s;
  }

  .animate-delay-4 {
    animation-delay: 0.4s;
  }

  /* Status indicator */
  .status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 6px;
  }

  .status-dot.active {
    background: #48bb78;
  }

  .status-dot.inactive {
    background: #fc8181;
  }

  /* Tooltip styles */
  .field-tooltip {
    font-size: 12px;
    color: #a0aec0;
    margin-top: 4px;
  }

  /* Back to top pattern */
  .form-footer-pattern {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    margin: 0 -35px -25px;
    padding: 25px 35px;
    border-top: 1px solid #edf2f7;
    border-radius: 0 0 20px 20px;
  }

  .btn-actions {
    display: flex;
    gap: 15px;
  }
</style>

<div class="page-wrapper">
  <div class="page-content">

    <!-- Enhanced Breadcrumb -->
    <div class="breadcrumb-enhanced animate-in">
      <div class="d-flex align-items-center justify-content-between flex-wrap">
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
              <li class="breadcrumb-item active" aria-current="page">Edit Driver</li>
            </ol>
          </nav>
        </div>
        <a href="<?= base_url('driver'); ?>" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
          <i class="bx bx-arrow-back me-1"></i> Back to List
        </a>
      </div>
    </div>

    <!-- Enhanced Card -->
    <div class="driver-edit-card card animate-in animate-delay-1">
      <!-- Card Header -->
      <div class="card-header-custom">
        <div class="d-flex align-items-center gap-3">
          <div class="header-icon">
            <i class="bx bx-edit"></i>
          </div>
          <div>
            <h5>Edit Driver</h5>
            <p><i class="bx bx-info-circle me-1"></i> Update the driver information below</p>
          </div>
        </div>
      </div>

      <!-- Card Body -->
      <div class="card-body-custom">
        <form id="driverEditForm" method="post" enctype="multipart/form-data" novalidate>
          <input type="hidden" name="id" value="<?= isset($driver['id']) ? $driver['id'] : ''; ?>">
          <input type="hidden" name="old_image"
            value="<?= isset($driver['profile_image']) ? $driver['profile_image'] : ''; ?>">

          <!-- Section: Personal Info -->
          <div class="form-section animate-in animate-delay-1">
            <div class="section-title">
              <i class="bx bx-user"></i>
              Personal Information
            </div>

            <!-- Profile Image Upload -->
            <div class="form-floating-custom mb-4">
              <label class="form-label"><i class="bx bx-camera"></i> Profile Photo</label>
              <div class="profile-upload-area" id="dropZone"
                onclick="document.getElementById('profile_image').click();">
                <div class="profile-preview-container">
                  <?php if (!empty($driver['profile_image'])): ?>
                    <img id="profilePreview" src="<?= base_url($driver['profile_image']); ?>" alt="Driver Photo">
                  <?php else: ?>
                    <img id="profilePreview" src="<?= base_url('assets/images/default-avatar.png'); ?>"
                      alt="Default Avatar" style="opacity: 0.5;">
                  <?php endif; ?>
                  <div class="profile-preview-badge">
                    <i class="bx bx-camera"></i>
                  </div>
                </div>
                <div class="upload-text">
                  <strong>Click to upload</strong> or drag & drop<br>
                  <small>PNG, JPG up to 2MB</small>
                </div>
                <input type="file" name="profile_image" class="form-control d-none" id="profile_image"
                  accept="image/png, image/jpeg, image/jpg">
              </div>
            </div>

            <div class="form-row-custom">
              <!-- Driver Name -->
              <div class="form-floating-custom">
                <label for="driver_name" class="form-label"><i class="bx bx-user-circle"></i> Driver Name</label>
                <input type="text" name="driver_name" class="form-control" id="driver_name"
                  value="<?= isset($driver['name']) ? $driver['name'] : ''; ?>" placeholder="Enter full name" required>
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter driver name.</div>
              </div>

              <!-- Driver Email -->
              <div class="form-floating-custom">
                <label for="email" class="form-label"><i class="bx bx-envelope"></i> Email Address</label>
                <input type="email" name="email" class="form-control" id="email"
                  value="<?= isset($driver['email']) ? $driver['email'] : ''; ?>" placeholder="example@email.com"
                  required>
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter a valid email.</div>
              </div>
            </div>

            <div class="form-row-custom">
              <!-- Mobile -->
              <div class="form-floating-custom">
                <label for="mobile" class="form-label"><i class="bx bx-phone"></i> Mobile Number</label>
                <input type="text" name="mobile" class="form-control" id="mobile"
                  value="<?= isset($driver['mobile']) ? $driver['mobile'] : ''; ?>" maxlength="10" required
                  pattern="[0-9]{10}" placeholder="Enter 10-digit number">
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter a valid 10-digit mobile
                  number.</div>
              </div>

              <!-- Location -->
              <div class="form-floating-custom">
                <label for="location" class="form-label"><i class="bx bx-map"></i> Location</label>
                <input type="text" name="location" class="form-control" id="location"
                  value="<?= isset($driver['location']) ? $driver['location'] : ''; ?>" placeholder="City, State">
                <div class="field-tooltip">Optional — Driver's base location</div>
              </div>
            </div>
          </div>

          <!-- Section: Company & Vehicle -->
          <div class="form-section animate-in animate-delay-2">
            <div class="section-title">
              <i class="bx bx-car"></i>
              Company & Vehicle Details
            </div>

            <div class="form-row-custom">
              <!-- Company -->
              <div class="form-floating-custom">
                <label for="company_id" class="form-label"><i class="bx bx-buildings"></i> Company</label>
                <select name="company_id" id="company_id" class="form-select" required>
                  <option value="">-- Select Company --</option>
                  <?php if (!empty($companies)): ?>
                    <?php foreach ($companies as $company): ?>
                      <option value="<?= $company->id; ?>" <?= (isset($driver['company_id']) && $driver['company_id'] == $company->id) ? 'selected' : ''; ?>>
                        <?= ucfirst($company->company_name); ?>
                      </option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please select a company.</div>
              </div>

              <!-- Vehicle Name -->
              <div class="form-floating-custom">
                <label for="vehicle_name" class="form-label"><i class="bx bx-car"></i> Vehicle Name</label>
                <input type="text" name="vehicle_name" class="form-control" id="vehicle_name"
                  value="<?= isset($driver['vehical_name']) ? $driver['vehical_name'] : ''; ?>"
                  placeholder="e.g., Toyota Innova" required>
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter vehicle name.</div>
              </div>
            </div>

            <div class="form-row-custom">
              <!-- Vehicle Number -->
              <div class="form-floating-custom">
                <label for="vehicle_number" class="form-label"><i class="bx bx-hash"></i> Vehicle Number</label>
                <input type="text" name="vehicle_number" class="form-control" id="vehicle_number"
                  value="<?= isset($driver['vehical_number']) ? $driver['vehical_number'] : ''; ?>"
                  placeholder="e.g., MH 12 AB 1234" required>
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter vehicle number.</div>
              </div>

              <!-- Licence Number -->
              <div class="form-floating-custom">
                <label for="licence_number" class="form-label"><i class="bx bx-id-card"></i> Licence Number</label>
                <input type="text" name="licence_number" class="form-control" id="licence_number"
                  value="<?= isset($driver['licence_no']) ? $driver['licence_no'] : ''; ?>"
                  placeholder="e.g., DL-0420110012345" required>
                <div class="invalid-feedback"><i class="bx bx-error-circle"></i> Please enter licence number.</div>
              </div>
            </div>
          </div>

          <!-- Section: Security -->
          <div class="form-section animate-in animate-delay-3">
            <div class="section-title">
              <i class="bx bx-lock-alt"></i>
              Security
            </div>

            <div class="form-floating-custom">
              <label for="password" class="form-label"><i class="bx bx-key"></i> Password</label>
              <div class="password-wrapper">
                <div class="input-group">
                  <input type="password" name="password" class="form-control" id="password" minlength="6"
                    placeholder="Enter new password">
                  <button type="button" class="btn btn-toggle-password" id="togglePassword">
                    <i class="bx bx-hide" id="toggleIcon"></i>
                  </button>
                </div>
              </div>
              <div class="password-hint">
                <i class="bx bx-info-circle"></i> Leave blank to keep current password. Minimum 6 characters.
              </div>
            </div>
          </div>

          <!-- Form Footer with Actions -->
          <div class="form-footer-pattern animate-in animate-delay-4">
            <div class="btn-actions">
              <button class="btn btn-submit-driver flex-grow-1" id="update_driver" type="submit">
                <i class="bx bx-check-circle me-2"></i> Update Driver
              </button>
              <a href="<?= base_url('driver'); ?>" class="btn btn-cancel">
                <i class="bx bx-x me-1"></i> Cancel
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

<script>
  $(document).ready(function () {

    // ===== Form Submit =====
    $('#driverEditForm').on('submit', function (e) {
      e.preventDefault();

      const form = this;
      if (!form.checkValidity()) {
        e.stopPropagation();
        $(form).addClass('was-validated');

        // Scroll to first invalid field
        const firstInvalid = $(form).find(':invalid').first();
        if (firstInvalid.length) {
          $('html, body').animate({
            scrollTop: firstInvalid.offset().top - 120
          }, 400);
          firstInvalid.focus();
        }
        return false;
      }

      const formData = new FormData(form);

      $.ajax({
        url: "<?= base_url('driver/update_driver'); ?>",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "json",
        beforeSend: function () {
          $('#update_driver').prop('disabled', true).html(
            '<span class="spinner-border spinner-border-sm me-2"></span> Updating...'
          );
          Swal.fire({
            title: 'Updating Driver...',
            html: '<div class="text-muted">Please wait while we save the changes.</div>',
            allowOutsideClick: false,
            didOpen: () => Swal.showLoading()
          });
        },
        success: function (res) {
          Swal.close();
          $('#update_driver').prop('disabled', false).html(
            '<i class="bx bx-check-circle me-2"></i> Update Driver'
          );

          if (res.status === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Driver Updated!',
              text: res.message,
              timer: 2000,
              showConfirmButton: false,
              customClass: {
                popup: 'rounded-4'
              }
            }).then(() => {
              window.location.href = "<?= base_url('driver'); ?>";
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Update Failed',
              text: res.message,
              confirmButtonColor: '#667eea'
            });
          }
        },
        error: function () {
          Swal.close();
          $('#update_driver').prop('disabled', false).html(
            '<i class="bx bx-check-circle me-2"></i> Update Driver'
          );
          Swal.fire({
            icon: 'error',
            title: 'Server Error',
            text: 'Unable to update driver right now. Please try again.',
            confirmButtonColor: '#667eea'
          });
        }
      });
    });

    // ===== Image Preview =====
    $('#profile_image').on('change', function () {
      const file = this.files[0];
      if (file) {
        if (file.size > 2 * 1024 * 1024) {
          Swal.fire({
            icon: 'warning',
            title: 'File Too Large',
            text: 'Please select an image under 2MB.',
            confirmButtonColor: '#667eea'
          });
          this.value = '';
          return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
          $('#profilePreview').attr('src', e.target.result).css('opacity', '1');
        };
        reader.readAsDataURL(file);
      }
    });

    // ===== Drag & Drop =====
    const dropZone = document.getElementById('dropZone');
    if (dropZone) {
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
          document.getElementById('profile_image').files = files;
          $('#profile_image').trigger('change');
        }
      });
    }

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

    // ===== Mobile Number - Only Digits =====
    $('#mobile').on('input', function () {
      this.value = this.value.replace(/[^0-9]/g, '');
    });

    // ===== Real-time Validation Feedback =====
    $('#driverEditForm .form-control, #driverEditForm .form-select').on('input change', function () {
      if (this.checkValidity()) {
        $(this).removeClass('is-invalid').addClass('is-valid');
      } else {
        $(this).removeClass('is-valid').addClass('is-invalid');
      }
    });

    // ===== Animate sections on scroll =====
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.form-section').forEach(section => {
      section.style.opacity = '0';
      section.style.transform = 'translateY(20px)';
      section.style.transition = 'all 0.5s ease';
      observer.observe(section);
    });
  });
</script>