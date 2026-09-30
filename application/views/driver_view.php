<div class="page-wrapper">
  <div class="page-content">

    <!-- ===== Custom Styles ===== -->
    <style>
      /* ---------- Page Header ---------- */
      .page-header-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 32px 36px;
        color: #fff;
        margin-bottom: 28px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(102, 126, 234, .35);
      }

      .page-header-section::before {
        content: '';
        position: absolute;
        width: 220px;
        height: 220px;
        background: rgba(255, 255, 255, .07);
        border-radius: 50%;
        top: -60px;
        right: -40px;
      }

      .page-header-section::after {
        content: '';
        position: absolute;
        width: 140px;
        height: 140px;
        background: rgba(255, 255, 255, .05);
        border-radius: 50%;
        bottom: -50px;
        right: 120px;
      }

      .page-header-section h3 {
        font-weight: 800;
        font-size: 1.6rem;
        margin-bottom: 6px;
      }

      .page-header-section p {
        opacity: .85;
        margin: 0;
        font-size: .92rem;
      }

      .page-header-section .breadcrumb {
        background: rgba(255, 255, 255, .15);
        backdrop-filter: blur(6px);
        border-radius: 50px;
        padding: 8px 20px;
        display: inline-flex;
        margin-top: 14px;
      }

      .page-header-section .breadcrumb-item a {
        color: rgba(255, 255, 255, .85);
        text-decoration: none;
        font-size: .85rem;
      }

      .page-header-section .breadcrumb-item.active {
        color: #fff;
        font-weight: 600;
        font-size: .85rem;
      }

      .page-header-section .breadcrumb-item+.breadcrumb-item::before {
        color: rgba(255, 255, 255, .5);
      }

      /* ---------- Summary Strip ---------- */
      .summary-strip {
        display: flex;
        gap: 16px;
        margin-bottom: 24px;
        flex-wrap: wrap;
      }

      .summary-chip {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        border-radius: 14px;
        padding: 14px 22px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, .06);
        transition: all .3s ease;
        flex: 1;
        min-width: 180px;
      }

      .summary-chip:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, .1);
      }

      .summary-chip .chip-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
      }

      .summary-chip .chip-label {
        font-size: .78rem;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: .5px;
        font-weight: 600;
      }

      .summary-chip .chip-value {
        font-size: 1.25rem;
        font-weight: 800;
        color: #1e293b;
        line-height: 1.1;
      }

      /* ---------- Main Card ---------- */
      .drivers-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
        overflow: hidden;
      }

      .drivers-card .card-body {
        padding: 28px;
      }

      /* ---------- Toolbar ---------- */
      .table-toolbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 24px;
      }

      .search-box {
        position: relative;
        max-width: 340px;
        flex: 1;
      }

      .search-box input {
        border: 2px solid #e2e8f0;
        border-radius: 14px;
        padding: 12px 18px 12px 48px;
        font-size: .9rem;
        width: 100%;
        transition: all .3s ease;
        background: #f8fafc;
      }

      .search-box input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, .12);
        background: #fff;
        outline: none;
      }

      .search-box .search-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 20px;
        pointer-events: none;
      }

      .toolbar-actions {
        display: flex;
        gap: 10px;
        align-items: center;
      }

      .btn-toolbar-action {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 10px 14px;
        background: #f8fafc;
        color: #64748b;
        font-size: 18px;
        cursor: pointer;
        transition: all .3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .btn-toolbar-action:hover {
        border-color: #667eea;
        color: #667eea;
        background: #f0f4ff;
      }

      /* ---------- Table ---------- */
      .enhanced-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 6px;
      }

      .enhanced-table thead th {
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        border: none;
        padding: 14px 16px;
        font-size: .78rem;
        text-transform: uppercase;
        letter-spacing: .7px;
        font-weight: 700;
        color: #64748b;
        white-space: nowrap;
      }

      .enhanced-table thead th:first-child {
        border-radius: 12px 0 0 12px;
      }

      .enhanced-table thead th:last-child {
        border-radius: 0 12px 12px 0;
      }

      .enhanced-table tbody tr {
        background: #fff;
        transition: all .3s ease;
        border-radius: 12px;
      }

      .enhanced-table tbody tr:hover {
        background: #f8fafc;
        transform: scale(1.005);
        box-shadow: 0 4px 16px rgba(0, 0, 0, .06);
      }

      .enhanced-table tbody td {
        padding: 16px;
        border: none;
        vertical-align: middle;
        font-size: .9rem;
        color: #334155;
        border-top: 1px solid #f1f5f9;
        border-bottom: 1px solid #f1f5f9;
      }

      .enhanced-table tbody td:first-child {
        border-left: 1px solid #f1f5f9;
        border-radius: 12px 0 0 12px;
      }

      .enhanced-table tbody td:last-child {
        border-right: 1px solid #f1f5f9;
        border-radius: 0 12px 12px 0;
      }

      /* Row number badge */
      .row-number {
        width: 32px;
        height: 32px;
        border-radius: 10px;
        background: #f1f5f9;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: .8rem;
        color: #64748b;
      }

      /* Driver name cell */
      .driver-name {
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 12px;
      }

      .driver-avatar {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: .85rem;
        color: #fff;
        flex-shrink: 0;
        text-transform: uppercase;
      }

      /* Vehicle cell */
      .vehicle-info {
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .vehicle-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: #e0f2fe;
        color: #0284c7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
      }

      .vehicle-number-badge {
        background: #f1f5f9;
        padding: 4px 12px;
        border-radius: 8px;
        font-weight: 600;
        font-size: .82rem;
        color: #475569;
        font-family: 'Courier New', monospace;
        letter-spacing: .5px;
      }

      /* Company badge */
      .company-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #ede9fe;
        color: #7c3aed;
        padding: 5px 14px;
        border-radius: 50px;
        font-size: .8rem;
        font-weight: 600;
      }

      /* Status badges */
      .status-badge {
        padding: 6px 16px;
        border-radius: 50px;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .3px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
      }

      .status-badge.active {
        background: linear-gradient(135deg, #ecfdf5, #d1fae5);
        color: #059669;
        border: 1px solid #a7f3d0;
      }

      .status-badge.active::before {
        content: '';
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #059669;
        animation: blink 1.5s infinite;
      }

      .status-badge.inactive {
        background: linear-gradient(135deg, #fef2f2, #fee2e2);
        color: #dc2626;
        border: 1px solid #fecaca;
      }

      .status-badge.inactive::before {
        content: '';
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #dc2626;
      }

      @keyframes blink {

        0%,
        100% {
          opacity: 1;
        }

        50% {
          opacity: .3;
        }
      }

      /* ---------- Action Buttons ---------- */
      .action-group {
        display: flex;
        align-items: center;
        gap: 6px;
      }

      .action-btn {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: all .25s ease;
        text-decoration: none;
        position: relative;
      }

      .action-btn:hover {
        transform: translateY(-2px);
      }

      .action-btn.btn-edit {
        background: #e0f2fe;
        color: #0284c7;
      }

      .action-btn.btn-edit:hover {
        background: #0284c7;
        color: #fff;
        box-shadow: 0 4px 14px rgba(2, 132, 199, .35);
      }

      .action-btn.btn-delete {
        background: #fee2e2;
        color: #dc2626;
      }

      .action-btn.btn-delete:hover {
        background: #dc2626;
        color: #fff;
        box-shadow: 0 4px 14px rgba(220, 38, 38, .35);
      }

      .action-btn.btn-pdf {
        background: #fce7f3;
        color: #db2777;
      }

      .action-btn.btn-pdf:hover {
        background: #db2777;
        color: #fff;
        box-shadow: 0 4px 14px rgba(219, 39, 119, .35);
      }

      .action-btn.btn-fuel {
        background: #fef3c7;
        color: #d97706;
      }

      .action-btn.btn-fuel:hover {
        background: #d97706;
        color: #fff;
        box-shadow: 0 4px 14px rgba(217, 119, 6, .35);
      }

      .action-btn.btn-toggle-on {
        background: #d1fae5;
        color: #059669;
      }

      .action-btn.btn-toggle-on:hover {
        background: #059669;
        color: #fff;
        box-shadow: 0 4px 14px rgba(5, 150, 105, .35);
      }

      .action-btn.btn-toggle-off {
        background: #fee2e2;
        color: #dc2626;
      }

      .action-btn.btn-toggle-off:hover {
        background: #dc2626;
        color: #fff;
        box-shadow: 0 4px 14px rgba(220, 38, 38, .35);
      }

      /* Tooltip */
      .action-btn[data-tooltip] {
        position: relative;
      }

      .action-btn[data-tooltip]::after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: calc(100% + 8px);
        left: 50%;
        transform: translateX(-50%) scale(.8);
        background: #1e293b;
        color: #fff;
        font-size: .7rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 6px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: all .2s ease;
      }

      .action-btn[data-tooltip]:hover::after {
        opacity: 1;
        transform: translateX(-50%) scale(1);
      }

      /* View Details Button */
      .btn-view-details {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 8px 20px;
        font-size: .8rem;
        font-weight: 600;
        cursor: pointer;
        transition: all .3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
      }

      .btn-view-details:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, .4);
        color: #fff;
      }

      .btn-view-details i {
        font-size: 16px;
        transition: transform .3s ease;
      }

      .btn-view-details:hover i {
        transform: translateX(3px);
      }

      /* ---------- Pagination ---------- */
      .pagination-wrapper {
        margin-top: 24px;
        display: flex;
        justify-content: center;
      }

      .enhanced-pagination {
        display: flex;
        gap: 6px;
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .enhanced-pagination .page-item .page-link {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #e2e8f0;
        background: #fff;
        color: #64748b;
        font-weight: 600;
        font-size: .85rem;
        text-decoration: none;
        transition: all .3s ease;
      }

      .enhanced-pagination .page-item .page-link:hover {
        border-color: #667eea;
        color: #667eea;
        background: #f0f4ff;
      }

      .enhanced-pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-color: transparent;
        color: #fff;
        box-shadow: 0 4px 14px rgba(102, 126, 234, .35);
      }

      .enhanced-pagination .page-item .page-link#nextBtn {
        width: auto;
        padding: 0 18px;
        gap: 4px;
      }

      /* ---------- Empty State ---------- */
      .empty-state {
        text-align: center;
        padding: 60px 20px;
      }

      .empty-state .empty-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: #fee2e2;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: #dc2626;
        margin-bottom: 16px;
      }

      .empty-state h5 {
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 6px;
      }

      .empty-state p {
        color: #94a3b8;
        font-size: .9rem;
      }

      /* ---------- Mobile badge ---------- */
      .mobile-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-weight: 500;
      }

      .mobile-badge i {
        color: #059669;
        font-size: 14px;
      }

      /* ---------- Loading shimmer ---------- */
      .shimmer-row td {
        position: relative;
        overflow: hidden;
      }

      .shimmer-bar {
        height: 14px;
        border-radius: 6px;
        background: linear-gradient(90deg, #f1f5f9 25%, #e2e8f0 50%, #f1f5f9 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
      }

      @keyframes shimmer {
        0% {
          background-position: 200% 0;
        }

        100% {
          background-position: -200% 0;
        }
      }

      /* ---------- Responsive ---------- */
      @media (max-width: 767.98px) {
        .page-header-section {
          padding: 24px 20px;
        }

        .page-header-section h3 {
          font-size: 1.3rem;
        }

        .drivers-card .card-body {
          padding: 16px;
        }

        .table-toolbar {
          flex-direction: column;
          align-items: stretch;
        }

        .search-box {
          max-width: 100%;
        }
      }

      /* Avatar color palette */
      .avatar-color-1 {
        background: linear-gradient(135deg, #667eea, #764ba2);
      }

      .avatar-color-2 {
        background: linear-gradient(135deg, #f59e0b, #f97316);
      }

      .avatar-color-3 {
        background: linear-gradient(135deg, #10b981, #059669);
      }

      .avatar-color-4 {
        background: linear-gradient(135deg, #ef4444, #f43f5e);
      }

      .avatar-color-5 {
        background: linear-gradient(135deg, #06b6d4, #0284c7);
      }

      .avatar-color-6 {
        background: linear-gradient(135deg, #8b5cf6, #7c3aed);
      }

      /* Table row entrance animation */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(10px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .enhanced-table tbody tr {
        animation: fadeInUp .35s ease forwards;
      }
    </style>

    <!-- ===== Page Header ===== -->
    <div class="page-header-section">
      <h3><i class="bx bx-user-check me-2"></i>All Drivers</h3>
      <p>Manage and monitor all registered drivers in the system</p>
      <nav>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i>
              Dashboard</a></li>
          <li class="breadcrumb-item active">All Drivers</li>
        </ol>
      </nav>
    </div>

    <!-- ===== Summary Strip ===== -->
    <div class="summary-strip" id="summaryStrip">
      <div class="summary-chip">
        <div class="chip-icon" style="background:#e0f2fe;color:#0284c7;">
          <i class="bx bx-group"></i>
        </div>
        <div>
          <div class="chip-label">Total Drivers</div>
          <div class="chip-value" id="totalCount">—</div>
        </div>
      </div>
      <div class="summary-chip">
        <div class="chip-icon" style="background:#d1fae5;color:#059669;">
          <i class="bx bx-check-circle"></i>
        </div>
        <div>
          <div class="chip-label">Active</div>
          <div class="chip-value" id="activeCount">—</div>
        </div>
      </div>
      <div class="summary-chip">
        <div class="chip-icon" style="background:#fee2e2;color:#dc2626;">
          <i class="bx bx-x-circle"></i>
        </div>
        <div>
          <div class="chip-label">Inactive</div>
          <div class="chip-value" id="inactiveCount">—</div>
        </div>
      </div>
      <div class="summary-chip">
        <div class="chip-icon" style="background:#ede9fe;color:#7c3aed;">
          <i class="bx bx-file"></i>
        </div>
        <div>
          <div class="chip-label">Page</div>
          <div class="chip-value" id="pageInfo">—</div>
        </div>
      </div>
    </div>

    <!-- ===== Drivers Table Card ===== -->
    <div class="card drivers-card">
      <div class="card-body">

        <!-- Toolbar -->
        <div class="table-toolbar">
          <div class="search-box">
            <i class="bx bx-search search-icon"></i>
            <input type="text" id="search" placeholder="Search by name, mobile, vehicle...">
          </div>
          <div class="toolbar-actions">
            <button class="btn-toolbar-action" onclick="loadDrivers(currentPage, $('#search').val())"
              data-tooltip="Refresh">
              <i class="bx bx-refresh"></i>
            </button>
          </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
          <table class="enhanced-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Driver</th>
                <th>Mobile</th>
                <th>Vehicle</th>
                <th>Vehicle No.</th>
                <th>Company</th>
                <th>Status</th>
                <th>Actions</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody id="driver">
              <!-- Shimmer Loading Placeholder -->
              <tr class="shimmer-row">
                <td colspan="9">
                  <div class="shimmer-bar" style="width:100%;"></div>
                </td>
              </tr>
              <tr class="shimmer-row">
                <td colspan="9">
                  <div class="shimmer-bar" style="width:90%;"></div>
                </td>
              </tr>
              <tr class="shimmer-row">
                <td colspan="9">
                  <div class="shimmer-bar" style="width:95%;"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
          <ul class="enhanced-pagination" id="pagination"></ul>
        </div>

      </div>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // Avatar color helper
  const avatarColors = ['avatar-color-1', 'avatar-color-2', 'avatar-color-3', 'avatar-color-4', 'avatar-color-5', 'avatar-color-6'];
  function getAvatarColor(index) {
    return avatarColors[index % avatarColors.length];
  }
  function getInitials(name) {
    if (!name) return '?';
    const parts = name.trim().split(' ');
    return parts.length >= 2
      ? (parts[0][0] + parts[1][0]).toUpperCase()
      : parts[0].substring(0, 2).toUpperCase();
  }

  let currentPage = 1;
  let totalPages = 1;

  $(document).ready(function () {
    loadDrivers();

    // Debounced search
    let searchTimer;
    $('#search').on('keyup', function () {
      clearTimeout(searchTimer);
      const val = $(this).val();
      searchTimer = setTimeout(function () {
        currentPage = 1;
        loadDrivers(1, val);
      }, 300);
    });

    // Pagination click
    $(document).on('click', '.page-link', function (e) {
      e.preventDefault();
      let pageText = $(this).text().trim();
      if (pageText === 'Next') {
        if (currentPage < totalPages) currentPage++;
      } else {
        currentPage = parseInt(pageText);
      }
      loadDrivers(currentPage, $('#search').val());
    });
  });

  function loadDrivers(page = 1, search = '') {
    // Show loading shimmer
    let shimmerHtml = '';
    for (let s = 0; s < 5; s++) {
      shimmerHtml += `<tr class="shimmer-row"><td colspan="9"><div class="shimmer-bar" style="width:${90 + Math.random() * 10}%;height:16px;margin:4px 0;"></div></td></tr>`;
    }
    $('#driver').html(shimmerHtml);

    $.ajax({
      url: "<?= base_url('driver/fetch_drivers'); ?>",
      type: "POST",
      data: { page, search },
      dataType: "json",
      success: function (res) {
        let html = '';
        let activeCount = 0;
        let inactiveCount = 0;

        if (res.drivers.length > 0) {
          $.each(res.drivers, function (i, d) {
            const rowNum = (page - 1) * 10 + i + 1;
            const initials = getInitials(d.name);
            const colorClass = getAvatarColor(i);
            if (d.isActive == 1) activeCount++; else inactiveCount++;

            html += `
<tr style="animation-delay: ${i * 0.05}s;">
  <td><span class="row-number">${rowNum}</span></td>
  <td>
    <div class="driver-name">
      <div class="driver-avatar ${colorClass}">${initials}</div>
      <span>${d.name}</span>
    </div>
  </td>
  <td>
    <span class="mobile-badge">
      <i class="bx bxs-phone"></i> ${d.mobile}
    </span>
  </td>
  <td>
    <div class="vehicle-info">
      <div class="vehicle-icon"><i class="bx bxs-car"></i></div>
      <span>${d.vehical_name}</span>
    </div>
  </td>
  <td><span class="vehicle-number-badge">${d.vehical_number}</span></td>
  <td>
    ${d.company_name
                ? `<span class="company-badge"><i class="bx bxs-building"></i> ${d.company_name}</span>`
                : '<span style="color:#94a3b8;">—</span>'}
  </td>
  <td>
    <span class="status-badge ${d.isActive == 1 ? 'active' : 'inactive'}">
      ${d.isActive == 1 ? 'Active' : 'Inactive'}
    </span>
  </td>
  <td>
    <div class="action-group">
      <a href="<?= base_url('driver/edit/'); ?>${d.id}" class="action-btn btn-edit" data-tooltip="Edit">
        <i class="bx bxs-edit"></i>
      </a>
      <a class="action-btn btn-delete delete-user" data-id="${d.id}" data-tooltip="Delete">
        <i class="bx bxs-trash"></i>
      </a>
      <a class="action-btn btn-pdf download-pdf" data-id="${d.id}" data-tooltip="PDF">
        <i class="bx bxs-file-pdf"></i>
      </a>
      <a href="<?= base_url('fuel/') ?>${d.id}" class="action-btn btn-fuel" data-tooltip="Fuel">
        <i class="bx bx-gas-pump"></i>
      </a>
      ${d.isActive == 1
                ? `<a href="javascript:;" class="action-btn btn-toggle-on" onclick="toggleDriverStatus(${d.id}, 0)" data-tooltip="Deactivate">
            <i class="bx bx-toggle-right"></i>
           </a>`
                : `<a href="javascript:;" class="action-btn btn-toggle-off" onclick="toggleDriverStatus(${d.id}, 1)" data-tooltip="Activate">
            <i class="bx bx-toggle-left"></i>
           </a>`}
    </div>
  </td>
  <td>
    <a href="<?= base_url('driver/view/'); ?>${d.id}" class="btn-view-details">
      View <i class="bx bx-right-arrow-alt"></i>
    </a>
  </td>
</tr>`;
          });
        } else {
          html = `
<tr>
  <td colspan="9">
    <div class="empty-state">
      <div class="empty-icon"><i class="bx bx-user-x"></i></div>
      <h5>No Drivers Found</h5>
      <p>Try adjusting your search or add a new driver.</p>
    </div>
  </td>
</tr>`;
        }

        $('#driver').html(html);
        totalPages = res.total_pages;
        currentPage = res.current_page;

        // Update summary
        const totalDrivers = res.total_records || res.drivers.length;
        $('#totalCount').text(totalDrivers);
        $('#activeCount').text(activeCount);
        $('#inactiveCount').text(inactiveCount);
        $('#pageInfo').text(currentPage + ' / ' + totalPages);

        renderPagination();
      }
    });
  }

  // Pagination render
  function renderPagination() {
    let paginationHtml = '';
    let startPage = Math.max(1, currentPage - 1);
    let endPage = Math.min(totalPages, startPage + 2);

    for (let i = startPage; i <= endPage; i++) {
      paginationHtml += `<li class="page-item ${i === currentPage ? 'active' : ''}">
      <a class="page-link" href="#">${i}</a>
    </li>`;
    }

    if (endPage < totalPages) {
      paginationHtml += `<li class="page-item">
      <a class="page-link" href="#" id="nextBtn">Next <i class="bx bx-chevron-right"></i></a>
    </li>`;
    }

    $('#pagination').html(paginationHtml);
  }

  // Toggle active/inactive status
  function toggleDriverStatus(id, status) {
    let action = status == 1 ? 'Activate' : 'Deactivate';
    Swal.fire({
      title: `${action} Driver?`,
      text: `Are you sure you want to ${action.toLowerCase()} this driver?`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: status == 1 ? '#059669' : '#dc2626',
      cancelButtonColor: '#94a3b8',
      confirmButtonText: `<i class="bx bx-check me-1"></i> ${action}`,
      cancelButtonText: 'Cancel',
      customClass: { popup: 'rounded-4' }
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "<?= base_url('driver/toggle_status'); ?>",
          type: "POST",
          data: { id: id, isActive: status },
          dataType: "json",
          success: function (res) {
            if (res.status === "success") {
              Swal.fire({
                icon: 'success',
                title: 'Done!',
                text: res.message,
                timer: 1500,
                showConfirmButton: false,
                customClass: { popup: 'rounded-4' }
              });
              loadDrivers(currentPage, $('#search').val());
            } else {
              Swal.fire({ icon: 'error', title: 'Error', text: res.message, customClass: { popup: 'rounded-4' } });
            }
          }
        });
      }
    });
  }

  // Delete driver
  $(document).on('click', '.delete-user', function () {
    var id = $(this).data('id');
    Swal.fire({
      title: 'Delete Driver?',
      text: "This action cannot be undone.",
      icon: 'error',
      showCancelButton: true,
      confirmButtonColor: '#dc2626',
      cancelButtonColor: '#94a3b8',
      confirmButtonText: '<i class="bx bx-trash me-1"></i> Yes, Delete',
      cancelButtonText: 'Cancel',
      customClass: { popup: 'rounded-4' }
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: '<?= base_url("driver/delete_user"); ?>',
          type: 'POST',
          data: { id: id },
          dataType: 'json',
          success: function (response) {
            if (response.status === 'success') {
              Swal.fire({
                icon: 'success',
                title: 'Deleted!',
                text: 'Driver deleted successfully.',
                timer: 1500,
                showConfirmButton: false,
                customClass: { popup: 'rounded-4' }
              }).then(() => {
                loadDrivers(currentPage, $('#search').val());
              });
            } else {
              Swal.fire({ icon: 'error', title: 'Failed!', text: response.message, customClass: { popup: 'rounded-4' } });
            }
          },
          error: function () {
            Swal.fire({ icon: 'error', title: 'Error!', text: 'Something went wrong.', customClass: { popup: 'rounded-4' } });
          }
        });
      }
    });
  });

  // Download PDF
  $(document).on('click', '.download-pdf', function () {
    const tripId = $(this).data('id');
    Swal.fire({
      title: 'Generating PDF...',
      html: '<div style="display:flex;align-items:center;justify-content:center;gap:10px;"><i class="bx bx-loader-alt bx-spin" style="font-size:24px;color:#667eea;"></i> Please wait...</div>',
      allowOutsideClick: false,
      showConfirmButton: false,
      customClass: { popup: 'rounded-4' }
    });

    const pdfUrl = "<?= base_url('driver/generate_pdf'); ?>?id=" + tripId;
    window.open(pdfUrl, '_blank');

    setTimeout(() => {
      Swal.fire({
        icon: 'success',
        title: 'Download Started',
        text: 'Your report is being downloaded.',
        timer: 2000,
        showConfirmButton: false,
        customClass: { popup: 'rounded-4' }
      });
    }, 500);
  });
</script>