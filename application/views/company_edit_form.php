<style>
  /* ===== Professional Edit Company Page Styles ===== */
  .edit-company-wrapper {
    max-width: 720px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 16px;
    padding: 28px 32px;
    margin-bottom: 32px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(102, 126, 234, 0.3);
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
    background: linear-gradient(135deg, #667eea, #764ba2);
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

  /* Form Groups */
  .form-group-modern {
    margin-bottom: 28px;
    position: relative;
  }

  .form-group-modern:last-of-type {
    margin-bottom: 32px;
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
    background: #f0f3ff;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #667eea;
    font-size: 14px;
  }

  .form-group-modern .form-label-modern .required-dot {
    width: 6px;
    height: 6px;
    background: #ef4444;
    border-radius: 50%;
    margin-left: 2px;
  }

  .form-group-modern .form-control-modern,
  .form-group-modern .form-select-modern {
    width: 100%;
    padding: 12px 16px;
    font-size: 0.95rem;
    color: #1a1d29;
    background: #f9fafb;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    outline: none;
    -webkit-appearance: none;
    appearance: none;
  }

  .form-group-modern .form-control-modern::placeholder {
    color: #9ca3af;
    font-weight: 400;
  }

  .form-group-modern .form-control-modern:hover,
  .form-group-modern .form-select-modern:hover {
    border-color: #c7ccd4;
    background: #fff;
  }

  .form-group-modern .form-control-modern:focus,
  .form-group-modern .form-select-modern:focus {
    border-color: #667eea;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.12);
  }

  .form-group-modern .form-select-modern {
    padding-right: 44px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    background-size: 18px;
    cursor: pointer;
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

  /* Status Options */
  .status-cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .status-card-option {
    position: relative;
  }

  .status-card-option input[type="radio"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
  }

  .status-card-option label {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 20px;
    background: #f9fafb;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .status-card-option label:hover {
    border-color: #c7ccd4;
    background: #fff;
  }

  .status-card-option input[type="radio"]:checked + label {
    background: #f0f3ff;
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
  }

  .status-card-option .status-indicator {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
  }

  .status-card-option .status-indicator.active {
    background: #dcfce7;
    color: #16a34a;
  }

  .status-card-option .status-indicator.inactive {
    background: #fee2e2;
    color: #dc2626;
  }

  .status-card-option .status-info strong {
    display: block;
    font-size: 0.9rem;
    color: #1a1d29;
    font-weight: 600;
  }

  .status-card-option .status-info span {
    font-size: 0.78rem;
    color: #9ca3af;
  }

  .status-card-option .check-circle {
    margin-left: auto;
    width: 22px;
    height: 22px;
    border: 2px solid #d1d5db;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    color: transparent;
    transition: all 0.3s ease;
    flex-shrink: 0;
  }

  .status-card-option input[type="radio"]:checked + label .check-circle {
    background: #667eea;
    border-color: #667eea;
    color: #fff;
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

  .btn-update {
    flex: 1;
    padding: 14px 28px;
    font-size: 0.95rem;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

  .btn-update::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
    transition: left 0.5s ease;
  }

  .btn-update:hover::before {
    left: 100%;
  }

  .btn-update:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
  }

  .btn-update:active {
    transform: translateY(0);
  }

  .btn-cancel {
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

  .btn-cancel:hover {
    background: #f9fafb;
    border-color: #d1d5db;
    color: #374151;
  }

  /* Back Link */
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

  /* Company ID Badge */
  .company-id-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    background: #f0f3ff;
    border: 1px solid #dde2ff;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    color: #667eea;
    margin-bottom: 24px;
  }

  .company-id-badge i {
    font-size: 14px;
  }

  /* Validation Styles */
  .form-group-modern .form-control-modern.is-invalid,
  .form-group-modern .form-select-modern.is-invalid {
    border-color: #ef4444;
    background-image: none;
  }

  .form-group-modern .form-control-modern.is-invalid:focus {
    box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.12);
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

  /* Info Card */
  .info-card {
    background: linear-gradient(135deg, #eff6ff, #f0f3ff);
    border: 1px solid #dde2ff;
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
    background: #667eea;
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
  .animate-in:nth-child(3) { animation-delay: 0.2s; }

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

    .status-cards {
      grid-template-columns: 1fr;
    }

    .form-actions {
      flex-direction: column-reverse;
    }

    .btn-cancel {
      width: 100%;
      justify-content: center;
    }

    .header-content {
      flex-direction: column;
      align-items: flex-start !important;
    }
  }
</style>

<div class="page-wrapper">
  <div class="page-content">
    <div class="edit-company-wrapper">

      <!-- Page Header -->
      <div class="page-header animate-in">
        <div class="header-content">
          <div class="header-left">
            <div class="header-icon">
              <i class="bx bxs-building-house"></i>
            </div>
            <div>
              <h4>Edit Company</h4>
              <p>Update company information and settings</p>
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
          <span class="current">Edit Company</span>
        </div>
      </div>

      <!-- Form Card -->
      <div class="form-card animate-in">
        <div class="form-card-header">
          <div class="icon-box">
            <i class="bx bx-edit-alt"></i>
          </div>
          <div class="header-text">
            <h5>Company Details</h5>
            <p>Modify the fields below and save changes</p>
          </div>
        </div>

        <div class="form-card-body">
          <form id="companyEditForm" method="post" novalidate>
            <input type="hidden" name="id" value="<?= isset($company->id) ? $company->id : ''; ?>">

            <!-- Company ID Badge -->
            <div class="company-id-badge">
              <i class="bx bx-hash"></i>
              Company ID: #<?= isset($company->id) ? $company->id : 'N/A'; ?>
            </div>

            <!-- Info Card -->
            <div class="info-card">
              <div class="info-icon">
                <i class="bx bx-info-alt"></i>
              </div>
              <div class="info-text">
                <strong>Editing company record.</strong> Changes will be applied immediately after saving. Make sure all details are correct before updating.
              </div>
            </div>

            <!-- Company Name -->
            <div class="form-group-modern">
              <label for="company_name" class="form-label-modern">
                <span class="label-icon"><i class="bx bx-buildings"></i></span>
                Company Name
                <span class="required-dot"></span>
              </label>
              <input type="text" name="company_name" class="form-control-modern" id="company_name"
                     placeholder="e.g. Acme Corporation"
                     value="<?= isset($company->company_name) ? $company->company_name : ''; ?>" required>
              <div class="error-message">
                <i class="bx bx-error-circle"></i>
                Please enter a valid company name.
              </div>
              <div class="helper-text">
                <i class="bx bx-info-circle"></i>
                Enter the official registered company name
              </div>
            </div>

            <!-- Status -->
            <div class="form-group-modern">
              <label class="form-label-modern">
                <span class="label-icon"><i class="bx bx-toggle-left"></i></span>
                Status
                <span class="required-dot"></span>
              </label>
              <div class="status-cards">
                <div class="status-card-option">
                  <input type="radio" name="isActive" id="status_active" value="1"
                         <?= (isset($company->isActive) && $company->isActive == 1) ? 'checked' : ''; ?>>
                  <label for="status_active">
                    <div class="status-indicator active">
                      <i class="bx bx-check-circle"></i>
                    </div>
                    <div class="status-info">
                      <strong>Active</strong>
                      <span>Company is operational</span>
                    </div>
                    <div class="check-circle">
                      <i class="bx bx-check"></i>
                    </div>
                  </label>
                </div>
                <div class="status-card-option">
                  <input type="radio" name="isActive" id="status_inactive" value="0"
                         <?= (isset($company->isActive) && $company->isActive == 0) ? 'checked' : ''; ?>>
                  <label for="status_inactive">
                    <div class="status-indicator inactive">
                      <i class="bx bx-x-circle"></i>
                    </div>
                    <div class="status-info">
                      <strong>Inactive</strong>
                      <span>Temporarily disabled</span>
                    </div>
                    <div class="check-circle">
                      <i class="bx bx-check"></i>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <div class="form-divider">Save Changes</div>

            <!-- Action Buttons -->
            <div class="form-actions">
              <a href="<?= base_url('company'); ?>" class="btn-cancel">
                <i class="bx bx-x"></i>
                Cancel
              </a>
              <button class="btn-update" id="update_company" type="submit">
                <i class="bx bx-save"></i>
                Update Company
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script>
$(document).ready(function () {

  // Live validation removal
  $('#company_name').on('input', function () {
    $(this).closest('.form-group-modern').removeClass('has-error');
    $(this).removeClass('is-invalid');
  });

  $('#companyEditForm').on('submit', function (e) {
    e.preventDefault();
    let valid = true;
    const form = this;

    // Validate company name
    const nameField = $('#company_name');
    if ($.trim(nameField.val()) === '') {
      nameField.addClass('is-invalid');
      nameField.closest('.form-group-modern').addClass('has-error');
      valid = false;
    }

    if (!valid) return false;

    $.ajax({
      url: "<?= base_url('driver/update_company'); ?>",
      type: "POST",
      data: $(form).serialize(),
      dataType: "json",
      beforeSend: function () {
        $('#update_company').prop('disabled', true).html(
          '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Updating...'
        );
      },
      success: function (res) {
        if (res.status === 'success') {
          Swal.fire({
            icon: 'success',
            title: 'Updated Successfully!',
            text: res.message,
            timer: 2000,
            showConfirmButton: false,
            customClass: { popup: 'rounded-4' }
          }).then(() => {
            window.location.href = "<?= base_url('company'); ?>";
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Update Failed',
            text: res.message,
            confirmButtonColor: '#667eea'
          });
          $('#update_company').prop('disabled', false).html(
            '<i class="bx bx-save"></i> Update Company'
          );
        }
      },
      error: function () {
        Swal.fire({
          icon: 'error',
          title: 'Server Error',
          text: 'Unable to update company right now. Please try again.',
          confirmButtonColor: '#667eea'
        });
        $('#update_company').prop('disabled', false).html(
          '<i class="bx bx-save"></i> Update Company'
        );
      }
    });
  });
});
</script>