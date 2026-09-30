<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/css/pace.min.css" rel="stylesheet">
    <script src="assets/js/pace.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/sass/app.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/sass/dark-theme.css">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>TripsBook — Register</title>

    <style>
        :root {
            --primary: #0e7fb5;
            --primary-light: #13a8c4;
            --primary-dark: #0a5f8a;
            --accent: #00c9a7;
            --accent-light: #1de9b6;
            --bg-gradient-start: #020e1a;
            --bg-gradient-mid: #063650;
            --bg-gradient-end: #051e30;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-mid) 50%, var(--bg-gradient-end) 100%);
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background:
                radial-gradient(2px 2px at 20% 30%, rgba(0,201,167,0.25), transparent),
                radial-gradient(2px 2px at 40% 70%, rgba(19,168,196,0.2), transparent),
                radial-gradient(2px 2px at 50% 40%, rgba(0,201,167,0.3), transparent),
                radial-gradient(2px 2px at 60% 80%, rgba(255,255,255,0.1), transparent),
                radial-gradient(2px 2px at 80% 10%, rgba(19,168,196,0.2), transparent),
                radial-gradient(1px 1px at 70% 50%, rgba(255,255,255,0.15), transparent),
                radial-gradient(1px 1px at 90% 20%, rgba(0,201,167,0.2), transparent),
                radial-gradient(1px 1px at 10% 60%, rgba(255,255,255,0.1), transparent),
                radial-gradient(1px 1px at 30% 90%, rgba(19,168,196,0.15), transparent),
                radial-gradient(1px 1px at 15% 15%, rgba(255,255,255,0.2), transparent);
            background-size: 200% 200%;
            animation: starFloat 30s ease-in-out infinite;
            pointer-events: none; z-index: 0;
        }

        @keyframes starFloat {
            0%,100% { background-position: 0% 0%; }
            25% { background-position: 50% 50%; }
            50% { background-position: 100% 100%; }
            75% { background-position: 50% 0%; }
        }

        .floating-orb {
            position: fixed; border-radius: 50%;
            filter: blur(80px); opacity: 0.18;
            pointer-events: none; z-index: 0;
        }

        .orb-1 { width: 420px; height: 420px; background: radial-gradient(circle, var(--primary), transparent); top: -100px; right: -100px; animation: orbFloat1 20s ease-in-out infinite; }
        .orb-2 { width: 320px; height: 320px; background: radial-gradient(circle, var(--accent), transparent); bottom: -60px; left: -60px; animation: orbFloat2 25s ease-in-out infinite; }
        .orb-3 { width: 260px; height: 260px; background: radial-gradient(circle, #0e7fb5, transparent); top: 50%; left: 50%; animation: orbFloat3 18s ease-in-out infinite; }

        @keyframes orbFloat1 { 0%,100% { transform: translate(0,0) scale(1); } 33% { transform: translate(-80px,80px) scale(1.1); } 66% { transform: translate(40px,-40px) scale(0.9); } }
        @keyframes orbFloat2 { 0%,100% { transform: translate(0,0) scale(1); } 33% { transform: translate(60px,-60px) scale(1.15); } 66% { transform: translate(-30px,30px) scale(0.85); } }
        @keyframes orbFloat3 { 0%,100% { transform: translate(-50%,-50%) scale(1); } 50% { transform: translate(-50%,-50%) scale(1.2); } }

        .wrapper { position: relative; z-index: 1; }

        .register-container {
            min-height: 100vh;
            display: flex; align-items: center; justify-content: center;
            padding: 2rem 1rem;
        }

        .register-wrapper {
            width: 100%; max-width: 1000px;
            display: flex;
            border-radius: 24px; overflow: hidden;
            box-shadow:
                0 25px 50px -12px rgba(0,0,0,0.6),
                0 0 0 1px rgba(0,201,167,0.08),
                inset 0 1px 0 rgba(255,255,255,0.08);
            animation: cardSlideUp 0.8s cubic-bezier(0.16,1,0.3,1) forwards;
            opacity: 0; transform: translateY(40px);
        }

        @keyframes cardSlideUp { to { opacity: 1; transform: translateY(0); } }

        /* Left brand panel */
        .brand-panel {
            flex: 0 0 380px;
            background: linear-gradient(160deg, #0a5f8a 0%, #063650 60%, #020e1a 100%);
            padding: 3rem 2.5rem;
            display: flex; flex-direction: column; justify-content: center;
            position: relative; overflow: hidden;
        }

        .brand-panel::before {
            content: ''; position: absolute; top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: radial-gradient(circle, rgba(0,201,167,0.04) 1px, transparent 1px);
            background-size: 28px 28px;
            animation: patternMove 40s linear infinite;
        }

        @keyframes patternMove { 0% { transform: translate(0,0); } 100% { transform: translate(28px,28px); } }

        .brand-panel::after {
            content: ''; position: absolute; bottom: -80px; right: -80px;
            width: 280px; height: 280px; border-radius: 50%;
            background: radial-gradient(circle, rgba(0,201,167,0.08), transparent);
        }

        .brand-content { position: relative; z-index: 1; }

        .brand-logo-box {
            width: 90px; height: 90px;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0,201,167,0.25);
            animation: logoPulse 3s ease-in-out infinite;
            padding: 8px;
        }

        @keyframes logoPulse {
            0%,100% { box-shadow: 0 0 0 0 rgba(0,201,167,0.3); }
            50% { box-shadow: 0 0 0 14px rgba(0,201,167,0); }
        }

        .brand-logo-box img {
            width: 70px; height: 70px;
            object-fit: contain;
            /* filter: brightness(0) invert(1); */
        }

        .brand-content h2 { color: #fff; font-size: 1.8rem; font-weight: 800; margin-bottom: 0.75rem; line-height: 1.2; }
        .brand-content p { color: rgba(255,255,255,0.7); font-size: 0.92rem; line-height: 1.65; margin-bottom: 2.5rem; }

        .brand-features { list-style: none; padding: 0; }
        .brand-features li {
            display: flex; align-items: center; gap: 12px;
            color: rgba(255,255,255,0.88); font-size: 0.88rem; margin-bottom: 1rem;
            opacity: 0; animation: featureSlide 0.5s ease forwards;
        }
        .brand-features li:nth-child(1) { animation-delay: 0.3s; }
        .brand-features li:nth-child(2) { animation-delay: 0.5s; }
        .brand-features li:nth-child(3) { animation-delay: 0.7s; }
        .brand-features li:nth-child(4) { animation-delay: 0.9s; }

        @keyframes featureSlide {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .feature-icon {
            width: 32px; height: 32px; min-width: 32px;
            background: rgba(0,201,167,0.2);
            border: 1px solid rgba(0,201,167,0.3);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.82rem; color: var(--accent-light);
        }

        /* Right form panel */
        .form-panel {
            flex: 1; background: #fff;
            padding: 2.5rem 3rem;
            display: flex; flex-direction: column; justify-content: center;
        }

        .form-header { text-align: center; margin-bottom: 2rem; }

        .form-logo-wrap {
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 0.75rem;
        }
        .form-logo-wrap img { height: 60px; object-fit: contain; }

        .mobile-logo-wrap {
            display: none; justify-content: center; margin-bottom: 0.75rem;
        }
        .mobile-logo-wrap img { height: 48px; object-fit: contain; }

        .form-header h4 { font-size: 1.45rem; font-weight: 700; color: #1e293b; margin-bottom: 0.2rem; }
        .form-header p { color: #94a3b8; font-size: 0.88rem; margin: 0; }

        /* Alerts */
        .alert-custom-danger {
            background: linear-gradient(135deg,#fef2f2,#fee2e2);
            border: 1px solid #fecaca; color: #991b1b;
            border-radius: 12px; padding: 0.85rem 1.25rem;
            font-size: 0.875rem; display: flex; align-items: center; gap: 8px;
            animation: alertShake 0.5s ease; margin-bottom: 1rem;
        }

        .alert-custom-success {
            background: linear-gradient(135deg,#f0fdf4,#dcfce7);
            border: 1px solid #bbf7d0; color: #166534;
            border-radius: 12px; padding: 0.85rem 1.25rem;
            font-size: 0.875rem; display: flex; align-items: center; gap: 8px;
            animation: alertSlide 0.5s ease; margin-bottom: 1rem;
        }

        @keyframes alertShake { 0%,100% { transform: translateX(0); } 20% { transform: translateX(-8px); } 40% { transform: translateX(8px); } 60% { transform: translateX(-4px); } 80% { transform: translateX(4px); } }
        @keyframes alertSlide { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }

        /* Form fields */
        .form-group {
            margin-bottom: 1.2rem;
            opacity: 0; animation: fieldFadeIn 0.5s ease forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }

        @keyframes fieldFadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        .form-group label {
            display: block; font-size: 0.78rem; font-weight: 600;
            color: #475569; margin-bottom: 0.4rem;
            text-transform: uppercase; letter-spacing: 0.5px;
        }

        .input-wrapper { position: relative; }

        .input-wrapper .input-icon {
            position: absolute; left: 14px; top: 50%;
            transform: translateY(-50%);
            color: #94a3b8; font-size: 1.05rem;
            transition: color 0.3s ease; z-index: 2;
        }

        .input-wrapper input {
            width: 100%;
            padding: 0.75rem 0.75rem 0.75rem 2.7rem;
            border: 2px solid #e2e8f0; border-radius: 12px;
            font-size: 0.88rem; font-family: 'Inter', sans-serif;
            color: #1e293b; background: #f8fafc;
            transition: all 0.3s cubic-bezier(0.4,0,0.2,1);
            outline: none;
        }
        .input-wrapper input::placeholder { color: #cbd5e1; }
        .input-wrapper input:hover { border-color: #b8c5d3; background: #fff; }
        .input-wrapper input:focus {
            border-color: var(--primary); background: #fff;
            box-shadow: 0 0 0 4px rgba(14,127,181,0.1);
        }
        .input-wrapper input:focus ~ .input-icon { color: var(--primary); }

        .password-toggle {
            position: absolute; right: 14px; top: 50%;
            transform: translateY(-50%);
            background: none; border: none; color: #94a3b8;
            cursor: pointer; font-size: 1.05rem; padding: 4px;
            transition: color 0.3s ease; z-index: 2;
        }
        .password-toggle:hover { color: var(--primary); }

        .form-row { display: flex; gap: 1rem; }
        .form-row .form-group { flex: 1; }

        /* Submit button */
        .btn-register {
            width: 100%; padding: 0.85rem;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 50%, var(--accent) 100%);
            color: #fff; border: none; border-radius: 12px;
            font-size: 0.95rem; font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer; position: relative; overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4,0,0.2,1);
            margin-top: 0.75rem; letter-spacing: 0.3px;
        }

        .btn-register::before {
            content: ''; position: absolute; top: 0; left: -100%;
            width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        .btn-register:hover { transform: translateY(-2px); box-shadow: 0 10px 28px -5px rgba(0,201,167,0.35); }
        .btn-register:hover::before { left: 100%; }
        .btn-register:active { transform: translateY(0); }

        .btn-register .btn-content { display: flex; align-items: center; justify-content: center; gap: 8px; }

        .login-link { text-align: center; margin-top: 1.25rem; color: #64748b; font-size: 0.9rem; }
        .login-link a {
            color: var(--primary); text-decoration: none; font-weight: 600;
            position: relative; transition: color 0.3s ease;
        }
        .login-link a::after {
            content: ''; position: absolute; bottom: -2px; left: 0;
            width: 0; height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width 0.3s ease; border-radius: 1px;
        }
        .login-link a:hover::after { width: 100%; }

        /* Responsive */
        @media (max-width: 768px) {
            .brand-panel { display: none; }
            .form-panel { padding: 2rem 1.5rem; }
            .register-wrapper { max-width: 450px; border-radius: 20px; }
            .form-logo-wrap { display: none; }
            .mobile-logo-wrap { display: flex; }
            .form-row { flex-direction: column; gap: 0; }
            .register-container { padding: 1rem; }
        }

        @media (max-width: 400px) { .form-panel { padding: 1.5rem 1.25rem; } }
    </style>
</head>

<body>
    <div class="floating-orb orb-1"></div>
    <div class="floating-orb orb-2"></div>
    <div class="floating-orb orb-3"></div>

    <div class="wrapper">
        <div class="register-container">
            <div class="register-wrapper">

                <!-- Left Brand Panel -->
                <div class="brand-panel">
                    <div class="brand-content">

                        <!-- Logo in brand panel -->
                        <div class="brand-logo-box">
                            <img src="<?= base_url('assets/images/trip_logo.png'); ?>" alt="TripsBook Logo">
                        </div>

                        <h2>Start Your Journey With Us</h2>
                        <p>Create your master admin account and unlock the full power of our platform to manage your business efficiently.</p>

                        <ul class="brand-features">
                            <li>
                                <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                                Secure & encrypted data
                            </li>
                            <li>
                                <span class="feature-icon"><i class="bi bi-speedometer2"></i></span>
                                Real-time dashboard analytics
                            </li>
                            <li>
                                <span class="feature-icon"><i class="bi bi-people"></i></span>
                                Multi-user role management
                            </li>
                            <li>
                                <span class="feature-icon"><i class="bi bi-headset"></i></span>
                                24/7 priority support
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Form Panel -->
                <div class="form-panel">

                    <div class="form-header">

                        <!-- Logo on desktop -->
                        <div class="form-logo-wrap">
                            <img src="<?= base_url('assets/images/trip_logo.png'); ?>" alt="TripsBook Logo">
                        </div>

                        <!-- Logo on mobile -->
                        <div class="mobile-logo-wrap">
                            <img src="<?= base_url('assets/images/trip_logo.png'); ?>" alt="TripsBook Logo">
                        </div>

                        <h4>TripsBook</h4>
                        <p>Fill in your details to get started</p>
                    </div>

                    <!-- Flash Messages -->
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert-custom-danger">
                            <i class="bi bi-exclamation-circle"></i>
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert-custom-success">
                            <i class="bi bi-check-circle"></i>
                            <?= $this->session->flashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('admin-register/store') ?>" autocomplete="off">

                        <div class="form-row">
                            <div class="form-group">
                                <label>Admin Name</label>
                                <div class="input-wrapper">
                                    <input type="text" name="name" placeholder="John Doe" required>
                                    <i class="bi bi-person input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Business Name</label>
                                <div class="input-wrapper">
                                    <input type="text" name="business_name" placeholder="Acme Inc." required>
                                    <i class="bi bi-building input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Mobile Number</label>
                            <div class="input-wrapper">
                                <input type="text" name="mobile" placeholder="Enter 10 digit mobile" maxlength="10" required>
                                <i class="bi bi-phone input-icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-wrapper">
                                <input type="email" name="email" placeholder="admin@example.com" required>
                                <i class="bi bi-envelope input-icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-wrapper">
                                <input type="password" name="password" id="password" placeholder="Min 8 characters" required>
                                <i class="bi bi-lock input-icon"></i>
                                <button type="button" class="password-toggle" onclick="togglePassword()">
                                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn-register">
                            <span class="btn-content">
                                <i class="bi bi-rocket-takeoff"></i>
                                Create Master Admin Account
                            </span>
                        </button>

                    </form>

                    <p class="login-link">
                        Already have an account? <a href="<?= base_url('login') ?>">Login here</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.replace('bi-eye-slash', 'bi-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.replace('bi-eye', 'bi-eye-slash');
            }
        }

        document.querySelector('input[name="mobile"]').addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>