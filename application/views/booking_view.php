    <style>
        /* ===== Professional All Trips Page Styles ===== */
        .trips-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Page Header */
        .page-header-trips {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 50%, #1e40af 100%);
            border-radius: 16px;
            padding: 28px 32px;
            margin-bottom: 28px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(59, 130, 246, 0.3);
        }

        .page-header-trips::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -15%;
            width: 320px;
            height: 320px;
            background: rgba(255, 255, 255, 0.07);
            border-radius: 50%;
        }

        .page-header-trips::after {
            content: '';
            position: absolute;
            bottom: -60%;
            left: -8%;
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 50%;
        }

        .page-header-trips .header-content {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .page-header-trips .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .page-header-trips .header-icon {
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

        .page-header-trips h4 {
            color: #fff;
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0;
            letter-spacing: -0.3px;
        }

        .page-header-trips p {
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

        /* Stats Row */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: #fff;
            border-radius: 14px;
            padding: 20px 22px;
            border: 1px solid #e8ecf1;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s ease;
            cursor: default;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .stat-card .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .stat-card .stat-icon.total {
            background: #eff6ff;
            color: #3b82f6;
        }

        .stat-card .stat-icon.running {
            background: #fef3c7;
            color: #f59e0b;
        }

        .stat-card .stat-icon.completed {
            background: #ecfdf5;
            color: #10b981;
        }

        .stat-card .stat-icon.fixcab {
            background: #f3e8ff;
            color: #8b5cf6;
        }

        .stat-card .stat-info .stat-number {
            font-size: 1.4rem;
            font-weight: 800;
            color: #1a1d29;
            line-height: 1.2;
        }

        .stat-card .stat-info .stat-label {
            font-size: 0.78rem;
            color: #8b95a5;
            font-weight: 500;
            margin-top: 2px;
        }

        /* Table Card */
        .table-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid #e8ecf1;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        .table-card-header {
            padding: 24px 28px;
            border-bottom: 1px solid #f0f2f5;
            background: #fafbfc;
        }

        .table-card-header .header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 20px;
        }

        .table-card-header .header-title {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .table-card-header .header-title .icon-box {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            flex-shrink: 0;
        }

        .table-card-header .header-title h5 {
            margin: 0;
            font-weight: 700;
            font-size: 1.1rem;
            color: #1a1d29;
        }

        .table-card-header .header-title p {
            margin: 2px 0 0;
            font-size: 0.82rem;
            color: #8b95a5;
        }

        .table-card-header .result-count {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #3b82f6;
        }

        .table-card-header .result-count i {
            font-size: 14px;
        }

        /* Filters */
        .filters-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-box {
            position: relative;
            flex: 1;
            min-width: 240px;
            max-width: 360px;
        }

        .search-box .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 18px;
            pointer-events: none;
            transition: color 0.3s;
        }

        .search-box input {
            width: 100%;
            padding: 11px 16px 11px 42px;
            font-size: 0.9rem;
            color: #1a1d29;
            background: #fff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            transition: all 0.3s ease;
            outline: none;
        }

        .search-box input::placeholder {
            color: #9ca3af;
        }

        .search-box input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        .search-box input:focus~.search-icon {
            color: #3b82f6;
        }

        .filter-select {
            padding: 11px 40px 11px 16px;
            font-size: 0.9rem;
            color: #1a1d29;
            background: #fff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            transition: all 0.3s ease;
            outline: none;
            cursor: pointer;
            min-width: 160px;
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 18px;
        }

        .filter-select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        .btn-refresh {
            padding: 11px 16px;
            background: #fff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            color: #6b7280;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-refresh:hover {
            border-color: #3b82f6;
            color: #3b82f6;
            background: #eff6ff;
        }

        .btn-refresh.spinning i {
            animation: spin 0.8s linear;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        /* Table Body */
        .table-card-body {
            padding: 0;
        }

        .trips-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .trips-table thead th {
            background: #f8fafc;
            padding: 14px 18px;
            font-size: 0.78rem;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            border-bottom: 2px solid #e2e8f0;
            white-space: nowrap;
            position: sticky;
            top: 0;
            z-index: 5;
        }

        .trips-table thead th:first-child {
            padding-left: 28px;
        }

        .trips-table thead th:last-child {
            padding-right: 28px;
        }

        .trips-table tbody tr {
            transition: all 0.2s ease;
        }

        .trips-table tbody tr:hover {
            background: #f8fafc;
        }

        .trips-table tbody td {
            padding: 16px 18px;
            font-size: 0.9rem;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .trips-table tbody td:first-child {
            padding-left: 28px;
        }

        .trips-table tbody td:last-child {
            padding-right: 28px;
        }

        .trips-table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Row Number */
        .row-number {
            width: 32px;
            height: 32px;
            background: #f1f5f9;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
            color: #64748b;
        }

        /* Driver Info */
        .driver-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .driver-avatar {
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
            text-transform: uppercase;
        }

        .driver-info .driver-name {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.9rem;
        }

        /* Vehicle Badge */
        .vehicle-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.82rem;
            font-weight: 500;
            color: #475569;
        }

        .vehicle-badge i {
            color: #3b82f6;
            font-size: 14px;
        }

        /* Location */
        .location-text {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.88rem;
            color: #475569;
        }

        .location-text i {
            font-size: 16px;
            color: #94a3b8;
            flex-shrink: 0;
        }

        /* Date */
        .date-display {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .date-display .date-icon {
            width: 34px;
            height: 34px;
            background: #eff6ff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3b82f6;
            font-size: 15px;
            flex-shrink: 0;
        }

        .date-display span {
            font-size: 0.85rem;
            color: #475569;
            font-weight: 500;
        }

        /* Status Badges */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .status-badge.completed {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid #a7f3d0;
        }

        .status-badge.running {
            background: #fef3c7;
            color: #d97706;
            border: 1px solid #fde68a;
        }

        .status-badge .pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .status-badge.completed .pulse-dot {
            background: #10b981;
        }

        .status-badge.running .pulse-dot {
            background: #f59e0b;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.8);
            }
        }

        /* Trip Type Badge */
        .trip-type-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 0.78rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .trip-type-badge.fixcab {
            background: #f3e8ff;
            color: #7c3aed;
            border: 1px solid #ddd6fe;
        }

        .trip-type-badge.oncall {
            background: #fef3c7;
            color: #b45309;
            border: 1px solid #fde68a;
        }

        .trip-type-badge.default {
            background: #f1f5f9;
            color: #475569;
            border: 1px solid #e2e8f0;
        }

        .trip-type-badge i {
            font-size: 13px;
        }

        /* Action Buttons */
        .btn-view {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 18px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-view:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.35);
            color: #fff;
        }

        .btn-view i {
            font-size: 14px;
        }

        .btn-delete {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 10px;
            color: #ef4444;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-delete:hover {
            background: #ef4444;
            color: #fff;
            border-color: #ef4444;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
        }

        .btn-live {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 10px;
            color: #3b82f6;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-live:hover {
            background: #3b82f6;
            color: #fff;
            border-color: #3b82f6;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.3);
        }

        .live-modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.6);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .live-modal-overlay.active {
            display: flex;
        }

        .live-modal {
            background: #fff;
            border-radius: 16px;
            width: 90%;
            max-width: 700px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .live-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 22px;
            border-bottom: 1px solid #f0f2f5;
        }

        .live-modal-header h5 {
            margin: 0;
            font-weight: 700;
            color: #1a1d29;
            font-size: 1.05rem;
        }

        .live-modal-close {
            background: #f1f5f9;
            border: none;
            width: 34px;
            height: 34px;
            border-radius: 8px;
            font-size: 18px;
            color: #64748b;
            cursor: pointer;
        }

        .live-modal-status {
            padding: 10px 22px;
            font-size: 0.85rem;
            color: #475569;
            background: #fafbfc;
            border-bottom: 1px solid #f0f2f5;
        }

        .actions-cell {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state .empty-icon {
            width: 80px;
            height: 80px;
            background: #f1f5f9;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: #94a3b8;
            margin: 0 auto 20px;
        }

        .empty-state h6 {
            font-weight: 700;
            color: #334155;
            font-size: 1.05rem;
            margin-bottom: 8px;
        }

        .empty-state p {
            color: #94a3b8;
            font-size: 0.88rem;
            margin: 0;
        }

        /* Loading Skeleton */
        .skeleton-row td {
            padding: 16px 18px !important;
        }

        .skeleton-block {
            height: 18px;
            background: linear-gradient(90deg, #f1f5f9 25%, #e2e8f0 50%, #f1f5f9 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            border-radius: 6px;
        }

        .skeleton-block.sm {
            width: 32px;
            height: 32px;
            border-radius: 8px;
        }

        .skeleton-block.md {
            width: 120px;
        }

        .skeleton-block.lg {
            width: 160px;
        }

        .skeleton-block.badge {
            width: 80px;
            height: 28px;
            border-radius: 14px;
        }

        .skeleton-block.btn-sk {
            width: 110px;
            height: 34px;
            border-radius: 10px;
        }

        .skeleton-block.icon-sk {
            width: 36px;
            height: 36px;
            border-radius: 10px;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        /* Modern Pagination */
        .pagination-modern {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 24px 28px;
            border-top: 1px solid #f1f5f9;
            flex-wrap: wrap;
        }

        .pagination-modern .page-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            height: 40px;
            padding: 0 14px;
            background: #fff;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            color: #64748b;
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .pagination-modern .page-btn:hover {
            background: #f8fafc;
            border-color: #3b82f6;
            color: #3b82f6;
        }

        .pagination-modern .page-btn.active {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-color: transparent;
            color: #fff;
            box-shadow: 0 4px 14px rgba(59, 130, 246, 0.3);
        }

        .pagination-modern .page-btn.nav-btn {
            gap: 4px;
            font-size: 0.82rem;
        }

        .pagination-modern .page-btn.nav-btn i {
            font-size: 16px;
        }

        .pagination-modern .page-btn:disabled,
        .pagination-modern .page-btn.disabled {
            opacity: 0.4;
            cursor: not-allowed;
            pointer-events: none;
        }

        /* Route Arrow */
        .route-arrow {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: #475569;
        }

        .route-arrow .from,
        .route-arrow .to {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .route-arrow .arrow-icon {
            color: #3b82f6;
            font-size: 18px;
            flex-shrink: 0;
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
        @media (max-width: 992px) {
            .stats-row {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .page-header-trips {
                padding: 22px 20px;
                border-radius: 12px;
            }

            .page-header-trips h4 {
                font-size: 1.2rem;
            }

            .table-card-header {
                padding: 20px;
            }

            .filters-row {
                flex-direction: column;
            }

            .search-box {
                max-width: 100%;
                min-width: unset;
            }

            .filter-select {
                width: 100%;
            }

            .header-content {
                flex-direction: column;
                align-items: flex-start !important;
            }

            .stats-row {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }

            .stat-card {
                padding: 14px 16px;
            }

            .stat-card .stat-info .stat-number {
                font-size: 1.1rem;
            }

            .trips-table thead th,
            .trips-table tbody td {
                padding: 12px 14px;
            }

            .trips-table thead th:first-child,
            .trips-table tbody td:first-child {
                padding-left: 20px;
            }
        }

        @media (max-width: 576px) {
            .stats-row {
                grid-template-columns: 1fr;
            }

            .header-top {
                flex-direction: column;
                align-items: flex-start !important;
            }
        }
    </style>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="trips-wrapper">

                <!-- Page Header -->
                <div class="page-header-trips animate-in">
                    <div class="header-content">
                        <div class="header-left">
                            <div class="header-icon">
                                <i class="bx bxs-car"></i>
                            </div>
                            <div>
                                <h4>All Trips</h4>
                                <p>Monitor and manage all trip records</p>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-modern">
                        <a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i> Dashboard</a>
                        <span class="separator"><i class="bx bx-chevron-right"></i></span>
                        <span class="current">All Trips</span>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="stats-row animate-in">
                    <div class="stat-card">
                        <div class="stat-icon total"><i class="bx bx-trip"></i></div>
                        <div class="stat-info">
                            <div class="stat-number" id="statTotal">--</div>
                            <div class="stat-label">Total Trips</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon running"><i class="bx bx-loader-circle"></i></div>
                        <div class="stat-info">
                            <div class="stat-number" id="statRunning">--</div>
                            <div class="stat-label">Running</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon completed"><i class="bx bx-check-double"></i></div>
                        <div class="stat-info">
                            <div class="stat-number" id="statCompleted">--</div>
                            <div class="stat-label">Completed</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon fixcab"><i class="bx bx-car"></i></div>
                        <div class="stat-info">
                            <div class="stat-number" id="statFixcab">--</div>
                            <div class="stat-label">Fix Cab</div>
                        </div>
                    </div>
                </div>

                <!-- Table Card -->
                <div class="table-card animate-in">
                    <div class="table-card-header">
                        <div class="header-top">
                            <div class="header-title">
                                <div class="icon-box"><i class="bx bx-list-ul"></i></div>
                                <div>
                                    <h5>Trip Records</h5>
                                    <p>View, search, and manage all trips</p>
                                </div>
                            </div>
                            <div class="result-count" id="resultCount">
                                <i class="bx bx-data"></i>
                                <span>Loading...</span>
                            </div>
                        </div>

                        <div class="filters-row">
                            <div class="search-box">
                                <i class="bx bx-search search-icon"></i>
                                <input type="text" id="search-trip" placeholder="Search by driver, vehicle, location...">
                            </div>
                            <select id="trip-filter" class="filter-select">
                                <option value="">All Trip Types</option>
                                <option value="fix">🚕 Fix Cab</option>
                                <option value="oncall">📞 On Call</option>
                            </select>
                            <button class="btn-refresh" id="refreshBtn" title="Refresh">
                                <i class="bx bx-refresh"></i>
                            </button>
                        </div>
                    </div>

                    <div class="table-card-body">
                        <div class="table-responsive">
                            <table class="trips-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Driver</th>
                                        <th>Vehicle</th>
                                        <th>Trip Date</th>
                                        <th>Route</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="trip">
                                    <!-- Skeleton Loading -->
                                    <tr class="skeleton-row">
                                        <td>
                                            <div class="skeleton-block sm"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block lg"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block md"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block md"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block lg"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block badge"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block badge"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block btn-sk"></div>
                                        </td>
                                    </tr>
                                    <tr class="skeleton-row">
                                        <td>
                                            <div class="skeleton-block sm"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block lg"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block md"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block md"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block lg"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block badge"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block badge"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block btn-sk"></div>
                                        </td>
                                    </tr>
                                    <tr class="skeleton-row">
                                        <td>
                                            <div class="skeleton-block sm"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block lg"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block md"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block md"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block lg"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block badge"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block badge"></div>
                                        </td>
                                        <td>
                                            <div class="skeleton-block btn-sk"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-modern" id="pagination"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <div class="live-modal-overlay" id="liveModalOverlay">
        <div class="live-modal">
            <div class="live-modal-header">
                <h5><i class="bx bx-current-location"></i> Live Location — Trip #<span id="liveTripId"></span></h5>
                <button class="live-modal-close" onclick="closeLiveLocation()"><i class="bx bx-x"></i></button>
            </div>
            <div class="live-modal-status" id="liveStatusText">Loading...</div>
            <div id="liveMap" style="height: 450px; width: 100%;"></div>
        </div>
    </div> -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let currentPage = 1;
        const avatarColors = ['#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#ec4899', '#06b6d4', '#f97316'];

        function getAvatarColor(name) {
            let hash = 0;
            for (let i = 0; i < (name || '').length; i++) {
                hash = name.charCodeAt(i) + ((hash << 5) - hash);
            }
            return avatarColors[Math.abs(hash) % avatarColors.length];
        }

        function getInitials(name) {
            if (!name) return '?';
            const parts = name.trim().split(' ');
            return parts.length > 1 ?
                (parts[0][0] + parts[1][0]).toUpperCase() :
                parts[0].substring(0, 2).toUpperCase();
        }

        function formatDate(dateStr) {
            if (!dateStr || dateStr === '-') return '-';
            const d = new Date(dateStr);
            if (isNaN(d)) return dateStr;
            return d.toLocaleDateString('en-US', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            });
        }

        function getTripTypeBadge(type) {
            if (!type) {
                return '<span class="trip-type-badge default"><i class="bx bx-minus"></i> N/A</span>';
            }

            const t = type.toLowerCase().trim();

            if (t === 'fix') {
                return '<span class="trip-type-badge fixcab"><i class="bx bx-car"></i> Fix Cab</span>';
            }

            if (t === 'oncall') {
                return '<span class="trip-type-badge oncall"><i class="bx bx-phone-call"></i> On Call</span>';
            }

            return `<span class="trip-type-badge default"><i class="bx bx-category"></i> ${type}</span>`;
        }

        function loadTrips(page = 1, search = '') {
            const filter = $('#trip-filter').val();

            $.ajax({
                url: '<?= base_url("driver/fetch_trips") ?>',
                type: 'GET',
                data: {
                    page: page,
                    search: search,
                    filter: filter
                },
                dataType: 'json',
                success: function(res) {
                    if (res.status && Array.isArray(res.data) && res.data.length > 0) {
                        let tbody = '';
                        let runningCount = 0,
                            completedCount = 0,
                            fixcabCount = 0;

                        res.data.forEach((trip, index) => {
                            const isCompleted = trip.status === 'completed';
                            if (isCompleted) completedCount++;
                            else runningCount++;
                            if ((trip.trip_type || '').toLowerCase() === 'fix') fixcabCount++;

                            const statusHtml = isCompleted ?
                                '<span class="status-badge completed"><span class="pulse-dot"></span> Completed</span>' :
                                '<span class="status-badge running"><span class="pulse-dot"></span> Running</span>';

                            const initials = getInitials(trip.driver_name);
                            const color = getAvatarColor(trip.driver_name);

                            tbody += `<tr>
                <td><span class="row-number">${(page - 1) * 10 + index + 1}</span></td>
                <td>
                <div class="driver-info">
                    <div class="driver-avatar" style="background:${color}">${initials}</div>
                    <span class="driver-name">${trip.driver_name || '-'}</span>
                </div>
                </td>
                <td>
                <span class="vehicle-badge">
                    <i class="bx bx-car"></i>
                    ${trip.vehical_name || '-'}
                </span>
                </td>
                <td>
                <div class="date-display">
                    <div class="date-icon"><i class="bx bx-calendar"></i></div>
                    <span>${formatDate(trip.trip_date)}</span>
                </div>
                </td>
                <td>
                <div class="route-arrow">
                    <span class="from"><i class="bx bx-radio-circle-marked" style="color:#10b981"></i> ${trip.from_location || '-'}</span>
                    <i class="bx bx-right-arrow-alt arrow-icon"></i>
                    <span class="to"><i class="bx bx-map" style="color:#ef4444"></i> ${trip.to_location || '-'}</span>
                </div>
                </td>
                <td>${statusHtml}</td>
                <td>${getTripTypeBadge(trip.trip_type)}</td>
                <td>
                <div class="actions-cell">
                    <a href="<?= base_url('trip_details/') ?>${trip.id}" class="btn-view">
                    <i class="bx bx-show"></i> View
                    </a>
                    <a href="<?= base_url('driver/live_location/') ?>${trip.id}" class="btn-live" title="Live Location">
                    <i class="bx bx-current-location"></i>
                    </a>
                    <a class="btn-delete delete-trip" data-id="${trip.id}" title="Delete Trip">
                    <i class="bx bx-trash"></i>
                    </a>
                </div>
                </td>
            </tr>`;
                        });

                        $('#trip').html(tbody);
                        renderPagination(res.total_pages || 1, res.current_page || 1);

                        const total = res.total_records || res.data.length;
                        $('#statTotal').text(total);
                        $('#statRunning').text(runningCount);
                        $('#statCompleted').text(completedCount);
                        $('#statFixcab').text(fixcabCount);
                        $('#resultCount span').text(`${total} record${total !== 1 ? 's' : ''} found`);

                    } else {
                        $('#trip').html(`
            <tr>
                <td colspan="8">
                <div class="empty-state">
                    <div class="empty-icon"><i class="bx bx-car"></i></div>
                    <h6>No Trips Found</h6>
                    <p>There are no trip records matching your criteria</p>
                </div>
                </td>
            </tr>
            `);
                        $('#pagination').html('');
                        $('#statTotal').text('0');
                        $('#statRunning').text('0');
                        $('#statCompleted').text('0');
                        $('#statFixcab').text('0');
                        $('#resultCount span').text('0 records found');
                    }
                },
                error: function() {
                    $('#trip').html(`
            <tr>
            <td colspan="8">
                <div class="empty-state">
                <div class="empty-icon" style="background:#fef2f2;color:#ef4444"><i class="bx bx-error"></i></div>
                <h6>Error Loading Data</h6>
                <p>Something went wrong. Please try again later.</p>
                </div>
            </td>
            </tr>
        `);
                    $('#pagination').html('');
                }
            });
        }

        function renderPagination(totalPages, current) {
            if (totalPages <= 1) {
                $('#pagination').html('');
                return;
            }

            let html = '';

            html += `<a class="page-btn nav-btn ${current <= 1 ? 'disabled' : ''}" href="#" onclick="event.preventDefault(); loadTrips(${current - 1}, $('#search-trip').val())">
        <i class="bx bx-chevron-left"></i> Prev
    </a>`;

            let start = Math.max(1, current - 2);
            let end = Math.min(totalPages, start + 4);
            if (end - start < 4) start = Math.max(1, end - 4);

            if (start > 1) {
                html += `<a class="page-btn" href="#" onclick="event.preventDefault(); loadTrips(1, $('#search-trip').val())">1</a>`;
                if (start > 2) html += `<span class="page-btn" style="border:none;cursor:default;color:#94a3b8">...</span>`;
            }

            for (let i = start; i <= end; i++) {
                html += `<a class="page-btn ${i === current ? 'active' : ''}" href="#" onclick="event.preventDefault(); loadTrips(${i}, $('#search-trip').val())">${i}</a>`;
            }

            if (end < totalPages) {
                if (end < totalPages - 1) html += `<span class="page-btn" style="border:none;cursor:default;color:#94a3b8">...</span>`;
                html += `<a class="page-btn" href="#" onclick="event.preventDefault(); loadTrips(${totalPages}, $('#search-trip').val())">${totalPages}</a>`;
            }

            html += `<a class="page-btn nav-btn ${current >= totalPages ? 'disabled' : ''}" href="#" onclick="event.preventDefault(); loadTrips(${current + 1}, $('#search-trip').val())">
        Next <i class="bx bx-chevron-right"></i>
    </a>`;

            $('#pagination').html(html);
        }

        // Search with debounce
        let searchTimer;
        $('#search-trip').on('input', function() {
            clearTimeout(searchTimer);
            const val = $(this).val().trim();
            searchTimer = setTimeout(() => {
                currentPage = 1;
                loadTrips(1, val);
            }, 350);
        });

        // Filter change
        $('#trip-filter').on('change', function() {
            currentPage = 1;
            loadTrips(1, $('#search-trip').val().trim());
        });

        // Refresh button
        $('#refreshBtn').on('click', function() {
            const btn = $(this);
            btn.addClass('spinning');
            $('#search-trip').val('');
            $('#trip-filter').val('');
            loadTrips(1);
            setTimeout(() => btn.removeClass('spinning'), 800);
        });

        // Delete trip
        $(document).on('click', '.delete-trip', function() {
            const id = $(this).data('id');
            const row = $(this).closest('tr');

            Swal.fire({
                title: 'Delete This Trip?',
                text: "This action cannot be undone.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: '<i class="bx bx-trash"></i> Yes, Delete',
                cancelButtonText: 'Cancel',
                customClass: {
                    popup: 'rounded-4'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url("driver/delete_trip"); ?>',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        beforeSend: function() {
                            row.css({
                                opacity: 0.5,
                                pointerEvents: 'none'
                            });
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                row.fadeOut(400, function() {
                                    $(this).remove();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: 'Trip has been removed successfully.',
                                        timer: 1800,
                                        showConfirmButton: false,
                                        customClass: {
                                            popup: 'rounded-4'
                                        }
                                    });
                                    loadTrips(currentPage, $('#search-trip').val().trim());
                                });
                            } else {
                                row.css({
                                    opacity: 1,
                                    pointerEvents: 'auto'
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Failed',
                                    text: response.message,
                                    confirmButtonColor: '#3b82f6'
                                });
                            }
                        },
                        error: function() {
                            row.css({
                                opacity: 1,
                                pointerEvents: 'auto'
                            });
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Something went wrong while deleting.',
                                confirmButtonColor: '#3b82f6'
                            });
                        }
                    });
                }
            });
        });

        let liveMap = null;
        let liveMarker = null;
        let livePolyline = null;
        let livePollInterval = null;
        let currentLiveTripId = null;

        function openLiveLocation(tripId) {
            currentLiveTripId = tripId;
            $('#liveTripId').text(tripId);
            $('#liveModalOverlay').addClass('active');
            $('#liveStatusText').text('Loading...');

            if (!liveMap) {
                liveMap = L.map('liveMap', {
                    maxZoom: 20
                }).setView([22.3072, 73.1812], 13);

                // Google Maps Hybrid (Satellite + Roads + Shops + POIs)
                const googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
                    maxZoom: 20,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                    attribution: 'Map data &copy; Google Maps'
                });

                // Google Maps Streets (Standard Roadmap)
                const googleStreets = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                    maxZoom: 20,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                    attribution: 'Map data &copy; Google Maps'
                });

                // OpenStreetMap (100% Free, NO API key required, NO watermark)
                const osm = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    subdomains: ['a', 'b', 'c'],
                    attribution: '&copy; OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team'
                });

                // Esri World Imagery
                const esriSat = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    maxZoom: 19,
                    attribution: 'Tiles &copy; Esri'
                });

                // Set Google Streets as default
                googleStreets.addTo(liveMap);

                // Layer switcher control
                const baseMaps = {
                    "🗺️ Google Streets": googleStreets,
                    "🛰️ Google Hybrid": googleHybrid,
                    "🌐 OpenStreetMap": osm,
                    "🌍 Esri Satellite": esriSat
                };
                L.control.layers(baseMaps, null, { position: 'topright' }).addTo(liveMap);
            }
            setTimeout(() => liveMap.invalidateSize(), 200);

            if (liveMarker) {
                liveMap.removeLayer(liveMarker);
                liveMarker = null;
            }

            fetchLiveLocation(tripId, true);

            if (livePollInterval) clearInterval(livePollInterval);
            livePollInterval = setInterval(() => fetchLiveLocation(currentLiveTripId, false), 10000);
        }

        function closeLiveLocation() {
            $('#liveModalOverlay').removeClass('active');
            if (livePollInterval) {
                clearInterval(livePollInterval);
                livePollInterval = null;
            }
            currentLiveTripId = null;
        }

        function fetchLiveLocation(tripId, isFirstLoad) {
            $.ajax({
                url: '<?= base_url("driver/get_trip_location/") ?>' + tripId,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    if (!res.status) {
                        $('#liveStatusText').text(res.message || 'Unable to load location');
                        return;
                    }

                    const trail = res.trail || [];

                    if (trail.length === 0 && !res.current_lat) {
                        $('#liveStatusText').html('<i class="bx bx-info-circle"></i> No location data received yet for this trip.');
                        return;
                    }

                    const latlngs = trail.map(p => [p.lat, p.lng]);
                    const curLat = res.current_lat ?? (latlngs.length ? latlngs[latlngs.length - 1][0] : null);
                    const curLng = res.current_lng ?? (latlngs.length ? latlngs[latlngs.length - 1][1] : null);

                    if (curLat && curLng) {
                        if (liveMarker) {
                            liveMarker.setLatLng([curLat, curLng]);
                        } else {
                            liveMarker = L.marker([curLat, curLng]).addTo(liveMap);
                        }
                        if (isFirstLoad) {
                            liveMap.setView([curLat, curLng], 15);
                        } else {
                            liveMap.panTo([curLat, curLng]);
                        }
                    }

                    const statusLabel = res.trip_status === 'completed' ?
                        '<i class="bx bx-check-circle" style="color:#10b981"></i> Trip completed — showing final route' :
                        '<i class="bx bx-loader-circle" style="color:#f59e0b"></i> Live — updated ' + (res.location_updated_at || 'just now');
                    $('#liveStatusText').html(statusLabel);

                    if (res.trip_status === 'completed' && livePollInterval) {
                        clearInterval(livePollInterval);
                        livePollInterval = null;
                    }
                },
                error: function() {
                    $('#liveStatusText').text('Error loading location. Retrying...');
                }
            });
        }

        $(document).on('click', '#liveModalOverlay', function(e) {
            if (e.target === this) closeLiveLocation();
        });

        // Initial load
        $(document).ready(function() {
            loadTrips();
        });
    </script>