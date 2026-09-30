<style>
  /* ===== Enhanced Trips Page Styles ===== */
  .trips-page-wrapper {
    min-height: 100vh;
    padding: 30px 0;
  }

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

  /* Main Card */
  .trips-card {
    background: #ffffff;
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    animation: fadeInUp 0.5s ease;
  }

  .trips-card:hover {
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
  }

  /* Card Header */
  .trips-card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 28px 30px;
    position: relative;
    overflow: hidden;
  }

  .trips-card-header::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -15%;
    width: 280px;
    height: 280px;
    background: rgba(255, 255, 255, 0.07);
    border-radius: 50%;
  }

  .trips-card-header::after {
    content: '';
    position: absolute;
    bottom: -60%;
    left: -8%;
    width: 180px;
    height: 180px;
    background: rgba(255, 255, 255, 0.04);
    border-radius: 50%;
  }

  .trips-card-header .header-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 15px;
  }

  .trips-card-header .header-left {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .header-icon-box {
    width: 52px;
    height: 52px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
    backdrop-filter: blur(10px);
  }

  .trips-card-header h5 {
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    margin: 0;
  }

  .trips-card-header .header-subtitle {
    color: rgba(255, 255, 255, 0.75);
    font-size: 13px;
    margin-top: 3px;
  }

  /* Stats Pills */
  .stats-pills {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    position: relative;
    z-index: 1;
  }

  .stat-pill {
    background: rgba(255, 255, 255, 0.18);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    padding: 8px 18px;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    border: 1px solid rgba(255, 255, 255, 0.15);
  }

  .stat-pill i {
    font-size: 16px;
  }

  .stat-pill .stat-count {
    background: rgba(255, 255, 255, 0.25);
    border-radius: 20px;
    padding: 2px 10px;
    font-size: 12px;
    font-weight: 700;
    min-width: 28px;
    text-align: center;
  }

  /* Card Body */
  .trips-card-body {
    padding: 28px 30px;
  }

  /* Toolbar */
  .trips-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 24px;
    flex-wrap: wrap;
  }

  .search-box {
    position: relative;
    flex: 1;
    max-width: 360px;
  }

  .search-box input {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 11px 16px 11px 44px;
    font-size: 14px;
    color: #2d3748;
    background: #fafbff;
    transition: all 0.3s ease;
    width: 100%;
  }

  .search-box input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.12);
    background: #fff;
    outline: none;
  }

  .search-box input::placeholder {
    color: #a0aec0;
  }

  .search-box .search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
    font-size: 18px;
    transition: color 0.3s;
  }

  .search-box input:focus~.search-icon {
    color: #667eea;
  }

  .search-box .clear-search {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
    font-size: 18px;
    cursor: pointer;
    display: none;
    transition: color 0.3s;
    background: none;
    border: none;
    padding: 0;
  }

  .search-box .clear-search:hover {
    color: #e53e3e;
  }

  .toolbar-actions {
    display: flex;
    gap: 10px;
    align-items: center;
  }

  .btn-filter {
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 9px 16px;
    font-size: 14px;
    color: #4a5568;
    background: #fafbff;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
  }

  .btn-filter:hover {
    border-color: #667eea;
    color: #667eea;
    background: #f0f2ff;
  }

  .btn-filter.active {
    border-color: #667eea;
    color: #fff;
    background: linear-gradient(135deg, #667eea, #764ba2);
  }

  .btn-back-list {
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 9px 18px;
    font-size: 14px;
    font-weight: 600;
    color: #4a5568;
    background: #fff;
    transition: all 0.3s;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .btn-back-list:hover {
    border-color: #667eea;
    color: #667eea;
    background: #f8f9ff;
    transform: translateY(-1px);
  }

  /* Table Enhanced */
  .table-wrapper {
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #edf2f7;
  }

  .table-enhanced {
    margin: 0;
    border-collapse: separate;
    border-spacing: 0;
  }

  .table-enhanced thead th {
    background: linear-gradient(135deg, #f7f8fc 0%, #eef0f8 100%);
    color: #4a5568;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 16px 18px;
    border-bottom: 2px solid #e2e8f0;
    white-space: nowrap;
    position: sticky;
    top: 0;
    z-index: 5;
  }

  .table-enhanced thead th:first-child {
    padding-left: 24px;
  }

  .table-enhanced thead th i {
    font-size: 14px;
    margin-right: 4px;
    opacity: 0.6;
  }

  .table-enhanced tbody tr {
    transition: all 0.25s ease;
    border-bottom: 1px solid #f0f4f8;
  }

  .table-enhanced tbody tr:last-child {
    border-bottom: none;
  }

  .table-enhanced tbody tr:hover {
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
    transform: scale(1.002);
  }

  .table-enhanced tbody td {
    padding: 16px 18px;
    font-size: 14px;
    color: #2d3748;
    vertical-align: middle;
    border: none;
  }

  .table-enhanced tbody td:first-child {
    padding-left: 24px;
  }

  /* Row number badge */
  .row-number {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    color: #4a5568;
  }

  /* Customer Info Cell */
  .customer-info {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .customer-avatar {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
  }

  .avatar-gradient-1 {
    background: linear-gradient(135deg, #667eea, #764ba2);
  }

  .avatar-gradient-2 {
    background: linear-gradient(135deg, #f093fb, #f5576c);
  }

  .avatar-gradient-3 {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
  }

  .avatar-gradient-4 {
    background: linear-gradient(135deg, #43e97b, #38f9d7);
  }

  .avatar-gradient-5 {
    background: linear-gradient(135deg, #fa709a, #fee140);
  }

  .customer-name {
    font-weight: 600;
    color: #2d3748;
    font-size: 14px;
  }

  /* Mobile Badge */
  .mobile-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f0fdf4;
    color: #166534;
    padding: 5px 12px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 500;
  }

  .mobile-badge i {
    font-size: 14px;
  }

  /* Date Display */
  .date-display {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .date-icon {
    width: 36px;
    height: 36px;
    background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #e53e3e;
    font-size: 16px;
  }

  .date-text {
    font-size: 13px;
    color: #4a5568;
    font-weight: 500;
  }

  /* Location Cell */
  .location-cell {
    display: flex;
    align-items: center;
    gap: 8px;
    max-width: 200px;
  }

  .location-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    flex-shrink: 0;
  }

  .location-dot.from {
    background: #48bb78;
    box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.2);
  }

  .location-dot.to {
    background: #e53e3e;
    box-shadow: 0 0 0 3px rgba(229, 62, 62, 0.2);
  }

  .location-text {
    font-size: 13px;
    color: #4a5568;
    font-weight: 500;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  /* Status Badge Enhanced */
  .status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.3px;
    text-transform: uppercase;
  }

  .status-badge.completed {
    background: linear-gradient(135deg, #f0fff4 0%, #c6f6d5 100%);
    color: #22543d;
    border: 1px solid rgba(72, 187, 120, 0.3);
  }

  .status-badge.running {
    background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
    color: #92400e;
    border: 1px solid rgba(245, 158, 11, 0.3);
    animation: pulse-status 2s infinite;
  }

  .status-badge .status-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
  }

  .status-badge.completed .status-dot {
    background: #48bb78;
  }

  .status-badge.running .status-dot {
    background: #f59e0b;
    animation: blink 1.2s infinite;
  }

  @keyframes blink {

    0%,
    100% {
      opacity: 1;
    }

    50% {
      opacity: 0.3;
    }
  }

  @keyframes pulse-status {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.2);
    }

    50% {
      box-shadow: 0 0 0 6px rgba(245, 158, 11, 0);
    }
  }

  /* View Details Button */
  .btn-view-details {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 10px;
    padding: 8px 20px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    white-space: nowrap;
  }

  .btn-view-details:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.45);
    color: #fff;
  }

  .btn-view-details:active {
    transform: translateY(0);
  }

  .btn-view-details i {
    font-size: 14px;
    transition: transform 0.3s;
  }

  .btn-view-details:hover i {
    transform: translateX(3px);
  }

  /* Empty State */
  .empty-state {
    text-align: center;
    padding: 60px 30px;
  }

  .empty-state-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, #f7f8fc 0%, #edf2f7 100%);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    color: #a0aec0;
    margin-bottom: 20px;
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-8px);
    }
  }

  .empty-state h6 {
    color: #4a5568;
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 8px;
  }

  .empty-state p {
    color: #a0aec0;
    font-size: 14px;
    margin: 0;
  }

  /* Error State */
  .error-state {
    text-align: center;
    padding: 50px 30px;
  }

  .error-state-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    color: #e53e3e;
    margin-bottom: 16px;
  }

  /* Pagination Enhanced */
  .pagination-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0 5px;
    flex-wrap: wrap;
    gap: 15px;
  }

  .pagination-info {
    font-size: 13px;
    color: #718096;
    font-weight: 500;
  }

  .pagination-info strong {
    color: #2d3748;
  }

  .pagination-enhanced {
    display: flex;
    gap: 6px;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .pagination-enhanced .page-item .page-link {
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 8px 15px;
    font-size: 13px;
    font-weight: 600;
    color: #4a5568;
    background: #fff;
    transition: all 0.3s ease;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 4px;
    min-width: 40px;
    justify-content: center;
  }

  .pagination-enhanced .page-item .page-link:hover {
    border-color: #667eea;
    color: #667eea;
    background: #f8f9ff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
  }

  .pagination-enhanced .page-item.active .page-link {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-color: transparent;
    color: #fff;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
  }

  .pagination-enhanced .page-item.disabled .page-link {
    opacity: 0.4;
    pointer-events: none;
  }

  /* Loading Skeleton */
  .skeleton-row td {
    padding: 16px 18px;
  }

  .skeleton {
    background: linear-gradient(90deg, #edf2f7 25%, #e2e8f0 50%, #edf2f7 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
    border-radius: 8px;
    height: 18px;
    display: inline-block;
  }

  @keyframes shimmer {
    0% {
      background-position: 200% 0;
    }

    100% {
      background-position: -200% 0;
    }
  }

  /* Responsive */
  @media (max-width: 768px) {
    .trips-card-header {
      padding: 22px 20px;
    }

    .trips-card-body {
      padding: 20px 16px;
    }

    .trips-toolbar {
      flex-direction: column;
      align-items: stretch;
    }

    .search-box {
      max-width: 100%;
    }

    .toolbar-actions {
      justify-content: flex-end;
    }

    .stats-pills {
      display: none;
    }

    .table-enhanced tbody td,
    .table-enhanced thead th {
      padding: 12px 10px;
      font-size: 12px;
    }

    .pagination-wrapper {
      flex-direction: column;
      align-items: center;
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

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-15px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .row-animate {
    animation: fadeInUp 0.35s ease forwards;
    opacity: 0;
  }

  /* Highlight search term */
  .highlight {
    background: #fef3c7;
    padding: 1px 4px;
    border-radius: 4px;
    font-weight: 600;
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
              <li class="breadcrumb-item active" aria-current="page">Driver Trips</li>
            </ol>
          </nav>
        </div>
        <a href="<?= base_url('driver'); ?>" class="btn-back-list">
          <i class="bx bx-arrow-back"></i> Back to Drivers
        </a>
      </div>
    </div>

    <!-- Enhanced Card -->
    <div class="trips-card card">

      <!-- Card Header -->
      <div class="trips-card-header">
        <div class="header-content">
          <div class="header-left">
            <div class="header-icon-box">
              <i class="bx bx-trip"></i>
            </div>
            <div>
              <h5>Driver Trips</h5>
              <div class="header-subtitle">
                <i class="bx bx-list-ul me-1"></i> View and manage all trips for this driver
              </div>
            </div>
          </div>

          <div class="stats-pills">
            <div class="stat-pill">
              <i class="bx bx-bar-chart-alt-2"></i> Total
              <span class="stat-count" id="statTotal">--</span>
            </div>
            <div class="stat-pill">
              <i class="bx bx-check-circle"></i> Completed
              <span class="stat-count" id="statCompleted">--</span>
            </div>
            <div class="stat-pill">
              <i class="bx bx-loader-circle"></i> Running
              <span class="stat-count" id="statRunning">--</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card Body -->
      <div class="trips-card-body">

        <!-- Toolbar -->
        <div class="trips-toolbar">
          <div class="search-box">
            <input type="text" id="search-trip" placeholder="Search by name, mobile, location..." autocomplete="off">
            <i class="bx bx-search search-icon"></i>
            <button class="clear-search" id="clearSearch" title="Clear search">
              <i class="bx bx-x"></i>
            </button>
          </div>

          <div class="toolbar-actions">
            <button class="btn-filter" data-filter="all" title="All Trips">
              <i class="bx bx-list-ul"></i> All
            </button>
            <button class="btn-filter" data-filter="completed" title="Completed">
              <i class="bx bx-check-circle"></i> Completed
            </button>
            <button class="btn-filter" data-filter="running" title="Running">
              <i class="bx bx-loader-circle"></i> Running
            </button>
          </div>
        </div>

        <!-- Table -->
        <div class="table-wrapper">
          <div class="table-responsive">
            <table class="table table-enhanced mb-0">
              <thead>
                <tr>
                  <th><i class="bx bx-hash"></i> #</th>
                  <th><i class="bx bx-user"></i> Customer</th>
                  <th><i class="bx bx-phone"></i> Mobile</th>
                  <th><i class="bx bx-calendar"></i> Trip Date</th>
                  <th><i class="bx bx-map"></i> From</th>
                  <th><i class="bx bx-map-pin"></i> To</th>
                  <th><i class="bx bx-stats"></i> Status</th>
                  <th><i class="bx bx-dots-horizontal-rounded"></i> Action</th>
                </tr>
              </thead>
              <tbody id="trip">
                <!-- Skeleton Loading -->
                <tr class="skeleton-row">
                  <td>
                    <div class="skeleton" style="width:30px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:130px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:100px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:90px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:110px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:110px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:80px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:95px;"></div>
                  </td>
                </tr>
                <tr class="skeleton-row">
                  <td>
                    <div class="skeleton" style="width:30px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:120px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:100px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:90px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:100px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:100px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:70px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:95px;"></div>
                  </td>
                </tr>
                <tr class="skeleton-row">
                  <td>
                    <div class="skeleton" style="width:30px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:140px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:100px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:90px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:120px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:90px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:85px;"></div>
                  </td>
                  <td>
                    <div class="skeleton" style="width:95px;"></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
          <div class="pagination-info" id="paginationInfo"></div>
          <ul class="pagination-enhanced" id="pagination"></ul>
        </div>

      </div>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  let currentFilter = 'all';
  let debounceTimer;

  const avatarGradients = [
    'avatar-gradient-1', 'avatar-gradient-2', 'avatar-gradient-3',
    'avatar-gradient-4', 'avatar-gradient-5'
  ];

  function getInitials(name) {
    if (!name) return '?';
    const parts = name.trim().split(' ');
    if (parts.length >= 2) return (parts[0][0] + parts[1][0]).toUpperCase();
    return parts[0][0].toUpperCase();
  }

  function getAvatarClass(index) {
    return avatarGradients[index % avatarGradients.length];
  }

  function formatDate(dateStr) {
    if (!dateStr) return '--';
    const d = new Date(dateStr);
    if (isNaN(d)) return dateStr;
    const options = { day: '2-digit', month: 'short', year: 'numeric' };
    return d.toLocaleDateString('en-IN', options);
  }

  function loadTrips(page = 1, search = '') {
    const user_id = <?= $id ?>;

    $.ajax({
      url: '<?= base_url("driver/fetch_trips_ajax") ?>',
      method: 'GET',
      data: { page: page, search: search, user_id: user_id, filter: currentFilter },
      dataType: 'json',
      beforeSend: function () {
        // Show skeleton loading
        let skeleton = '';
        for (let i = 0; i < 5; i++) {
          skeleton += `<tr class="skeleton-row">
          <td><div class="skeleton" style="width:30px;"></div></td>
          <td><div class="skeleton" style="width:${110 + Math.random() * 40}px;"></div></td>
          <td><div class="skeleton" style="width:100px;"></div></td>
          <td><div class="skeleton" style="width:90px;"></div></td>
          <td><div class="skeleton" style="width:${90 + Math.random() * 30}px;"></div></td>
          <td><div class="skeleton" style="width:${90 + Math.random() * 30}px;"></div></td>
          <td><div class="skeleton" style="width:${70 + Math.random() * 20}px;"></div></td>
          <td><div class="skeleton" style="width:95px;"></div></td>
        </tr>`;
        }
        $('#trip').html(skeleton);
      },
      success: function (res) {
        let tbody = '';
        let completedCount = 0;
        let runningCount = 0;

        if (res.trips && res.trips.length > 0) {
          res.trips.forEach((trip, index) => {
            const isCompleted = trip.status === 'completed';
            if (isCompleted) completedCount++;
            else runningCount++;

            const statusHtml = isCompleted
              ? `<span class="status-badge completed">
                 <span class="status-dot"></span> Completed
               </span>`
              : `<span class="status-badge running">
                 <span class="status-dot"></span> Running
               </span>`;

            const rowNum = (page - 1) * 10 + index + 1;
            const initials = getInitials(trip.customer_name);
            const avatarClass = getAvatarClass(index);

            tbody += `<tr class="row-animate" style="animation-delay: ${index * 0.05}s">
            <td>
              <span class="row-number">${rowNum}</span>
            </td>
            <td>
              <div class="customer-info">
                <div class="customer-avatar ${avatarClass}">${initials}</div>
                <span class="customer-name">${trip.customer_name || '--'}</span>
              </div>
            </td>
            <td>
              <span class="mobile-badge">
                <i class="bx bx-phone-call"></i>
                ${trip.customer_mobile || '--'}
              </span>
            </td>
            <td>
              <div class="date-display">
                <div class="date-icon"><i class="bx bx-calendar-event"></i></div>
                <span class="date-text">${formatDate(trip.trip_date)}</span>
              </div>
            </td>
            <td>
              <div class="location-cell">
                <span class="location-dot from"></span>
                <span class="location-text" title="${trip.from_location || ''}">${trip.from_location || '--'}</span>
              </div>
            </td>
            <td>
              <div class="location-cell">
                <span class="location-dot to"></span>
                <span class="location-text" title="${trip.to_location || ''}">${trip.to_location || '--'}</span>
              </div>
            </td>
            <td>${statusHtml}</td>
            <td>
              <a href="<?= base_url('driver_trip_details/') ?>${trip.id}" class="btn-view-details">
                <i class="bx bx-right-arrow-alt"></i> Details
              </a>
            </td>
          </tr>`;
          });
        } else {
          tbody = `<tr>
          <td colspan="8">
            <div class="empty-state">
              <div class="empty-state-icon">
                <i class="bx bx-trip"></i>
              </div>
              <h6>No Trips Found</h6>
              <p>There are no trips matching your search criteria for this driver.</p>
            </div>
          </td>
        </tr>`;
        }

        $('#trip').html(tbody);

        // Update stats
        const totalTrips = res.total_records || (completedCount + runningCount);
        $('#statTotal').text(totalTrips);
        $('#statCompleted').text(res.completed_count || completedCount);
        $('#statRunning').text(res.running_count || runningCount);

        // Pagination info
        if (res.trips && res.trips.length > 0) {
          const start = (res.current_page - 1) * 10 + 1;
          const end = start + res.trips.length - 1;
          $('#paginationInfo').html(
            `Showing <strong>${start}</strong> to <strong>${end}</strong> of <strong>${totalTrips}</strong> trips`
          );
        } else {
          $('#paginationInfo').html('');
        }

        // Pagination buttons
        let pagination = '';
        if (res.total_pages > 1) {
          // Previous
          pagination += `<li class="page-item ${res.current_page <= 1 ? 'disabled' : ''}">
          <a class="page-link" href="#" data-page="${res.current_page - 1}">
            <i class="bx bx-chevron-left"></i>
          </a>
        </li>`;

          let start = Math.max(1, res.current_page - 2);
          let end = Math.min(start + 4, res.total_pages);
          if (end - start < 4) start = Math.max(1, end - 4);

          if (start > 1) {
            pagination += `<li class="page-item">
            <a class="page-link" href="#" data-page="1">1</a>
          </li>`;
            if (start > 2) {
              pagination += `<li class="page-item disabled">
              <span class="page-link">...</span>
            </li>`;
            }
          }

          for (let i = start; i <= end; i++) {
            pagination += `<li class="page-item ${i == res.current_page ? 'active' : ''}">
            <a class="page-link" href="#" data-page="${i}">${i}</a>
          </li>`;
          }

          if (end < res.total_pages) {
            if (end < res.total_pages - 1) {
              pagination += `<li class="page-item disabled">
              <span class="page-link">...</span>
            </li>`;
            }
            pagination += `<li class="page-item">
            <a class="page-link" href="#" data-page="${res.total_pages}">${res.total_pages}</a>
          </li>`;
          }

          // Next
          pagination += `<li class="page-item ${res.current_page >= res.total_pages ? 'disabled' : ''}">
          <a class="page-link" href="#" data-page="${res.current_page + 1}">
            <i class="bx bx-chevron-right"></i>
          </a>
        </li>`;
        }

        $('#pagination').html(pagination);
      },
      error: function () {
        $('#trip').html(`<tr>
        <td colspan="8">
          <div class="error-state">
            <div class="error-state-icon">
              <i class="bx bx-error-circle"></i>
            </div>
            <h6 class="text-danger mb-1">Error Loading Trips</h6>
            <p class="text-muted mb-3">Something went wrong. Please try again.</p>
            <button class="btn btn-sm btn-outline-danger rounded-pill px-4" onclick="loadTrips()">
              <i class="bx bx-refresh me-1"></i> Retry
            </button>
          </div>
        </td>
      </tr>`);
      }
    });
  }

  // Initial load
  loadTrips();

  // Pagination click
  $(document).on('click', '.pagination-enhanced .page-link', function (e) {
    e.preventDefault();
    const page = $(this).data('page');
    if (!page) return;
    const search = $('#search-trip').val().trim();
    loadTrips(page, search);

    // Smooth scroll to top of table
    $('html, body').animate({
      scrollTop: $('.trips-card').offset().top - 20
    }, 300);
  });

  // Debounced search
  $('#search-trip').on('input', function () {
    const val = $(this).val().trim();

    // Show/hide clear button
    if (val.length > 0) {
      $('#clearSearch').fadeIn(200);
    } else {
      $('#clearSearch').fadeOut(200);
    }

    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(function () {
      loadTrips(1, val);
    }, 350);
  });

  // Clear search
  $('#clearSearch').on('click', function () {
    $('#search-trip').val('').focus();
    $(this).fadeOut(200);
    loadTrips(1, '');
  });

  // Filter buttons
  $('.btn-filter').on('click', function () {
    $('.btn-filter').removeClass('active');
    $(this).addClass('active');
    currentFilter = $(this).data('filter');
    const search = $('#search-trip').val().trim();
    loadTrips(1, search);
  });

  // Set default filter active
  $('.btn-filter[data-filter="all"]').addClass('active');

  // Keyboard shortcut: Ctrl+K to focus search
  $(document).on('keydown', function (e) {
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
      e.preventDefault();
      $('#search-trip').focus();
    }
  });
</script>