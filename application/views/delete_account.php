<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account - Thakar Mart</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #D32F2F 0%, #B71C1C 100%);
            color: white;
            padding: 25px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .header .app-name {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 8px;
        }

        .header h1 {
            font-size: 24px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .header-icon {
            font-size: 28px;
        }

        /* Main Container */
        .main-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Warning Banner */
        .warning-banner {
            background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);
            border-left: 4px solid #FF9800;
            border-radius: 0 12px 12px 0;
            padding: 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .warning-icon {
            font-size: 30px;
            flex-shrink: 0;
        }

        .warning-content h3 {
            color: #E65100;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .warning-content p {
            color: #795548;
            font-size: 14px;
        }

        /* Info Card */
        .info-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .info-card h2 {
            color: #333;
            font-size: 20px;
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        /* Steps Container */
        .steps-container {
            position: relative;
        }

        /* Vertical Line */
        .steps-container::before {
            content: '';
            position: absolute;
            left: 25px;
            top: 50px;
            bottom: 50px;
            width: 3px;
            background: linear-gradient(to bottom, #D32F2F, #F44336, #EF5350);
            border-radius: 3px;
        }

        /* Step Item */
        .step-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
            position: relative;
        }

        .step-item:last-child {
            margin-bottom: 0;
        }

        /* Step Number */
        .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #D32F2F 0%, #F44336 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(211, 47, 47, 0.3);
            position: relative;
            z-index: 1;
        }

        /* Step Content */
        .step-content {
            flex: 1;
            background: #FAFAFA;
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #f0f0f0;
            transition: all 0.3s;
        }

        .step-content:hover {
            border-color: #FFCDD2;
            box-shadow: 0 4px 15px rgba(211, 47, 47, 0.1);
        }

        .step-content h3 {
            color: #D32F2F;
            font-size: 16px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .step-content p {
            color: #666;
            font-size: 14px;
        }

        .step-icon {
            font-size: 18px;
        }

        /* Highlight Box */
        .highlight-box {
            background: #FFEBEE;
            border-radius: 8px;
            padding: 12px 15px;
            margin-top: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .highlight-box code {
            background: #D32F2F;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            font-size: 16px;
            letter-spacing: 2px;
        }

        .highlight-box span {
            color: #C62828;
            font-size: 13px;
        }

        /* Data Loss Section */
        .data-loss-section {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .data-loss-section h3 {
            color: #D32F2F;
            font-size: 18px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .data-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .data-item {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #FFF5F5;
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid #FFCDD2;
        }

        .data-item-icon {
            font-size: 20px;
        }

        .data-item span {
            color: #555;
            font-size: 13px;
        }

        /* Note Section */
        .note-section {
            background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .note-icon {
            font-size: 28px;
            flex-shrink: 0;
        }

        .note-content h4 {
            color: #1565C0;
            font-size: 15px;
            margin-bottom: 8px;
        }

        .note-content p {
            color: #1976D2;
            font-size: 13px;
        }

        /* Contact Section */
        .contact-section {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .contact-section h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .contact-section>p {
            color: #888;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .contact-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .contact-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .contact-btn.email {
            background: #4CAF50;
            color: white;
        }

        .contact-btn.email:hover {
            background: #388E3C;
        }

        .contact-btn.phone {
            background: #2196F3;
            color: white;
        }

        .contact-btn.phone:hover {
            background: #1976D2;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 25px;
            color: #888;
            font-size: 12px;
        }

        /* Responsive */
        @media (max-width: 500px) {
            .data-list {
                grid-template-columns: 1fr;
            }

            .contact-buttons {
                flex-direction: column;
            }

            .contact-btn {
                justify-content: center;
            }

            .step-item {
                gap: 15px;
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .steps-container::before {
                left: 20px;
            }
        }

        /* Animation */
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

        .step-item {
            animation: fadeInUp 0.5s ease forwards;
            opacity: 0;
        }

        .step-item:nth-child(1) {
            animation-delay: 0.1s;
        }

        .step-item:nth-child(2) {
            animation-delay: 0.2s;
        }

        .step-item:nth-child(3) {
            animation-delay: 0.3s;
        }

        .step-item:nth-child(4) {
            animation-delay: 0.4s;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <div class="app-name">visiontechnolabs</div>
        <h1>
            <span class="header-icon">🗑️</span>
            Delete Account
        </h1>
    </div>

    <!-- Main Container -->
    <div class="main-container">

        <!-- Warning Banner -->
        <div class="warning-banner">
            <span class="warning-icon">⚠️</span>
            <div class="warning-content">
                <h3>Important Notice</h3>
                <p>Deleting your account is permanent and cannot be undone. All your data, order history, saved
                    addresses, and wallet balance will be permanently removed.</p>
            </div>
        </div>

        <!-- Steps Card -->
        <div class="info-card">
            <h2>📋 How to Delete Your Account</h2>

            <div class="steps-container">

                <!-- Step 1 -->
                <div class="step-item">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>
                            <span class="step-icon">🔐</span>
                            Login to Application
                        </h3>
                        <p>Open the Thakar Mart app and login to your account using your registered mobile number and
                            password.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-item">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>
                            <span class="step-icon">👤</span>
                            Navigate to Profile Section
                        </h3>
                        <p>Tap on the <strong>"Profile"</strong> icon located at the bottom navigation bar or in the
                            menu to access your account settings.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-item">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>
                            <span class="step-icon">👇</span>
                            Scroll to Bottom
                        </h3>
                        <p>Scroll down to the bottom of the Profile page. You will find the <strong>"Delete
                                Account"</strong> button in red color.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="step-item">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>
                            <span class="step-icon">✅</span>
                            Confirm Deletion
                        </h3>
                        <p>Click on the <strong>"Delete Account"</strong> button. A confirmation popup will appear
                            asking you to type the word to confirm.</p>
                        <div class="highlight-box">
                            <code>DELETE</code>
                            <span>Type this word to confirm deletion</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Data Loss Section -->
        <div class="data-loss-section">
            <h3>
                <span>🚨</span>
                What You Will Lose
            </h3>
            <div class="data-list">
                <div class="data-item">
                    <span class="data-item-icon">📦</span>
                    <span>Order History</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">📍</span>
                    <span>Saved Addresses</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">💰</span>
                    <span>Wallet Balance</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">🎁</span>
                    <span>Reward Points</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">❤️</span>
                    <span>Wishlist Items</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">🛒</span>
                    <span>Cart Items</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">🎟️</span>
                    <span>Coupons & Offers</span>
                </div>
                <div class="data-item">
                    <span class="data-item-icon">⭐</span>
                    <span>Reviews & Ratings</span>
                </div>
            </div>
        </div>

        <!-- Note Section -->
        <div class="note-section">
            <span class="note-icon">💡</span>
            <div class="note-content">
                <h4>Before You Delete</h4>
                <p>If you're facing any issues with the app or have concerns, please contact our support team first.
                    We'd love to help resolve any problems and keep you as our valued customer.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="contact-section">
            <h3>Need Help?</h3>
            <p>Contact our support team if you have any questions</p>
            <div class="contact-buttons">
                <a href="mailto:support@thakarmart.com" class="contact-btn email">
                    <span>✉️</span>
                    visiontechnolabs@gmail.com
                </a>
                <a href="tel:+911800XXXXXX" class="contact-btn phone">
                    <span>📞</span>
                    +91-1800-XXX-XXXX
                </a>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 Thakar Mart. All rights reserved.</p>
        <p style="margin-top: 5px;">We're sad to see you go 😢</p>
    </div>

</body>

</html>