<style>
    /* ===== Page Wrapper ===== */
    .page-wrapper {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }

    /* ===== Breadcrumb ===== */
    .breadcrumb-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2c3e50;
        position: relative;
        padding-right: 1.5rem;
    }

    .breadcrumb-title::after {
        content: '';
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 24px;
        width: 2px;
        background: linear-gradient(to bottom, #667eea, #764ba2);
        border-radius: 2px;
    }

    .breadcrumb-item a {
        color: #667eea;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: #764ba2;
    }

    .breadcrumb-item.active {
        color: #6c757d;
        font-weight: 500;
    }

    /* ===== Main Card ===== */
    .company-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        background: #ffffff;
    }

    .company-card:hover {
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
    }

    .card-header-custom {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 1.5rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .card-header-custom h5 {
        color: #fff;
        font-weight: 700;
        margin: 0;
        font-size: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .card-header-custom h5 i {
        font-size: 1.5rem;
    }

    /* ===== Search Box ===== */
    .search-wrapper {
        position: relative;
        min-width: 280px;
    }

    .search-wrapper i {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #667eea;
        font-size: 1.1rem;
        z-index: 2;
    }

    .search-input {
        width: 100%;
        padding: 0.65rem 1rem 0.65rem 2.8rem;
        border: 2px solid transparent;
        border-radius: 50px;
        font-size: 0.9rem;
        background: rgba(255, 255, 255, 0.95);
        color: #333;
        transition: all 0.3s ease;
        outline: none;
    }

    .search-input::placeholder {
        color: #aab2bd;
    }

    .search-input:focus {
        border-color: rgba(255, 255, 255, 0.6);
        box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.2);
        background: #fff;
    }

    /* ===== Stats Row ===== */
    .stats-row {
        display: flex;
        gap: 1rem;
        padding: 1.25rem 2rem;
        background: #f8f9ff;
        border-bottom: 1px solid #eef0f8;
        flex-wrap: wrap;
    }

    .stat-badge {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .stat-badge.total {
        background: linear-gradient(135deg, #e8eaf6, #c5cae9);
        color: #3949ab;
    }

    .stat-badge.active {
        background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
        color: #2e7d32;
    }

    .stat-badge.inactive {
        background: linear-gradient(135deg, #fce4ec, #f8bbd0);
        color: #c62828;
    }

    .stat-badge i {
        font-size: 1.1rem;
    }

    .stat-badge .count {
        background: rgba(255, 255, 255, 0.7);
        padding: 0.1rem 0.6rem;
        border-radius: 50px;
        font-weight: 700;
    }

    /* ===== Table ===== */
    .table-container {
        padding: 0;
    }

    .table {
        margin: 0;
    }

    .table thead th {
        background: #f1f3f8;
        color: #4a5568;
        font-weight: 700;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 1rem 1.5rem;
        border: none;
        white-space: nowrap;
    }

    .table thead th:first-child {
        padding-left: 2rem;
    }

    .table tbody tr {
        transition: all 0.25s ease;
        border-bottom: 1px solid #f0f2f5;
        animation: fadeInRow 0.4s ease forwards;
        opacity: 0;
    }

    .table tbody tr:nth-child(1) { animation-delay: 0.05s; }
    .table tbody tr:nth-child(2) { animation-delay: 0.1s; }
    .table tbody tr:nth-child(3) { animation-delay: 0.15s; }
    .table tbody tr:nth-child(4) { animation-delay: 0.2s; }
    .table tbody tr:nth-child(5) { animation-delay: 0.25s; }
    .table tbody tr:nth-child(6) { animation-delay: 0.3s; }
    .table tbody tr:nth-child(7) { animation-delay: 0.35s; }
    .table tbody tr:nth-child(8) { animation-delay: 0.4s; }
    .table tbody tr:nth-child(9) { animation-delay: 0.45s; }
    .table tbody tr:nth-child(10) { animation-delay: 0.5s; }

    @keyframes fadeInRow {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .table tbody tr:hover {
        background: linear-gradient(135deg, #f8f9ff 0%, #eef1ff 100%);
        transform: scale(1.005);
        box-shadow: 0 2px 12px rgba(102, 126, 234, 0.08);
    }

    .table tbody tr:last-child {
        border-bottom: none;
    }

    .table tbody td {
        padding: 1rem 1.5rem;
        vertical-align: middle;
        color: #4a5568;
        font-size: 0.92rem;
    }

    .table tbody td:first-child {
        padding-left: 2rem;
    }

    /* Row Number */
    .row-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: linear-gradient(135deg, #e8eaf6, #c5cae9);
        color: #3949ab;
        font-weight: 700;
        font-size: 0.85rem;
    }

    /* Company Name */
    .company-name {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .company-avatar {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1rem;
        color: #fff;
        flex-shrink: 0;
        text-transform: uppercase;
    }

    .company-name-text {
        font-weight: 600;
        color: #2d3748;
    }

    /* Status Badge */
    .status-badge {
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.3px;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }

    .status-badge.active {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
    }

    .status-badge.inactive {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
    }

    .status-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        display: inline-block;
    }

    .status-dot.active {
        background: #28a745;
        box-shadow: 0 0 6px rgba(40, 167, 69, 0.5);
        animation: pulse-green 2s infinite;
    }

    .status-dot.inactive {
        background: #dc3545;
    }

    @keyframes pulse-green {
        0%, 100% { box-shadow: 0 0 4px rgba(40, 167, 69, 0.4); }
        50% { box-shadow: 0 0 10px rgba(40, 167, 69, 0.7); }
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .action-btn {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        cursor: pointer;
        border: none;
        text-decoration: none;
        font-size: 1.05rem;
    }

    .action-btn.edit {
        background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        color: #1565c0;
    }

    .action-btn.edit:hover {
        background: linear-gradient(135deg, #1565c0, #1976d2);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(21, 101, 192, 0.35);
    }

    .action-btn.delete {
        background: linear-gradient(135deg, #fce4ec, #f8bbd0);
        color: #c62828;
    }

    .action-btn.delete:hover {
        background: linear-gradient(135deg, #c62828, #d32f2f);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(198, 40, 40, 0.35);
    }

    .action-btn.toggle-on {
        background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
        color: #2e7d32;
    }

    .action-btn.toggle-on:hover {
        background: linear-gradient(135deg, #2e7d32, #388e3c);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(46, 125, 50, 0.35);
    }

    .action-btn.toggle-off {
        background: linear-gradient(135deg, #fff3e0, #ffe0b2);
        color: #e65100;
    }

    .action-btn.toggle-off:hover {
        background: linear-gradient(135deg, #e65100, #ef6c00);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(230, 81, 0, 0.35);
    }

    /* ===== Pagination ===== */
    .pagination-wrapper {
        padding: 1rem 2rem 1.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .pagination {
        margin: 0;
        gap: 0.35rem;
    }

    .pagination .page-item .page-link {
        border: none;
        border-radius: 10px;
        padding: 0.5rem 0.9rem;
        font-weight: 600;
        font-size: 0.88rem;
        color: #667eea;
        background: #f0f2ff;
        transition: all 0.3s ease;
        min-width: 40px;
        text-align: center;
    }

    .pagination .page-item .page-link:hover {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.35);
    }

    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: #fff;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .pagination .page-item.disabled .page-link {
        background: #f5f5f5;
        color: #bbb;
    }

    /* ===== No Data ===== */
    .no-data-row td {
        padding: 3rem !important;
    }

    .no-data-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
    }

    .no-data-content i {
        font-size: 3rem;
        color: #d1d5db;
    }

    .no-data-content p {
        margin: 0;
        color: #9ca3af;
        font-weight: 500;
        font-size: 1rem;
    }

    /* ===== Loading Skeleton ===== */
    .skeleton-row td {
        padding: 1rem 1.5rem !important;
    }

    .skeleton {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
        border-radius: 6px;
        height: 16px;
        display: inline-block;
    }

    @keyframes shimmer {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    /* ===== Divider ===== */
    hr.styled-divider {
        border: none;
        height: 2px;
        background: linear-gradient(to right, transparent, #667eea, #764ba2, transparent);
        margin: 1rem 0 1.5rem;
        opacity: 0.4;
    }

    /* ===== Tooltip ===== */
    .action-btn[title] {
        position: relative;
    }

    /* ===== Responsive ===== */
    @media (max-width: 768px) {
        .card-header-custom {
            padding: 1rem 1.25rem;
        }

        .search-wrapper {
            min-width: 100%;
        }

        .stats-row {
            padding: 1rem 1.25rem;
        }

        .table tbody td,
        .table thead th {
            padding: 0.75rem 1rem;
        }

        .table tbody td:first-child,
        .table thead th:first-child {
            padding-left: 1.25rem;
        }

        .company-avatar {
            display: none;
        }
    }
</style>

<div class="page-wrapper">
    <div class="page-content">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Table</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('dashboard'); ?>"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Company</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr class="styled-divider">

        <!-- Main Card -->
        <div class="card company-card">
            <!-- Card Header -->
            <div class="card-header-custom">
                <h5><i class="bx bxs-building-house"></i> All Companies</h5>
                <div class="search-wrapper">
                    <i class="bx bx-search"></i>
                    <input type="text" id="search" class="search-input" placeholder="Search companies...">
                </div>
            </div>

            <!-- Stats Row -->
            <div class="stats-row" id="statsRow">
                <div class="stat-badge total">
                    <i class="bx bxs-building-house"></i>
                    Total: <span class="count" id="totalCount">0</span>
                </div>
                <div class="stat-badge active">
                    <i class="bx bxs-check-circle"></i>
                    Active: <span class="count" id="activeCount">0</span>
                </div>
                <div class="stat-badge inactive">
                    <i class="bx bxs-x-circle"></i>
                    Inactive: <span class="count" id="inactiveCount">0</span>
                </div>
            </div>

            <!-- Table -->
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="company">
                            <!-- Skeleton Loading -->
                            <tr class="skeleton-row">
                                <td><div class="skeleton" style="width:30px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:180px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:70px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:120px;">&nbsp;</div></td>
                            </tr>
                            <tr class="skeleton-row">
                                <td><div class="skeleton" style="width:30px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:200px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:70px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:120px;">&nbsp;</div></td>
                            </tr>
                            <tr class="skeleton-row">
                                <td><div class="skeleton" style="width:30px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:160px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:70px;">&nbsp;</div></td>
                                <td><div class="skeleton" style="width:120px;">&nbsp;</div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                <nav aria-label="Page navigation">
                    <ul class="pagination" id="pagination"></ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Avatar color palette
    const avatarColors = [
        '#667eea', '#764ba2', '#f093fb', '#f5576c', '#4facfe',
        '#00f2fe', '#43e97b', '#fa709a', '#fee140', '#a18cd1',
        '#fbc2eb', '#8fd3f4', '#a6c0fe', '#fccb90', '#d57eeb'
    ];

    function getAvatarColor(name) {
        let hash = 0;
        for (let i = 0; i < name.length; i++) {
            hash = name.charCodeAt(i) + ((hash << 5) - hash);
        }
        return avatarColors[Math.abs(hash) % avatarColors.length];
    }

    function getInitials(name) {
        return name.split(' ').map(w => w[0]).join('').substring(0, 2).toUpperCase();
    }

    $(document).ready(function () {
        let currentPage = 1;
        let totalPages = 1;
        let searchTimeout;

        function loadCompanies(page = 1, search = '') {
            $.ajax({
                url: "<?= base_url('driver/fetch_companies'); ?>",
                type: "POST",
                data: { page, search },
                dataType: "json",
                success: function (res) {
                    let html = '';

                    if (res.companies.length > 0) {
                        let activeCount = 0;
                        let inactiveCount = 0;

                        $.each(res.companies, function (i, c) {
                            if (c.isActive == 1) activeCount++;
                            else inactiveCount++;

                            const color = getAvatarColor(c.company_name);
                            const initials = getInitials(c.company_name);

                            html += `
                            <tr>
                                <td><span class="row-number">${(page - 1) * 10 + i + 1}</span></td>
                                <td>
                                    <div class="company-name">
                                        <div class="company-avatar" style="background: ${color};">${initials}</div>
                                        <span class="company-name-text">${c.company_name}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="status-badge ${c.isActive == 1 ? 'active' : 'inactive'}">
                                        <span class="status-dot ${c.isActive == 1 ? 'active' : 'inactive'}"></span>
                                        ${c.isActive == 1 ? 'Active' : 'Inactive'}
                                    </span>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="<?= base_url('company/edit/'); ?>${c.id}" class="action-btn edit" title="Edit">
                                            <i class="bx bxs-edit"></i>
                                        </a>
                                        <a class="action-btn delete" data-id="${c.id}" title="Delete">
                                            <i class="bx bxs-trash"></i>
                                        </a>
                                        ${c.isActive == 1
                                            ? `<a href="javascript:;" class="action-btn toggle-off" onclick="toggleCompanyStatus(${c.id}, 0)" title="Deactivate">
                                                    <i class="bx bx-toggle-right" style="font-size:1.4rem;"></i>
                                               </a>`
                                            : `<a href="javascript:;" class="action-btn toggle-on" onclick="toggleCompanyStatus(${c.id}, 1)" title="Activate">
                                                    <i class="bx bx-toggle-left" style="font-size:1.4rem;"></i>
                                               </a>`
                                        }
                                    </div>
                                </td>
                            </tr>`;
                        });

                        $('#totalCount').text(res.total || res.companies.length);
                        $('#activeCount').text(activeCount);
                        $('#inactiveCount').text(inactiveCount);

                    } else {
                        html = `
                        <tr class="no-data-row">
                            <td colspan="4">
                                <div class="no-data-content">
                                    <i class="bx bx-search-alt"></i>
                                    <p>No companies found</p>
                                </div>
                            </td>
                        </tr>`;
                        $('#totalCount').text(0);
                        $('#activeCount').text(0);
                        $('#inactiveCount').text(0);
                    }

                    $('#company').html(html);
                    totalPages = res.total_pages;
                    currentPage = res.current_page;
                    renderPagination();
                }
            });
        }

        function renderPagination() {
            let paginationHtml = '';

            if (totalPages <= 1) {
                $('#pagination').html('');
                return;
            }

            // Previous button
            paginationHtml += `
                <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                    <a class="page-link" href="#" data-page="prev">
                        <i class="bx bx-chevron-left"></i>
                    </a>
                </li>`;

            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(totalPages, startPage + 4);

            if (endPage - startPage < 4) {
                startPage = Math.max(1, endPage - 4);
            }

            if (startPage > 1) {
                paginationHtml += `
                    <li class="page-item">
                        <a class="page-link" href="#" data-page="1">1</a>
                    </li>`;
                if (startPage > 2) {
                    paginationHtml += `
                        <li class="page-item disabled">
                            <a class="page-link" href="#">...</a>
                        </li>`;
                }
            }

            for (let i = startPage; i <= endPage; i++) {
                paginationHtml += `
                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                        <a class="page-link" href="#" data-page="${i}">${i}</a>
                    </li>`;
            }

            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationHtml += `
                        <li class="page-item disabled">
                            <a class="page-link" href="#">...</a>
                        </li>`;
                }
                paginationHtml += `
                    <li class="page-item">
                        <a class="page-link" href="#" data-page="${totalPages}">${totalPages}</a>
                    </li>`;
            }

            // Next button
            paginationHtml += `
                <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                    <a class="page-link" href="#" data-page="next">
                        <i class="bx bx-chevron-right"></i>
                    </a>
                </li>`;

            $('#pagination').html(paginationHtml);
        }

        $(document).on('click', '.page-link', function (e) {
            e.preventDefault();
            let page = $(this).data('page');

            if (page === 'prev') {
                if (currentPage > 1) currentPage--;
            } else if (page === 'next') {
                if (currentPage < totalPages) currentPage++;
            } else {
                currentPage = parseInt(page);
            }

            loadCompanies(currentPage, $('#search').val());
        });

        $('#search').on('keyup', function () {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                currentPage = 1;
                loadCompanies(1, $(this).val());
            }, 300);
        });

        // Make loadCompanies accessible globally for toggle
        window.loadCompanies = loadCompanies;
        window.getCurrentPage = () => currentPage;

        loadCompanies();
    });

    function toggleCompanyStatus(id, status) {
        let action = status == 1 ? 'Activate' : 'Deactivate';
        Swal.fire({
            title: `${action} Company?`,
            text: `Are you sure you want to ${action.toLowerCase()} this company?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: status == 1 ? '#28a745' : '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: `<i class="bx ${status == 1 ? 'bx-check' : 'bx-x'}"></i> Yes, ${action}`,
            cancelButtonText: 'Cancel',
            customClass: {
                popup: 'rounded-4'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('driver/toggle_status_company'); ?>",
                    type: "POST",
                    data: { id: id, isActive: status },
                    dataType: "json",
                    success: function (res) {
                        if (res.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: res.message,
                                showConfirmButton: false,
                                timer: 1500,
                                customClass: { popup: 'rounded-4' }
                            });
                            window.loadCompanies(window.getCurrentPage(), $('#search').val());
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: res.message,
                                customClass: { popup: 'rounded-4' }
                            });
                        }
                    }
                });
            }
        });
    }

    $(document).on('click', '.action-btn.delete', function () {
        var id = $(this).data('id');

        Swal.fire({
            title: 'Delete Company?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: '<i class="bx bxs-trash"></i> Yes, delete it!',
            cancelButtonText: 'Cancel',
            customClass: {
                popup: 'rounded-4'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?= base_url("driver/delete_item"); ?>',
                    type: 'POST',
                    data: { id: id },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Company has been removed.',
                                showConfirmButton: false,
                                timer: 1500,
                                customClass: { popup: 'rounded-4' }
                            });
                            setTimeout(() => {
                                window.loadCompanies(window.getCurrentPage(), $('#search').val());
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: response.message || 'Failed to delete.',
                                customClass: { popup: 'rounded-4' }
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong.',
                            customClass: { popup: 'rounded-4' }
                        });
                    }
                });
            }
        });
    });
</script>