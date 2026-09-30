<style>
  /* ===== Professional Add Company Page Styles ===== */
  .add-company-wrapper {
    max-width: 720px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .page-header {
    background: linear-gradient(135deg, #10b981 0%, #059669 50%, #047857 100%);
    border-radius: 16px;
    padding: 28px 32px;
    margin-bottom: 32px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(16, 185, 129, 0.3);
  }

  .page-header::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
  }

  .page-header::after {
    content: '';
    position: absolute;
    bottom: -60%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
  }

  .page-header .header-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
  }

  .page-header .header-left {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .page-header .header-icon {
    width: 56px;
    height: 56px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.15);
  }

  .page-header h4 {
    color: #fff;
    font-weight: 700;
    font-size: 1.5rem;
    margin: 0;
    letter-spacing: -0.3px;
  }

  .page-header p {
    color: rgba(255, 255, 255, 0.8);
    margin: 4px 0 0;
    font-size: 0.88rem;
  }

  .breadcrumb-modern {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
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

  /* Form Card */
  .form-card {
    background: #fff;
    border-radius: 16px;
    border: 1px solid #e8ecf1;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
    overflow: hidden;
    transition: box-shadow 0.3s ease;
  }

  .form-card:hover {
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
  }

  .form-card-header {
    padding: 24px 32px;
    border-bottom: 1px solid #f0f2f5;
    display: flex;
    align-items: center;
    gap: 14px;
    background: #fafbfc;
  }

  .form-card-header .icon-box {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #10b981, #059669);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    flex-shrink: 0;
  }

  .form-card-header .header-text h5 {
    margin: 0;
    font-weight: 700;
    font-size: 1.1rem;
    color: #1a1d29;
  }

  .form-card-header .header-text p {
    margin: 2px 0 0;
    font-size: 0.82rem;
    color: #8b95a5;
  }

  .form-card-body {
    padding: 32px;
  }

  /* Steps Indicator */
  .steps-indicator {
    display: flex;
    align-items: center;
    gap: 0;
    margin-bottom: 32px;
    padding: 0 8px;
  }

  .step-item {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .step-item .step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: 700;
    flex-shrink: 0;
    transition: all 0.3s ease;
  }

  .step-item.active .step-number {
    background: linear-gradient(135deg, #10b981, #059669);
    color: #fff;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
  }

  .step-item.pending .step-number {
    background: #f3f4f6;
    color: #9ca3af;
    border: 2px solid #e5e7eb;
  }

  .step-item .step-label {
    font-size: 0.82rem;
    font-weight: 600;
    color: #1a1d29;
  }

  .step-item.pending .step-label {
    color: #9ca3af;
  }

  .step-connector {
    flex: 1;
    height: 2px;
    background: #e5e7eb;
    margin: 0 16px;
    border-radius: 2px;
    position: relative;
    min-width: 40px;
  }

  .step-connector.done {
    background: linear-gradient(90deg, #10b981, #a7f3d0);
  }

  /* Info Card */
  .info-card {
    background: linear-gradient(135deg, #ecfdf5, #f0fdf4);
    border: 1px solid #a7f3d0;
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 28px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .info-card .info-icon {
    width: 36px;
    height: 36px;
    background: #10b981;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
    flex-shrink: 0;
  }

  .info-card .info-text {
    font-size: 0.84rem;
    color: #4b5563;
    line-height: 1.5;
  }

  .info-card .info-text strong {
    color: #1a1d29;
  }

  /* Form Groups */
  .form-group-modern {
    margin-bottom: 28px;
    position: relative;
  }

  .form-group-modern .form-label-modern {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    font-size: 0.88rem;
    color: #344054;
    margin-bottom: 8px;
    letter-spacing: 0.2px;
  }

  .form-group-modern .form-label-modern .label-icon {
    width: 28px;
    height: 28px;
    background: #ecfdf5;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #10b981;
    font-size: 14px;
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
    padding: 14px 18px;
    font-size: 0.95rem;
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
    border-color: #10b981;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.12);
  }

  .form-group-modern .helper-text {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: 8px;
    font-size: 0.78rem;
    color: #9ca3af;
  }

  .form-group-modern .helper-text i {
    font-size: 14px;
  }

  .error-message {
    display: none;
    align-items: center;
    gap: 6px;
    margin-top: 8px;
    font-size: 0.82rem;
    color: #ef4444;
    font-weight: 500;
  }

  .error-message i {
    font-size: 14px;
  }

  .form-group-modern.has-error .error-message {
    display: flex;
  }

  .form-group-modern.has-error .form-control-modern {
    border-color: #ef4444;
  }

  .form-group-modern.has-error .form-control-modern:focus {
    box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.12);
  }

  .form-group-modern.is-valid .form-control-modern {
    border-color: #10b981;
  }

  /* Character Counter */
  .char-counter {
    text-align: right;
    font-size: 0.75rem;
    color: #9ca3af;
    margin-top: 6px;
  }

  .char-counter.warning {
    color: #f59e0b;
  }

  .char-counter.danger {
    color: #ef4444;
  }

  /* Divider */
  .form-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 32px 0;
    color: #c7ccd4;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
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

  .btn-save {
    flex: 1;
    padding: 14px 28px;
    font-size: 0.95rem;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
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

  .btn-save::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
    transition: left 0.5s ease;
  }

  .btn-save:hover::before {
    left: 100%;
  }

  .btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(16, 185, 129, 0.4);
  }

  .btn-save:active {
    transform: translateY(0);
  }

  .btn-save:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none !important;
    box-shadow: none !important;
  }

  .btn-reset {
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
  }

  .btn-reset:hover {
    background: #f9fafb;
    border-color: #d1d5db;
    color: #374151;
  }

  /* Quick Tips */
  .quick-tips {
    background: #fffbeb;
    border: 1px solid #fde68a;
    border-radius: 12px;
    padding: 20px 24px;
    margin-top: 24px;
  }

  .quick-tips h6 {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.88rem;
    font-weight: 700;
    color: #92400e;
    margin: 0 0 12px;
  }

  .quick-tips h6 i {
    font-size: 18px;
    color: #f59e0b;
  }

  .quick-tips ul {
    margin: 0;
    padding-left: 0;
    list-style: none;
  }

  .quick-tips ul li {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.82rem;
    color: #78350f;
    padding: 4px 0;
  }

  .quick-tips ul li i {
    color: #f59e0b;
    font-size: 14px;
    flex-shrink: 0;
  }

  /* Success Animation */
  @keyframes successPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.02); }
    100% { transform: scale(1); }
  }

  .form-card.success-state {
    border-color: #10b981;
    animation: successPulse 0.5s ease;
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

  .animate-in:nth-child(1) { animation-delay: 0s; }
  .animate-in:nth-child(2) { animation-delay: 0.1s; }
  .animate-in:nth-child(3) { animation-delay: 0.15s; }

  /* Responsive */
  @media (max-width: 576px) {
    .page-header {
      padding: 22px 20px;
      border-radius: 12px;
    }

    .page-header h4 {
      font-size: 1.2rem;
    }

    .form-card-body {
      padding: 24px 20px;
    }

    .form-card-header {
      padding: 20px;
    }

    .form-actions {
      flex-direction: column-reverse;
    }

    .btn-reset {
      width: 100%;
      justify-content: center;
    }

    .header-content {
      flex-direction: column;
      align-items: flex-start !important;
    }

    .steps-indicator {
      display: none;
    }
  }
</style>

<div class="page-wrapper">
  <div class="page-content">
    <div class="add-company-wrapper">

      <!-- Page Header -->
      <div class="page-header animate-in">
        <div class="header-content">
          <div class="header-left">
            <div class="header-icon">
              <i class="bx bxs-building-house"></i>
            </div>
            <div>
              <h4>Add New Company</h4>
              <p>Register a new company in the system</p>
            </div>
          </div>
          <a href="<?= base_url('company'); ?>" class="back-link">
            <i class="bx bx-arrow-back"></i>
            Back to List
          </a>
        </div>
        <div class="breadcrumb-modern" style="margin-top: 18px; position: relative; z-index: 2;">
          <a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i> Dashboard</a>
          <span class="separator"><i class="bx bx-chevron-right"></i></span>
          <a href="<?= base_url('company'); ?>">Companies</a>
          <span class="separator"><i class="bx bx-chevron-right"></i></span>
          <span class="current">Add Company</span>
        </div>
      </div>

      <!-- Form Card -->
      <div class="form-card animate-in" id="formCard">
        <div class="form-card-header">
          <div class="icon-box">
            <i class="bx bx-plus-circle"></i>
          </div>
          <div class="header-text">
            <h5>Company Information</h5>
            <p>Fill in the details below to add a new company</p>
          </div>
        </div>

        <div class="form-card-body">

          <!-- Steps Indicator -->
          <div class="steps-indicator">
            <div class="step-item active">
              <div class="step-number">1</div>
              <span class="step-label">Company Details</span>
            </div>
            <div class="step-connector done"></div>
            <div class="step-item pending">
              <div class="step-number">2</div>
              <span class="step-label">Review & Save</span>
            </div>
          </div>

          <!-- Info Card -->
          <div class="info-card">
            <div class="info-icon">
              <i class="bx bx-info-alt"></i>
            </div>
            <div class="info-text">
              <strong>Quick setup.</strong> Enter the company name below to register it in the system. The company will be set to <strong>Active</strong> status by default.
            </div>
          </div>

          <form id="companyForm" method="post" novalidate>

            <!-- Company Name -->
            <div class="form-group-modern" id="nameGroup">
              <label for="company_name" class="form-label-modern">
                <span class="label-icon"><i class="bx bx-buildings"></i></span>
                Company Name
                <span class="required-dot"></span>
              </label>
              <input type="text" name="company_name" class="form-control-modern" id="company_name"
                     placeholder="e.g. Acme Corporation Pvt. Ltd." maxlength="100" required autocomplete="off">
              <div class="error-message">
                <i class="bx bx-error-circle"></i>
                <span>Please enter a valid company name.</span>
              </div>
              <div class="helper-text" id="helperText">
                <i class="bx bx-info-circle"></i>
                Enter the official registered company name
              </div>
              <div class="char-counter" id="charCounter">0 / 100</div>
            </div>

            <div class="form-divider">Confirm & Save</div>

            <!-- Action Buttons -->
            <div class="form-actions">
              <button type="button" class="btn-reset" id="resetBtn">
                <i class="bx bx-reset"></i>
                Reset
              </button>
              <button class="btn-save" id="submit_company" type="submit">
                <i class="bx bx-check-shield"></i>
                Save Company
              </button>
            </div>
          </form>

          <!-- Quick Tips -->
          <div class="quick-tips">
            <h6><i class="bx bx-bulb"></i> Quick Tips</h6>
            <ul>
              <li><i class="bx bx-check"></i> Use the full registered name of the company</li>
              <li><i class="bx bx-check"></i> Avoid abbreviations unless officially used</li>
              <li><i class="bx bx-check"></i> Duplicate company names will be flagged automatically</li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script>
$(document).ready(function () {

  // Character counter
  $('#company_name').on('input', function () {
    const len = $(this).val().length;
    const max = 100;
    const counter = $('#charCounter');
    counter.text(len + ' / ' + max);

    if (len >= 90) {
      counter.removeClass('warning').addClass('danger');
    } else if (len >= 70) {
      counter.removeClass('danger').addClass('warning');
    } else {
      counter.removeClass('warning danger');
    }

    // Clear error on input
    const group = $(this).closest('.form-group-modern');
    group.removeClass('has-error');
    $(this).removeClass('is-invalid');

    // Add valid state
    if ($.trim($(this).val()).length >= 2) {
      group.addClass('is-valid');
    } else {
      group.removeClass('is-valid');
    }
  });

  // Reset button
  $('#resetBtn').on('click', function () {
    $('#companyForm')[0].reset();
    $('.form-group-modern').removeClass('has-error is-valid');
    $('#company_name').removeClass('is-invalid');
    $('#charCounter').text('0 / 100').removeClass('warning danger');
    $('#company_name').focus();
  });

  // Form submission
  $('#companyForm').on('submit', function (e) {
    e.preventDefault();
    let valid = true;
    const form = this;

    // Validate company name
    const nameField = $('#company_name');
    const nameGroup = nameField.closest('.form-group-modern');

    if ($.trim(nameField.val()) === '' || $.trim(nameField.val()).length < 2) {
      nameField.addClass('is-invalid');
      nameGroup.addClass('has-error').removeClass('is-valid');
      if ($.trim(nameField.val()).length > 0 && $.trim(nameField.val()).length < 2) {
        nameGroup.find('.error-message span').text('Company name must be at least 2 characters.');
      } else {
        nameGroup.find('.error-message span').text('Please enter a valid company name.');
      }
      nameField.focus();
      valid = false;
    }

    if (!valid) return false;

    $.ajax({
      url: "<?= base_url('driver/save_company'); ?>",
      type: "POST",
      data: $(form).serialize(),
      dataType: "json",
      beforeSend: function () {
        $('#submit_company').prop('disabled', true).html(
          '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...'
        );
      },
      success: function (response) {
        $('#submit_company').prop('disabled', false).html(
          '<i class="bx bx-check-shield"></i> Save Company'
        );

        if (response.status === "success") {
          $('#formCard').addClass('success-state');
          setTimeout(() => $('#formCard').removeClass('success-state'), 1000);

          Swal.fire({
            icon: 'success',
            title: 'Company Added!',
            text: response.message,
            confirmButtonColor: '#10b981',
            customClass: { popup: 'rounded-4' }
          }).then(() => {
            $('#companyForm')[0].reset();
            $('.form-group-modern').removeClass('has-error is-valid');
            $('#charCounter').text('0 / 100').removeClass('warning danger');
            $('#company_name').focus();
          });
        } else if (response.status === "exists") {
          Swal.fire({
            icon: 'warning',
            title: 'Already Exists!',
            text: response.message,
            confirmButtonColor: '#f59e0b',
            customClass: { popup: 'rounded-4' }
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Something went wrong. Please try again.',
            confirmButtonColor: '#ef4444',
            customClass: { popup: 'rounded-4' }
          });
        }
      },
      error: function () {
        $('#submit_company').prop('disabled', false).html(
          '<i class="bx bx-check-shield"></i> Save Company'
        );
        Swal.fire({
          icon: 'error',
          title: 'Server Error!',
          text: 'Please check your connection or contact support.',
          confirmButtonColor: '#ef4444',
          customClass: { popup: 'rounded-4' }
        });
      }
    });
  });

  // Auto-focus
  $('#company_name').focus();
});
</script>