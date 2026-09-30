<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - Thakar Mart</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet">
    <style>
        :root {
            --primary: #667eea;
            --primary-dark: #764ba2;
            --primary-light: #8b9cf7;
            --primary-bg: #f8f9ff;
            --primary-bg-alt: #f0f2ff;
            --primary-border: rgba(102, 126, 234, 0.1);
            --primary-border-hover: rgba(102, 126, 234, 0.3);
            --primary-shadow: rgba(102, 126, 234, 0.3);
            --primary-shadow-lg: rgba(102, 126, 234, 0.45);
            --primary-glow: rgba(102, 126, 234, 0.12);
            --text-dark: #2d3748;
            --text-medium: #4a5568;
            --text-light: #718096;
            --text-muted: #a0aec0;
            --bg-body: #f5f6fa;
            --bg-white: #ffffff;
            --border-color: #e2e8f0;
            --border-light: #edf2f7;
            --success: #48bb78;
            --danger: #e53e3e;
            --warning: #f59e0b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-body);
            color: var(--text-dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

        /* ===== Scroll Progress Bar ===== */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--primary-dark));
            z-index: 1000;
            transition: width 0.1s ease-out;
            border-radius: 0 2px 2px 0;
            box-shadow: 0 0 10px var(--primary-shadow);
        }

        /* ===== Header ===== */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 20px rgba(102, 126, 234, 0.25);
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -15%;
            width: 280px;
            height: 280px;
            background: rgba(255, 255, 255, 0.07);
            border-radius: 50%;
            animation: headerShimmer 8s ease-in-out infinite;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -60%;
            left: -8%;
            width: 180px;
            height: 180px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 50%;
        }

        @keyframes headerShimmer {
            0%,
            100% {
                transform: translate(0, 0);
            }
            50% {
                transform: translate(20px, 10px);
            }
        }

        .header-inner {
            position: relative;
            z-index: 2;
            padding: 22px 20px;
        }

        .header .app-name {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: 0.85;
            margin-bottom: 6px;
            animation: fadeInDown 0.6s ease-out;
        }

        .header h1 {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 0.5px;
            animation: fadeInDown 0.6s ease-out 0.1s both;
        }

        .header .last-updated {
            font-size: 11px;
            opacity: 0.75;
            margin-top: 6px;
            font-weight: 400;
            animation: fadeInDown 0.6s ease-out 0.2s both;
        }

        .header .last-updated .material-symbols-outlined {
            font-size: 13px;
            vertical-align: middle;
            margin-right: 3px;
        }

        /* Header Stats Pills */
        .header-pills {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 12px;
            flex-wrap: wrap;
            animation: fadeInDown 0.6s ease-out 0.3s both;
        }

        .header-pill {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            padding: 6px 14px;
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .header-pill .material-symbols-outlined {
            font-size: 14px;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-12px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== Loading ===== */
        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 65vh;
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .loader {
            position: relative;
            width: 60px;
            height: 60px;
        }

        .loader-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-radius: 50%;
        }

        .loader-ring:nth-child(1) {
            border-top-color: var(--primary-dark);
            animation: spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        }

        .loader-ring:nth-child(2) {
            border-right-color: var(--primary);
            animation: spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite 0.15s;
            width: 80%;
            height: 80%;
            top: 10%;
            left: 10%;
        }

        .loader-ring:nth-child(3) {
            border-bottom-color: var(--primary-light);
            animation: spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite 0.3s;
            width: 60%;
            height: 60%;
            top: 20%;
            left: 20%;
        }

        .loader-dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: pulse 1.2s ease-in-out infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {
            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.5);
                opacity: 0.5;
            }
        }

        .loading-text {
            margin-top: 24px;
            color: var(--text-light);
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .loading-dots::after {
            content: '';
            animation: dots 1.5s steps(4, end) infinite;
        }

        @keyframes dots {
            0% {
                content: '';
            }
            25% {
                content: '.';
            }
            50% {
                content: '..';
            }
            75% {
                content: '...';
            }
            100% {
                content: '';
            }
        }

        /* ===== Skeleton Loading ===== */
        .skeleton-container {
            max-width: 820px;
            margin: 0 auto;
            padding: 24px 16px 40px;
        }

        .skeleton-card {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 32px 28px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .skeleton {
            background: linear-gradient(90deg, #edf2f7 25%, #e2e8f0 50%, #edf2f7 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            border-radius: 8px;
            display: block;
        }

        .skeleton-title {
            height: 24px;
            width: 60%;
            margin-bottom: 20px;
        }

        .skeleton-line {
            height: 14px;
            margin-bottom: 12px;
        }

        .skeleton-line:nth-child(2) {
            width: 100%;
        }

        .skeleton-line:nth-child(3) {
            width: 90%;
        }

        .skeleton-line:nth-child(4) {
            width: 95%;
        }

        .skeleton-line:nth-child(5) {
            width: 70%;
        }

        .skeleton-divider {
            height: 2px;
            width: 40px;
            margin: 28px 0 20px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            border-radius: 2px;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }

        /* ===== Content ===== */
        .content-container {
            max-width: 820px;
            margin: 0 auto;
            padding: 24px 16px 40px;
            animation: fadeInUp 0.5s ease-out;
        }

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

        /* Summary Card */
        .summary-card {
            background: linear-gradient(135deg, var(--primary-bg) 0%, var(--primary-bg-alt) 100%);
            border-radius: 16px;
            padding: 20px 24px;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary);
            display: flex;
            align-items: flex-start;
            gap: 14px;
            animation: fadeInUp 0.5s ease-out 0.1s both;
            border: 1px solid var(--primary-border);
            border-left: 4px solid var(--primary);
        }

        .summary-card .material-symbols-outlined {
            color: var(--primary);
            font-size: 28px;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .summary-card p {
            font-size: 13px;
            color: var(--text-medium);
            line-height: 1.7;
            font-weight: 400;
        }

        .summary-card strong {
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Table of Contents Card */
        .toc-card {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-light);
            animation: fadeInUp 0.5s ease-out 0.2s both;
            transition: all 0.3s ease;
        }

        .toc-card:hover {
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
        }

        .toc-card h3 {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toc-card h3 .icon-box {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toc-card h3 .icon-box .material-symbols-outlined {
            font-size: 18px;
            color: #fff;
        }

        .toc-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4px;
        }

        .toc-list li a {
            display: flex;
            align-items: center;
            padding: 9px 12px;
            border-radius: 10px;
            color: var(--text-medium);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.25s ease;
            gap: 10px;
        }

        .toc-list li a:hover {
            background: var(--primary-bg-alt);
            color: var(--primary);
            transform: translateX(4px);
        }

        .toc-list li a .toc-num {
            width: 26px;
            height: 26px;
            background: linear-gradient(135deg, #f7f8fc 0%, var(--border-light) 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            color: var(--primary);
            flex-shrink: 0;
            transition: all 0.25s ease;
        }

        .toc-list li a:hover .toc-num {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 12px var(--primary-shadow);
        }

        /* ===== Main Content Card ===== */
        .content {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 32px 28px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-light);
            animation: fadeInUp 0.5s ease-out 0.3s both;
            transition: all 0.3s ease;
        }

        .content:hover {
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
        }

        .content h2 {
            color: var(--text-dark);
            font-size: 17px;
            font-weight: 700;
            margin: 32px 0 14px 0;
            padding: 14px 0 12px 0;
            border-bottom: none;
            position: relative;
            display: flex;
            align-items: center;
            gap: 12px;
            scroll-margin-top: 100px;
        }

        .content h2::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            border-radius: 2px;
        }

        .content h2:first-child {
            margin-top: 0;
        }

        .content h2 .section-icon {
            width: 34px;
            height: 34px;
            background: linear-gradient(135deg, var(--primary-bg), var(--primary-bg-alt));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 1px solid var(--primary-border);
        }

        .content h2 .section-icon .material-symbols-outlined {
            font-size: 18px;
            color: var(--primary);
        }

        .content p {
            color: var(--text-medium);
            font-size: 14px;
            margin-bottom: 14px;
            text-align: justify;
            line-height: 1.8;
        }

        .content ul,
        .content ol {
            margin: 12px 0 18px 8px;
            color: var(--text-medium);
            padding-left: 0;
            list-style: none;
        }

        .content ul li,
        .content ol li {
            font-size: 14px;
            margin-bottom: 8px;
            padding: 10px 14px 10px 40px;
            position: relative;
            background: var(--primary-bg);
            border-radius: 10px;
            border: 1px solid var(--primary-border);
            line-height: 1.7;
            transition: all 0.25s ease;
        }

        .content ul li:hover,
        .content ol li:hover {
            background: var(--primary-bg-alt);
            border-color: var(--primary-border-hover);
            transform: translateX(4px);
        }

        .content ul li::before {
            content: '';
            position: absolute;
            left: 16px;
            top: 17px;
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
        }

        .content strong {
            color: var(--text-dark);
            font-weight: 600;
        }

        .content a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px dashed var(--primary);
            transition: all 0.2s ease;
        }

        .content a:hover {
            color: var(--primary-dark);
            border-bottom-style: solid;
        }

        /* Highlight Box inside content */
        .content .highlight-box {
            background: linear-gradient(135deg, #FFF8E1, #FFF3C4);
            border-left: 4px solid #FFA000;
            border-radius: 0 12px 12px 0;
            padding: 16px 20px;
            margin: 16px 0;
            font-size: 13px;
            color: #6D4C00;
            line-height: 1.7;
        }

        /* ===== Contact Section ===== */
        .contact-section {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 28px;
            margin-top: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-light);
            animation: fadeInUp 0.5s ease-out 0.4s both;
            transition: all 0.3s ease;
        }

        .contact-section:hover {
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
        }

        .contact-section h3 {
            color: var(--text-dark);
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .contact-section h3 .icon-box {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px var(--primary-shadow);
        }

        .contact-section h3 .icon-box .material-symbols-outlined {
            font-size: 20px;
            color: #fff;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            padding: 18px;
            background: linear-gradient(135deg, var(--primary-bg), var(--primary-bg-alt));
            border-radius: 14px;
            gap: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid var(--primary-border);
        }

        .contact-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px var(--primary-shadow);
            border-color: var(--primary-border-hover);
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
            box-shadow: 0 4px 15px var(--primary-shadow);
        }

        .contact-icon .material-symbols-outlined {
            font-size: 22px;
        }

        .contact-info {
            min-width: 0;
        }

        .contact-label {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 3px;
        }

        .contact-value {
            font-size: 14px;
            color: var(--text-dark);
            font-weight: 600;
            word-break: break-all;
        }

        /* ===== Error ===== */
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 65vh;
            padding: 30px;
            text-align: center;
            animation: fadeIn 0.4s ease-out;
        }

        .error-graphic {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #FFEBEE, #FFCDD2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            animation: errorFloat 3s ease-in-out infinite;
        }

        @keyframes errorFloat {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        .error-graphic .material-symbols-outlined {
            font-size: 48px;
            color: var(--danger);
        }

        .error-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .error-message {
            color: var(--text-muted);
            font-size: 14px;
            margin-bottom: 28px;
            max-width: 320px;
            line-height: 1.7;
        }

        .retry-btn {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            padding: 14px 36px;
            border-radius: 14px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px var(--primary-shadow);
            font-family: 'Inter', sans-serif;
        }

        .retry-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px var(--primary-shadow-lg);
        }

        .retry-btn:active {
            transform: translateY(0);
        }

        .retry-btn .material-symbols-outlined {
            font-size: 18px;
        }

        /* ===== Back to Top ===== */
        .back-to-top {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 20px var(--primary-shadow);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            z-index: 50;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px var(--primary-shadow-lg);
        }

        .back-to-top .material-symbols-outlined {
            font-size: 24px;
        }

        /* ===== Footer ===== */
        .footer {
            text-align: center;
            padding: 30px 20px;
            color: var(--text-muted);
            font-size: 12px;
            border-top: 1px solid var(--border-light);
            background: var(--bg-white);
            margin-top: 10px;
        }

        .footer-brand {
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .footer-links {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 24px;
        }

        .footer-links a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: linear-gradient(90deg, var(--primary), var(--primary-dark));
            transition: width 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        /* ===== Hidden ===== */
        .hidden {
            display: none !important;
        }

        /* ===== Responsive ===== */
        @media (max-width: 600px) {
            .header-inner {
                padding: 16px;
            }

            .header h1 {
                font-size: 19px;
            }

            .content-container,
            .skeleton-container {
                padding: 16px 12px 30px;
            }

            .content {
                padding: 22px 18px;
                border-radius: 16px;
            }

            .toc-list {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .summary-card {
                flex-direction: column;
                gap: 10px;
            }

            .content h2 {
                font-size: 15px;
            }

            .back-to-top {
                bottom: 16px;
                right: 16px;
                width: 44px;
                height: 44px;
                border-radius: 12px;
            }

            .header-pills {
                display: none;
            }

            .trips-card-header,
            .trips-card-body {
                padding: 20px 16px;
            }
        }

        /* ===== Custom Scrollbar ===== */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f0f2ff;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #c7d2fe, #a5b4fc);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #a5b4fc, var(--primary));
        }

        /* ===== Selection ===== */
        ::selection {
            background: rgba(102, 126, 234, 0.2);
            color: var(--text-dark);
        }

        /* ===== Print Styles ===== */
        @media print {
            .header {
                position: static;
                box-shadow: none;
            }

            .scroll-progress,
            .back-to-top,
            .header-pills {
                display: none !important;
            }

            .content,
            .toc-card,
            .contact-section {
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>
</head>

<body>

    <!-- Scroll Progress -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Header -->
    <div class="header">
        <div class="header-inner">
            <div class="app-name">visiontechnolabs</div>
            <h1>📋 Terms and Conditions</h1>
            <div class="last-updated" id="lastUpdated">
                <span class="material-symbols-outlined">schedule</span>
                Loading...
            </div>
            <div class="header-pills">
                <div class="header-pill">
                    <span class="material-symbols-outlined">verified</span>
                    Legally Binding
                </div>
                <div class="header-pill">
                    <span class="material-symbols-outlined">shield</span>
                    Your Rights Protected
                </div>
            </div>
        </div>
    </div>

    <!-- Loading with Skeleton -->
    <div id="loadingContainer">
        <div class="skeleton-container">
            <div class="skeleton-card">
                <div class="skeleton skeleton-title"></div>
                <div class="skeleton skeleton-line" style="width:100%"></div>
                <div class="skeleton skeleton-line" style="width:92%"></div>
                <div class="skeleton skeleton-line" style="width:85%"></div>
                <div class="skeleton skeleton-line" style="width:60%"></div>
                <div class="skeleton-divider"></div>
                <div class="skeleton skeleton-title" style="width:45%; margin-top:8px;"></div>
                <div class="skeleton skeleton-line" style="width:100%"></div>
                <div class="skeleton skeleton-line" style="width:88%"></div>
                <div class="skeleton skeleton-line" style="width:95%"></div>
                <div class="skeleton skeleton-line" style="width:72%"></div>
                <div class="skeleton-divider"></div>
                <div class="skeleton skeleton-title" style="width:52%; margin-top:8px;"></div>
                <div class="skeleton skeleton-line" style="width:100%"></div>
                <div class="skeleton skeleton-line" style="width:80%"></div>
                <div class="skeleton skeleton-line" style="width:90%"></div>
            </div>
        </div>
    </div>

    <!-- Error -->
    <div class="error-container hidden" id="errorContainer">
        <div class="error-graphic">
            <span class="material-symbols-outlined">cloud_off</span>
        </div>
        <div class="error-title">Oops! Something went wrong</div>
        <p class="error-message" id="errorMessage">
            Failed to load content. Please check your connection and try again.
        </p>
        <button class="retry-btn" onclick="fetchTerms()">
            <span class="material-symbols-outlined">refresh</span>
            Try Again
        </button>
    </div>

    <!-- Content -->
    <div class="content-container hidden" id="contentContainer">

        <!-- Summary Card -->
        <!-- <div class="summary-card">
            <span class="material-symbols-outlined">info</span>
            <p>
                <strong>Please read carefully.</strong> These Terms and Conditions govern your use of Thakar Mart
                services. By accessing or using our platform, you agree to be bound by these terms.
            </p>
        </div> -->

        <!-- Table of Contents -->
        <div class="toc-card" id="tocCard">
            <h3>
                <span class="icon-box">
                    <span class="material-symbols-outlined">list_alt</span>
                </span>
                Table of Contents
            </h3>
            <ul class="toc-list" id="tocList">
                <!-- Dynamically populated -->
            </ul>
        </div>

        <!-- Terms Content -->
        <div class="content" id="termsContent">
            <!-- Terms content will be loaded here -->
        </div>

        <!-- Contact Section -->
        <div class="contact-section">
            <h3>
                <span class="icon-box">
                    <span class="material-symbols-outlined">support_agent</span>
                </span>
                Need Help? Contact Us
            </h3>
            <div class="contact-grid">
                <div class="contact-card" id="emailCard">
                    <div class="contact-icon">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <div class="contact-info">
                        <div class="contact-label">Email</div>
                        <div class="contact-value" id="contactEmail">—</div>
                    </div>
                </div>
                <div class="contact-card" id="phoneCard">
                    <div class="contact-icon">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <div class="contact-info">
                        <div class="contact-label">Phone</div>
                        <div class="contact-value" id="contactPhone">—</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <button class="back-to-top" id="backToTop" onclick="scrollToTop()">
        <span class="material-symbols-outlined">keyboard_arrow_up</span>
    </button>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 <span class="footer-brand">Thakar Mart</span>. All rights reserved.</p>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Support</a>
        </div>
    </div>

    <script src="https://ecom.visiontechnolabs.com/assets/js/jquery.min.js"></script>

    <script>
        // API URL
        const API_URL = "http://localhost/bhagwatienterprise/index.php/api/get_terms";

        // DOM Elements
        const loadingContainer = document.getElementById('loadingContainer');
        const errorContainer = document.getElementById('errorContainer');
        const contentContainer = document.getElementById('contentContainer');
        const termsContent = document.getElementById('termsContent');
        const lastUpdated = document.getElementById('lastUpdated');
        const errorMessage = document.getElementById('errorMessage');
        const contactEmail = document.getElementById('contactEmail');
        const contactPhone = document.getElementById('contactPhone');
        const scrollProgress = document.getElementById('scrollProgress');
        const backToTopBtn = document.getElementById('backToTop');
        const tocList = document.getElementById('tocList');
        const tocCard = document.getElementById('tocCard');

        // Show/Hide functions
        function showLoading() {
            loadingContainer.classList.remove('hidden');
            errorContainer.classList.add('hidden');
            contentContainer.classList.add('hidden');
        }

        function showError(message) {
            loadingContainer.classList.add('hidden');
            errorContainer.classList.remove('hidden');
            contentContainer.classList.add('hidden');
            errorMessage.textContent = message;
        }

        function showContent() {
            loadingContainer.classList.add('hidden');
            errorContainer.classList.add('hidden');
            contentContainer.classList.remove('hidden');
        }

        // Section icons mapping
        const sectionIcons = [
            'gavel', 'description', 'shopping_cart', 'payments',
            'local_shipping', 'assignment_return', 'security',
            'privacy_tip', 'cookie', 'block', 'update',
            'contact_support', 'balance', 'info'
        ];

        function getSectionIcon(index) {
            return sectionIcons[index % sectionIcons.length];
        }

        // Build Table of Contents from h2 headings
        function buildTOC() {
            const headings = termsContent.querySelectorAll('h2');
            if (headings.length === 0) {
                tocCard.classList.add('hidden');
                return;
            }

            tocList.innerHTML = '';
            headings.forEach((heading, index) => {
                const id = 'section-' + (index + 1);
                heading.setAttribute('id', id);

                // Add section icon to heading
                const iconSpan = document.createElement('span');
                iconSpan.className = 'section-icon';
                iconSpan.innerHTML = `<span class="material-symbols-outlined">${getSectionIcon(index)}</span>`;
                heading.insertBefore(iconSpan, heading.firstChild);

                // Create TOC item
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = '#' + id;
                a.innerHTML = `<span class="toc-num">${String(index + 1).padStart(2, '0')}</span>${heading.textContent}`;

                // Smooth scroll with offset
                a.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.getElementById(id);
                    if (target) {
                        const headerHeight = document.querySelector('.header').offsetHeight;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                    }
                });

                li.appendChild(a);
                tocList.appendChild(li);
            });
        }

        // Scroll Progress & Back to Top
        window.addEventListener('scroll', () => {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            if (scrollHeight > 0) {
                const progress = (scrollTop / scrollHeight) * 100;
                scrollProgress.style.width = progress + '%';
            }

            if (scrollTop > 400) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Contact card click handlers
        document.getElementById('emailCard').addEventListener('click', function () {
            const email = contactEmail.textContent;
            if (email && email !== '—') {
                window.location.href = 'mailto:' + email;
            }
        });

        document.getElementById('phoneCard').addEventListener('click', function () {
            const phone = contactPhone.textContent;
            if (phone && phone !== '—') {
                window.location.href = 'tel:' + phone;
            }
        });

        // Fetch Terms and Conditions
        async function fetchTerms() {
            showLoading();

            try {
                const response = await fetch(API_URL);

                if (!response.ok) {
                    throw new Error("HTTP error " + response.status);
                }

                const result = await response.json();
                console.log(result);

                if (result.status === true && result.data) {
                    const data = result.data;

                    if (data.last_updated) {
                        lastUpdated.innerHTML =
                            '<span class="material-symbols-outlined">schedule</span> Last Updated: ' + data.last_updated;
                    }

                    if (data.content) {
                        termsContent.innerHTML = data.content;
                    }

                    if (data.contact) {
                        contactEmail.innerText = data.contact.email || "—";
                        contactPhone.innerText = data.contact.phone || "—";
                    }

                    buildTOC();
                    showContent();

                } else {
                    showError("Failed to load Terms and Conditions. Please try again.");
                }

            } catch (error) {
                console.error("Fetch Error:", error);
                showError("Network error. Please check your internet connection and try again.");
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', fetchTerms);
    </script>

</body>

</html>