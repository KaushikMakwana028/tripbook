<!doctype html>

<html lang="en" data-bs-theme="light">



<head>

	<!-- Required meta tags -->

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--favicon-->

	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/tripbook_icon.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/tripbook_icon.png'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/tripbook_icon.png'); ?>">


	<!--plugins-->

	<link href="<?= base_url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet">

	<link href="<?= base_url('assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet">

	<link href="<?= base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet">

	<link href="<?= base_url('assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet">



	<!-- loader-->

	<link href="<?= base_url('assets/css/pace.min.css') ?>" rel="stylesheet" />

	<script src="<?= base_url('assets/js/pace.min.js') ?>"></script>



	<!-- Bootstrap CSS -->

	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



	<link href="<?= base_url('assets/css/bootstrap-extended.css') ?>" rel="stylesheet">



	<!-- Google Fonts (CDN) -->

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">



	<!-- App Styles -->

	<link href="<?= base_url('assets/sass/app.css') ?>" rel="stylesheet">

	<link href="<?= base_url('assets/css/icons.css') ?>" rel="stylesheet">

	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">



	<!-- Theme Style CSS -->

	<link rel="stylesheet" href="<?= base_url('assets/sass/dark-theme.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/sass/semi-dark.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/sass/bordered-theme.css') ?>">







	<title>TripsBook - Admin</title>

</head>



<body>

	<!--wrapper-->

	<div class="wrapper">

		<!--sidebar wrapper -->

		<div class="sidebar-wrapper" data-simplebar="true">

			<div class="sidebar-header">
    <div class="d-flex align-items-center">
        <img src="<?= base_url('assets/images/trip_logo.png'); ?>" 
             alt="Logo"
             style=" object-fit: contain; margin-left: 43px;
    width: 50%;
    margin-top: 40px;">
    </div>

    <div class="mobile-toggle-icon ms-auto">
        <i class='bx bx-x'></i>
    </div>
</div>



			<!--navigation-->

			<ul class="metismenu" id="menu" style="    margin-top: 96px;">

				<li>

					<a href="<?= base_url('dashboard'); ?>" class="">

						<div class="parent-icon"><i class='bx bx-home-alt'></i>

						</div>

						<div class="menu-title">Dashboard</div>

					</a>



				</li>

				<!-- Drivers -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-id-card"></i></div>
						<div class="menu-title">Drivers</div>
					</a>
					<ul>
						<li><a href="<?= base_url('driver'); ?>"><i class='bx bx-list-ul'></i>All Drivers</a></li>
						<li><a href="<?= base_url('add_driver'); ?>"><i class='bx bx-plus-circle'></i>Add Driver</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-buildings"></i></div>
						<div class="menu-title">Company</div>
					</a>
					<ul>
						<li>
							<a href="<?= base_url('company'); ?>">
								<i class='bx bx-list-check'></i>All Companies
							</a>
						</li>
						<li>
							<a href="<?= base_url('add_company'); ?>">
								<i class='bx bx-plus-circle'></i>Add Company
							</a>
						</li>
					</ul>
				</li>

				<!-- Bookings -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-calendar-check"></i></div>
						<div class="menu-title">Bookings</div>
					</a>
					<ul>
						<li><a href="<?= base_url('booking'); ?>"><i class='bx bx-list-check'></i>All Booking</a></li>
					</ul>
				</li>












			</ul>

			<!--end navigation-->

		</div>

		<!--end sidebar wrapper -->

		<!--start header -->

		<header>

			<div class="topbar">

				<nav class="navbar navbar-expand gap-2 align-items-center">

					<div class="mobile-toggle-menu d-flex"><i class='bx bx-menu'></i>

					</div>

					<div class="dropdown ms-auto me-4 position-relative">

						<?php
						$admin = $this->session->userdata('admin');
						$user_name = $admin['name'] ?? 'Admin';
						$business_name = $admin['business_name'] ?? 'Manager';
						$profile_image = !empty($admin['profile_image'])
							? base_url($admin['profile_image'])
							: base_url('assets/images/programmer.png');
						?>

						<!-- Avatar Button -->
						<a href="#" class="profile-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="<?= $profile_image ?>" class="profile-avatar">
						</a>

						<!-- Custom Dropdown Card -->
						<div class="dropdown-menu dropdown-menu-end profile-card shadow-lg">

							<div class="profile-card-header">
								<div class="profile-name"><?= $user_name ?></div>
								<div class="profile-role"><?= $business_name ?></div>
							</div>

							<div class="profile-card-body">
								<a href="<?= base_url('profile') ?>" class="profile-item">
									<i class="bx bx-user"></i>
									<span>My Profile</span>
								</a>

								<a href="<?= base_url('login/logout') ?>" class="profile-item">
									<i class="bx bx-log-out"></i>
									<span>Log Out</span>
								</a>
							</div>

						</div>
					</div>



				</nav>

			</div>

			<style>
				/* Avatar */
				.profile-avatar {
					width: 42px;
					height: 42px;
					border-radius: 50%;
					object-fit: cover;
					cursor: pointer;
				}

				/* Dropdown Card */
				.profile-card {
					width: 270px;
					border-radius: 18px;
					padding: 0;
					border: none;
					overflow: hidden;
					margin-top: 12px;
				}

				/* Top Header */
				.profile-card-header {
					background: #e9f1ff;
					padding: 18px;
					border-radius: 18px 18px 0 0;
				}

				.profile-name {
					font-weight: 600;
					font-size: 16px;
				}

				.profile-role {
					font-size: 14px;
					color: #6c757d;
				}

				/* Body */
				.profile-card-body {
					padding: 12px 0;
				}

				.profile-item {
					display: flex;
					align-items: center;
					gap: 12px;
					padding: 12px 20px;
					text-decoration: none;
					color: #333;
					font-weight: 500;
					transition: 0.2s;
				}

				.profile-item i {
					font-size: 20px;
				}

				.profile-item:hover {
					background: #f5f7fa;
				}

				.profile-dropdown {
					width: 240px;
					border-radius: 12px;
					overflow: hidden;
				}

				.profile-header {
					background: #e9f1ff;
					border-radius: 12px 12px 0 0;
				}

				.profile-dropdown .dropdown-item:hover {
					background-color: #f5f7fa;
				}
			</style>
		</header>

		<!--end header -->

		<!--start page wrapper -->