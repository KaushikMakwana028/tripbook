<div class="page-wrapper">
  <div class="page-content">

    <!-- ===== Custom Styles ===== -->
    <style>
      /* ---------- Page Header ---------- */
      .page-header-section {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 50%, #b45309 100%);
        border-radius: 20px;
        padding: 32px 36px;
        color: #fff;
        margin-bottom: 28px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(245, 158, 11, .3);
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
        position: relative;
        z-index: 1;
      }

      .page-header-section p {
        opacity: .85;
        margin: 0;
        font-size: .92rem;
        position: relative;
        z-index: 1;
      }

      .page-header-section .breadcrumb {
        background: rgba(255, 255, 255, .15);
        backdrop-filter: blur(6px);
        border-radius: 50px;
        padding: 8px 20px;
        display: inline-flex;
        margin-top: 14px;
        position: relative;
        z-index: 1;
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
        min-width: 170px;
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
      .fuel-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
        overflow: hidden;
      }

      .fuel-card .card-body {
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
        border-color: #f59e0b;
        box-shadow: 0 0 0 4px rgba(245, 158, 11, .12);
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
        border-color: #f59e0b;
        color: #f59e0b;
        background: #fffbeb;
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
        animation: fadeInUp .35s ease forwards;
      }

      .enhanced-table tbody tr:hover {
        background: #fffbeb;
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

      /* Row number */
      .row-number {
        width: 32px;
        height: 32px;
        border-radius: 10px;
        background: #fef3c7;
        color: #d97706;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: .8rem;
      }

      /* Driver name cell */
      .driver-cell {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        color: #1e293b;
      }

      .driver-cell .avatar {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: .75rem;
        color: #fff;
        flex-shrink: 0;
        text-transform: uppercase;
      }

      .avatar-1 {
        background: linear-gradient(135deg, #667eea, #764ba2);
      }

      .avatar-2 {
        background: linear-gradient(135deg, #f59e0b, #f97316);
      }

      .avatar-3 {
        background: linear-gradient(135deg, #10b981, #059669);
      }

      .avatar-4 {
        background: linear-gradient(135deg, #ef4444, #f43f5e);
      }

      .avatar-5 {
        background: linear-gradient(135deg, #06b6d4, #0284c7);
      }

      .avatar-6 {
        background: linear-gradient(135deg, #8b5cf6, #7c3aed);
      }

      /* Vehicle info */
      .vehicle-cell {
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .vehicle-cell .v-icon {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: #e0f2fe;
        color: #0284c7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
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

      /* Fuel type badge */
      .fuel-type-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 14px;
        border-radius: 50px;
        font-size: .8rem;
        font-weight: 600;
      }

      .fuel-petrol {
        background: linear-gradient(135deg, #fef3c7, #fde68a);
        color: #b45309;
        border: 1px solid #fcd34d;
      }

      .fuel-diesel {
        background: linear-gradient(135deg, #e0f2fe, #bae6fd);
        color: #0369a1;
        border: 1px solid #7dd3fc;
      }

      .fuel-cng {
        background: linear-gradient(135deg, #d1fae5, #a7f3d0);
        color: #047857;
        border: 1px solid #6ee7b7;
      }

      .fuel-electric {
        background: linear-gradient(135deg, #ede9fe, #ddd6fe);
        color: #6d28d9;
        border: 1px solid #c4b5fd;
      }

      .fuel-default {
        background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
        color: #475569;
        border: 1px solid #cbd5e1;
      }

      /* KM badge */
      .km-badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-weight: 600;
        color: #1e293b;
      }

      .km-badge i {
        color: #10b981;
        font-size: 15px;
      }

      /* Quantity / Amount */
      .qty-cell {
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 4px;
      }

      .qty-cell .unit {
        font-weight: 500;
        font-size: .78rem;
        color: #94a3b8;
      }

      .amount-cell {
        font-weight: 800;
        color: #059669;
        font-size: .95rem;
      }

      .amount-cell::before {
        content: '₹';
        font-size: .85rem;
        margin-right: 1px;
      }

      /* Notes cell */
      .notes-cell {
        max-width: 160px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #64748b;
        font-size: .85rem;
        font-style: italic;
      }

      .notes-cell.empty {
        color: #cbd5e1;
        font-style: normal;
      }

      /* ---------- Action Button ---------- */
      .action-btn {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 17px;
        border: none;
        cursor: pointer;
        transition: all .25s ease;
        text-decoration: none;
        position: relative;
      }

      .action-btn:hover {
        transform: translateY(-2px);
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

      /* Tooltip */
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
        min-width: 40px;
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
        padding: 0 12px;
      }

      .enhanced-pagination .page-item .page-link:hover {
        border-color: #f59e0b;
        color: #f59e0b;
        background: #fffbeb;
      }

      .enhanced-pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        border-color: transparent;
        color: #fff;
        box-shadow: 0 4px 14px rgba(245, 158, 11, .35);
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
        background: #fef3c7;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: #d97706;
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

      /* ---------- Shimmer ---------- */
      .shimmer-bar {
        height: 16px;
        border-radius: 6px;
        background: linear-gradient(90deg, #f1f5f9 25%, #e2e8f0 50%, #f1f5f9 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
        margin: 4px 0;
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

        .fuel-card .card-body {
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
    </style>

    <!-- ===== Page Header ===== -->
    <div class="page-header-section">
      <h3><i class="bx bx-gas-pump me-2"></i>Fuel Management</h3>
      <p>Track and manage all fuel entries for your fleet</p>
      <nav>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i>
              Dashboard</a></li>
          <li class="breadcrumb-item active">All Fuel Records</li>
        </ol>
      </nav>
    </div>

    <!-- ===== Summary Strip ===== -->
    <div class="summary-strip">
      <div class="summary-chip">
        <div class="chip-icon" style="background:#fef3c7;color:#d97706;">
          <i class="bx bx-gas-pump"></i>
        </div>
        <div>
          <div class="chip-label">Total Records</div>
          <div class="chip-value" id="totalRecords">—</div>
        </div>
      </div>
      <div class="summary-chip">
        <div class="chip-icon" style="background:#d1fae5;color:#059669;">
          <i class="bx bx-rupee"></i>
        </div>
        <div>
          <div class="chip-label">Total Amount</div>
          <div class="chip-value" id="totalAmount">—</div>
        </div>
      </div>
      <div class="summary-chip">
        <div class="chip-icon" style="background:#e0f2fe;color:#0284c7;">
          <i class="bx bx-droplet"></i>
        </div>
        <div>
          <div class="chip-label">Total Quantity</div>
          <div class="chip-value" id="totalQuantity">—</div>
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

    <!-- ===== Fuel Table Card ===== -->
    <div class="card fuel-card">
      <div class="card-body">

        <!-- Toolbar -->
        <div class="table-toolbar">
          <div class="search-box">
            <i class="bx bx-search search-icon"></i>
            <input type="text" id="search-fuel" placeholder="Search by driver, vehicle, fuel type...">
          </div>
          <div class="toolbar-actions">
            <button class="btn-toolbar-action" onclick="loadFuel()" title="Refresh">
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
                <th>Vehicle</th>
                <th>Vehicle No.</th>
                <th>Fuel Type</th>
                <th>Kilometer</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Notes</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="fuel">
              <!-- Shimmer placeholders -->
              <tr>
                <td colspan="10">
                  <div class="shimmer-bar" style="width:100%;"></div>
                </td>
              </tr>
              <tr>
                <td colspan="10">
                  <div class="shimmer-bar" style="width:92%;"></div>
                </td>
              </tr>
              <tr>
                <td colspan="10">
                  <div class="shimmer-bar" style="width:96%;"></div>
                </td>
              </tr>
              <tr>
                <td colspan="10">
                  <div class="shimmer-bar" style="width:88%;"></div>
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
  // Helpers
  const avatarClasses = ['avatar-1', 'avatar-2', 'avatar-3', 'avatar-4', 'avatar-5', 'avatar-6'];
  function getInitials(name) {
    if (!name) return '?';
    const parts = name.trim().split(' ');
    return parts.length >= 2
      ? (parts[0][0] + parts[1][0]).toUpperCase()
      : parts[0].substring(0, 2).toUpperCase();
  }
  function getFuelClass(type) {
    if (!type) return 'fuel-default';
    const t = type.toLowerCase();
    if (t.includes('petrol')) return 'fuel-petrol';
    if (t.includes('diesel')) return 'fuel-diesel';
    if (t.includes('cng')) return 'fuel-cng';
    if (t.includes('electric') || t.includes('ev')) return 'fuel-electric';
    return 'fuel-default';
  }
  function getFuelIcon(type) {
    if (!type) return 'bx-droplet';
    const t = type.toLowerCase();
    if (t.includes('petrol')) return 'bxs-flame';
    if (t.includes('diesel')) return 'bx-droplet';
    if (t.includes('cng')) return 'bx-wind';
    if (t.includes('electric') || t.includes('ev')) return 'bx-bolt-circle';
    return 'bx-droplet';
  }

  const USER_ID = "<?= $user_id ?>";

  function loadFuel(page = 1, search = '') {
    // Shimmer while loading
    let shimmerHtml = '';
    for (let s = 0; s < 5; s++) {
      shimmerHtml += `<tr><td colspan="10"><div class="shimmer-bar" style="width:${88 + Math.random() * 12}%;"></div></td></tr>`;
    }
    $('#fuel').html(shimmerHtml);

    $.ajax({
      url: "<?= base_url('profile/get_fuel_list'); ?>",
      type: "GET",
      data: { page: page, search: search, user_id: USER_ID },
      dataType: "json",
      success: function (res) {
        if (res.status && res.data.length > 0) {
          let rows = '';
          let sumAmount = 0;
          let sumQty = 0;

          $.each(res.data, function (i, item) {
            const initials = getInitials(item.name);
            const avatarClass = avatarClasses[i % avatarClasses.length];
            const fuelClass = getFuelClass(item.fuel_type);
            const fuelIcon = getFuelIcon(item.fuel_type);

            sumAmount += parseFloat(item.amount) || 0;
            sumQty += parseFloat(item.quantity) || 0;

            rows += `
<tr style="animation-delay: ${i * 0.05}s;">
  <td><span class="row-number">${i + 1}</span></td>
  <td>
    <div class="driver-cell">
      <div class="avatar ${avatarClass}">${initials}</div>
      <span>${item.name || '-'}</span>
    </div>
  </td>
  <td>
    <div class="vehicle-cell">
      <div class="v-icon"><i class="bx bxs-car"></i></div>
      <span>${item.vehical_name || '-'}</span>
    </div>
  </td>
  <td><span class="vehicle-number-badge">${item.vehical_number || '-'}</span></td>
  <td>
    <span class="fuel-type-badge ${fuelClass}">
      <i class="bx ${fuelIcon}"></i> ${item.fuel_type || '-'}
    </span>
  </td>
  <td>
    <span class="km-badge">
      <i class="bx bx-tachometer"></i> ${item.km ? item.km + ' km' : '-'}
    </span>
  </td>
  <td>
    <div class="qty-cell">
      ${item.quantity}<span class="unit">L</span>
    </div>
  </td>
  <td><span class="amount-cell">${parseFloat(item.amount).toLocaleString('en-IN')}</span></td>
  <td>
    <span class="notes-cell ${!item.notes ? 'empty' : ''}" title="${item.notes || ''}">
      ${item.notes ? item.notes : '— No notes —'}
    </span>
  </td>
  <td>
    <a class="action-btn btn-delete delete-fuel" data-id="${item.id}" data-tooltip="Delete">
      <i class="bx bxs-trash"></i>
    </a>
  </td>
</tr>`;
          });

          $('#fuel').html(rows);
          renderPagination(res.pagination);

          // Update summary chips
          const totalRec = res.pagination ? res.pagination.total_records || res.data.length : res.data.length;
          $('#totalRecords').text(totalRec);
          $('#totalAmount').text('₹' + sumAmount.toLocaleString('en-IN'));
          $('#totalQuantity').text(sumQty.toFixed(1) + ' L');
          if (res.pagination) {
            $('#pageInfo').text(res.pagination.current_page + ' / ' + res.pagination.total_pages);
          }
        } else {
          $('#fuel').html(`
<tr>
  <td colspan="10">
    <div class="empty-state">
      <div class="empty-icon"><i class="bx bx-gas-pump"></i></div>
      <h5>No Fuel Records Found</h5>
      <p>Try adjusting your search or add a new fuel entry.</p>
    </div>
  </td>
</tr>`);
          $('#pagination').html('');
          $('#totalRecords').text('0');
          $('#totalAmount').text('₹0');
          $('#totalQuantity').text('0 L');
          $('#pageInfo').text('—');
        }
      }
    });
  }

  function renderPagination(pagination) {
    if (!pagination) return;
    const totalPages = pagination.total_pages;
    const currentPage = pagination.current_page;
    let html = '';

    if (currentPage > 1) {
      html += `<li class="page-item">
      <a class="page-link" href="#" data-page="${currentPage - 1}">
        <i class="bx bx-chevron-left"></i>
      </a>
    </li>`;
    }

    // Show smart range
    let startPage = Math.max(1, currentPage - 2);
    let endPage = Math.min(totalPages, startPage + 4);
    if (endPage - startPage < 4) startPage = Math.max(1, endPage - 4);

    for (let i = startPage; i <= endPage; i++) {
      html += `<li class="page-item ${i === currentPage ? 'active' : ''}">
      <a class="page-link" href="#" data-page="${i}">${i}</a>
    </li>`;
    }

    if (currentPage < totalPages) {
      html += `<li class="page-item">
      <a class="page-link" href="#" data-page="${currentPage + 1}">
        <i class="bx bx-chevron-right"></i>
      </a>
    </li>`;
    }

    $('#pagination').html(html);
  }

  $(document).ready(function () {
    loadFuel();

    // Debounced search
    let searchTimer;
    $('#search-fuel').on('keyup', function () {
      clearTimeout(searchTimer);
      const val = $(this).val().trim();
      searchTimer = setTimeout(function () {
        loadFuel(1, val);
      }, 300);
    });

    // Pagination click
    $(document).on('click', '.page-link', function (e) {
      e.preventDefault();
      const page = $(this).data('page');
      if (page) {
        const search = $('#search-fuel').val().trim();
        loadFuel(page, search);
      }
    });
  });

  // Delete fuel entry
  $(document).on('click', '.delete-fuel', function () {
    const id = $(this).data('id');
    Swal.fire({
      title: 'Delete Fuel Entry?',
      text: 'This record will be permanently removed.',
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
          url: "<?= base_url('profile/delete_fuel'); ?>",
          type: "POST",
          data: { id },
          success: function (res) {
            Swal.fire({
              icon: 'success',
              title: 'Deleted!',
              text: 'Fuel entry removed successfully.',
              timer: 1500,
              showConfirmButton: false,
              customClass: { popup: 'rounded-4' }
            }).then(() => {
              const search = $('#search-fuel').val().trim();
              loadFuel(1, search);
            });
          },
          error: function () {
            Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: 'Something went wrong while deleting.',
              customClass: { popup: 'rounded-4' }
            });
          }
        });
      }
    });
  });
</script>