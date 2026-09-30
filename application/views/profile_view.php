<style>
  /* ===== Redesigned Profile Page ===== */
  :root {
    --p-primary: #6366f1;
    --p-primary-hover: #4f46e5;
    --p-primary-light: #eef2ff;
    --p-primary-glow: rgba(99, 102, 241, 0.25);
    --p-secondary: #94a3b8;
    --p-success: #10b981;
    --p-success-light: #ecfdf5;
    --p-danger: #ef4444;
    --p-warning: #f59e0b;
    --p-dark: #0f172a;
    --p-text: #334155;
    --p-text-light: #64748b;
    --p-border: #e2e8f0;
    --p-bg: #f1f5f9;
    --p-white: #ffffff;
    --p-card-shadow: 0 1px 3px rgba(0, 0, 0, 0.06), 0 6px 16px rgba(0, 0, 0, 0.04);
    --p-card-shadow-hover: 0 4px 12px rgba(0, 0, 0, 0.08), 0 12px 28px rgba(0, 0, 0, 0.06);
    --p-radius: 20px;
    --p-radius-sm: 12px;
    --p-radius-xs: 8px;
    --p-transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  }

  /* ===== Wrapper ===== */
  .pf-wrapper {
    padding: 2rem 0;
    min-height: 80vh;
    position: relative;
  }

  .pf-wrapper::before {
    content: '';
    position: fixed;
    top: -120px;
    right: -120px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
  }

  .pf-wrapper::after {
    content: '';
    position: fixed;
    bottom: -80px;
    left: -80px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.06) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
  }

  /* ===== Left Profile Card ===== */
  .pf-card {
    background: var(--p-white);
    border-radius: var(--p-radius);
    box-shadow: var(--p-card-shadow);
    border: 1px solid var(--p-border);
    overflow: hidden;
    transition: var(--p-transition);
    position: relative;
  }

  .pf-card:hover {
    box-shadow: var(--p-card-shadow-hover);
  }

  /* Banner */
  .pf-banner {
    height: 160px;
    position: relative;
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 40%, #a78bfa 70%, #c4b5fd 100%);
    overflow: hidden;
  }

  .pf-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse at 25% 80%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
      radial-gradient(ellipse at 75% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
  }

  .pf-banner-shape {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
  }

  .pf-banner-shape svg {
    display: block;
    width: 100%;
    height: 50px;
  }

  /* Floating shapes in banner */
  .pf-banner .float-shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.07);
    animation: floatShape 8s ease-in-out infinite;
  }

  .pf-banner .float-shape:nth-child(1) {
    width: 80px;
    height: 80px;
    top: 15px;
    right: 40px;
    animation-delay: 0s;
  }

  .pf-banner .float-shape:nth-child(2) {
    width: 50px;
    height: 50px;
    top: 60px;
    right: 140px;
    animation-delay: 2s;
  }

  .pf-banner .float-shape:nth-child(3) {
    width: 35px;
    height: 35px;
    top: 20px;
    left: 60px;
    animation-delay: 4s;
  }

  @keyframes floatShape {

    0%,
    100% {
      transform: translateY(0) scale(1);
      opacity: 0.5;
    }

    50% {
      transform: translateY(-12px) scale(1.1);
      opacity: 0.8;
    }
  }

  /* Avatar */
  .pf-avatar-area {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: -60px;
    padding: 0 1.75rem;
    position: relative;
    z-index: 2;
  }

  .pf-avatar-container {
    position: relative;
    cursor: pointer;
  }

  .pf-avatar-border {
    width: 128px;
    height: 128px;
    border-radius: 50%;
    padding: 4px;
    background: conic-gradient(from 0deg,
        var(--p-primary),
        #8b5cf6,
        #a78bfa,
        var(--p-success),
        #8b5cf6,
        var(--p-primary));
    animation: avatarBorderSpin 6s linear infinite;
  }

  @keyframes avatarBorderSpin {
    to {
      filter: hue-rotate(360deg);
    }
  }

  .pf-avatar-img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid var(--p-white);
    transition: var(--p-transition);
    display: block;
  }

  .pf-avatar-container:hover .pf-avatar-img {
    transform: scale(1.03);
    filter: brightness(0.85);
  }

  .pf-avatar-overlay {
    position: absolute;
    inset: 4px;
    border-radius: 50%;
    background: rgba(15, 23, 42, 0.45);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 2px;
    opacity: 0;
    transition: var(--p-transition);
    pointer-events: none;
  }

  .pf-avatar-container:hover .pf-avatar-overlay {
    opacity: 1;
  }

  .pf-avatar-overlay i {
    color: var(--p-white);
    font-size: 1.5rem;
  }

  .pf-avatar-overlay span {
    color: var(--p-white);
    font-size: 0.65rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .pf-online-dot {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 20px;
    height: 20px;
    background: var(--p-success);
    border: 3px solid var(--p-white);
    border-radius: 50%;
    z-index: 3;
    animation: pulseOnline 2.5s ease-in-out infinite;
  }

  @keyframes pulseOnline {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4);
    }

    50% {
      box-shadow: 0 0 0 6px rgba(16, 185, 129, 0);
    }
  }

  /* Profile Info */
  .pf-info {
    text-align: center;
    padding: 1rem 1.75rem 0;
  }

  .pf-name {
    font-size: 1.35rem;
    font-weight: 800;
    color: var(--p-dark);
    margin: 0 0 6px;
    letter-spacing: -0.4px;
    line-height: 1.3;
  }

  .pf-role-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 14px;
    border-radius: 50px;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    background: var(--p-primary-light);
    color: var(--p-primary);
    border: 1px solid rgba(99, 102, 241, 0.15);
  }

  .pf-role-chip .chip-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--p-success);
  }

  /* Stats */
  .pf-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0;
    margin: 1.5rem 1.75rem 0;
    padding: 1.25rem 0;
    border-top: 1px solid var(--p-border);
    border-bottom: 1px solid var(--p-border);
  }

  .pf-stat {
    text-align: center;
    position: relative;
    padding: 0.5rem 0;
    cursor: default;
    transition: var(--p-transition);
  }

  .pf-stat:hover {
    transform: translateY(-2px);
  }

  .pf-stat:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 28px;
    width: 1px;
    background: var(--p-border);
  }

  .pf-stat-num {
    font-size: 1.35rem;
    font-weight: 800;
    color: var(--p-dark);
    line-height: 1;
    background: linear-gradient(135deg, var(--p-primary), #8b5cf6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .pf-stat-label {
    font-size: 0.68rem;
    color: var(--p-text-light);
    text-transform: uppercase;
    letter-spacing: 0.8px;
    font-weight: 600;
    margin-top: 4px;
  }

  /* Info List */
  .pf-info-list {
    padding: 1.25rem 1.75rem 1.75rem;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .pf-info-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 10px 14px;
    border-radius: var(--p-radius-sm);
    transition: var(--p-transition);
    cursor: default;
  }

  .pf-info-item:hover {
    background: var(--p-bg);
  }

  .pf-info-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.05rem;
    flex-shrink: 0;
  }

  .pf-info-icon.indigo {
    background: #eef2ff;
    color: #6366f1;
  }

  .pf-info-icon.emerald {
    background: #ecfdf5;
    color: #10b981;
  }

  .pf-info-icon.amber {
    background: #fffbeb;
    color: #f59e0b;
  }

  .pf-info-text {
    flex: 1;
    min-width: 0;
  }

  .pf-info-label {
    font-size: 0.68rem;
    font-weight: 600;
    color: var(--p-text-light);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    line-height: 1;
    margin-bottom: 3px;
  }

  .pf-info-value {
    font-size: 0.88rem;
    font-weight: 600;
    color: var(--p-dark);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  /* ===== Right Form Card ===== */
  .pf-form-card {
    background: var(--p-white);
    border-radius: var(--p-radius);
    box-shadow: var(--p-card-shadow);
    border: 1px solid var(--p-border);
    overflow: hidden;
    transition: var(--p-transition);
  }

  .pf-form-card:hover {
    box-shadow: var(--p-card-shadow-hover);
  }

  /* Form Header */
  .pf-form-header {
    padding: 1.5rem 2rem;
    border-bottom: 1px solid var(--p-border);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    background: linear-gradient(to right, rgba(99, 102, 241, 0.02), rgba(139, 92, 246, 0.02));
  }

  .pf-form-title-group {
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .pf-form-icon {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    background: linear-gradient(135deg, var(--p-primary), #8b5cf6);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--p-white);
    font-size: 1.2rem;
    flex-shrink: 0;
    box-shadow: 0 4px 12px var(--p-primary-glow);
  }

  .pf-form-title {
    font-size: 1.15rem;
    font-weight: 800;
    color: var(--p-dark);
    margin: 0;
    letter-spacing: -0.3px;
  }

  .pf-form-subtitle {
    font-size: 0.8rem;
    color: var(--p-text-light);
    margin: 2px 0 0;
    font-weight: 400;
  }

  .pf-verified-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 50px;
    font-size: 0.72rem;
    font-weight: 700;
    background: var(--p-success-light);
    color: var(--p-success);
    border: 1px solid rgba(16, 185, 129, 0.15);
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .pf-verified-badge i {
    font-size: 0.9rem;
  }

  /* Form Body */
  .pf-form-body {
    padding: 2rem;
  }

  /* Tabs */
  .pf-tabs {
    display: flex;
    gap: 4px;
    padding: 4px;
    background: var(--p-bg);
    border-radius: var(--p-radius-sm);
    margin-bottom: 2rem;
  }

  .pf-tab {
    flex: 1;
    padding: 10px 16px;
    border: none;
    border-radius: var(--p-radius-xs);
    background: transparent;
    color: var(--p-text-light);
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: var(--p-transition);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
  }

  .pf-tab:hover {
    color: var(--p-text);
  }

  .pf-tab.active {
    background: var(--p-white);
    color: var(--p-primary);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
  }

  .pf-tab i {
    font-size: 1rem;
  }

  /* Tab Content */
  .pf-tab-content {
    display: none;
    animation: tabFadeIn 0.3s ease;
  }

  .pf-tab-content.active {
    display: block;
  }

  @keyframes tabFadeIn {
    from {
      opacity: 0;
      transform: translateY(8px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Form Row */
  .pf-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
  }

  .pf-form-row.single {
    grid-template-columns: 1fr;
  }

  /* Form Group */
  .pf-field {
    margin-bottom: 1.25rem;
  }

  .pf-label {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.78rem;
    font-weight: 700;
    color: var(--p-text);
    text-transform: uppercase;
    letter-spacing: 0.7px;
    margin-bottom: 8px;
  }

  .pf-label i {
    color: var(--p-primary);
    font-size: 0.85rem;
  }

  .pf-label .required {
    color: var(--p-danger);
    margin-left: 2px;
  }

  .pf-input-wrap {
    position: relative;
  }

  .pf-input-wrap .pf-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--p-secondary);
    font-size: 1.1rem;
    transition: var(--p-transition);
    z-index: 1;
    pointer-events: none;
  }

  .pf-input {
    width: 100%;
    padding: 13px 16px 13px 44px;
    border: 2px solid var(--p-border);
    border-radius: var(--p-radius-sm);
    font-size: 0.92rem;
    font-weight: 500;
    color: var(--p-dark);
    background: var(--p-white);
    transition: var(--p-transition);
    outline: none;
    font-family: inherit;
  }

  .pf-input::placeholder {
    color: #cbd5e1;
    font-weight: 400;
  }

  .pf-input:hover {
    border-color: #cbd5e1;
  }

  .pf-input:focus {
    border-color: var(--p-primary);
    box-shadow: 0 0 0 4px var(--p-primary-glow);
    background: var(--p-white);
  }

  .pf-input-wrap:focus-within .pf-icon {
    color: var(--p-primary);
  }

  /* Password Toggle */
  .pf-pw-toggle {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    padding: 4px;
    color: var(--p-secondary);
    font-size: 1.1rem;
    cursor: pointer;
    transition: var(--p-transition);
    z-index: 1;
    border-radius: 6px;
  }

  .pf-pw-toggle:hover {
    color: var(--p-primary);
    background: var(--p-primary-light);
  }

  /* Strength Meter */
  .pf-strength-bar {
    display: flex;
    gap: 4px;
    margin-top: 8px;
  }

  .pf-strength-seg {
    flex: 1;
    height: 4px;
    border-radius: 4px;
    background: var(--p-border);
    transition: var(--p-transition);
  }

  .pf-strength-seg.active.weak {
    background: var(--p-danger);
  }

  .pf-strength-seg.active.medium {
    background: var(--p-warning);
  }

  .pf-strength-seg.active.strong {
    background: var(--p-success);
  }

  .pf-strength-text {
    font-size: 0.7rem;
    font-weight: 600;
    margin-top: 4px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Section Divider */
  .pf-divider {
    display: flex;
    align-items: center;
    gap: 14px;
    margin: 1.5rem 0;
  }

  .pf-divider::before,
  .pf-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(to right, transparent, var(--p-border), transparent);
  }

  .pf-divider span {
    font-size: 0.72rem;
    font-weight: 700;
    color: var(--p-text-light);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 4px 12px;
    background: var(--p-bg);
    border-radius: 50px;
  }

  /* Form Actions */
  .pf-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid var(--p-border);
  }

  .pf-btn-save {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 13px 32px;
    border: none;
    border-radius: var(--p-radius-sm);
    background: linear-gradient(135deg, var(--p-primary), #8b5cf6);
    color: var(--p-white);
    font-size: 0.9rem;
    font-weight: 700;
    cursor: pointer;
    transition: var(--p-transition);
    position: relative;
    overflow: hidden;
    letter-spacing: 0.2px;
    font-family: inherit;
  }

  .pf-btn-save::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
    transition: 0.6s;
  }

  .pf-btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px var(--p-primary-glow);
  }

  .pf-btn-save:hover::before {
    left: 100%;
  }

  .pf-btn-save:active {
    transform: translateY(0);
  }

  .pf-btn-save:disabled {
    opacity: 0.65;
    cursor: not-allowed;
    transform: none !important;
    box-shadow: none !important;
  }

  .pf-btn-save .pf-spinner {
    display: none;
    width: 18px;
    height: 18px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-top-color: white;
    border-radius: 50%;
    animation: pfSpin 0.6s linear infinite;
  }

  .pf-btn-save.loading .pf-spinner {
    display: inline-block;
  }

  .pf-btn-save.loading .save-label {
    display: none;
  }

  .pf-btn-save.loading .loading-label {
    display: inline;
  }

  .loading-label {
    display: none;
  }

  @keyframes pfSpin {
    to {
      transform: rotate(360deg);
    }
  }

  .pf-btn-reset {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 24px;
    border: 2px solid var(--p-border);
    border-radius: var(--p-radius-sm);
    background: var(--p-white);
    color: var(--p-text-light);
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: var(--p-transition);
    font-family: inherit;
  }

  .pf-btn-reset:hover {
    border-color: var(--p-danger);
    color: var(--p-danger);
    background: #fef2f2;
  }

  .pf-btn-discard {
    margin-left: auto;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    background: none;
    border: none;
    color: var(--p-text-light);
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: var(--p-transition);
    border-radius: var(--p-radius-xs);
    font-family: inherit;
  }

  .pf-btn-discard:hover {
    color: var(--p-danger);
    background: #fef2f2;
  }

  /* ===== Toast ===== */
  .pf-toast {
    position: fixed;
    top: 28px;
    right: 28px;
    z-index: 99999;
    min-width: 340px;
    padding: 16px 22px;
    border-radius: 16px;
    color: var(--p-white);
    font-weight: 600;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 14px;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.18);
    transform: translateX(calc(100% + 40px));
    transition: transform 0.45s cubic-bezier(0.34, 1.56, 0.64, 1);
    backdrop-filter: blur(10px);
  }

  .pf-toast.show {
    transform: translateX(0);
  }

  .pf-toast.success {
    background: linear-gradient(135deg, #10b981, #059669);
  }

  .pf-toast.error {
    background: linear-gradient(135deg, #ef4444, #dc2626);
  }

  .pf-toast-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
  }

  .pf-toast-close {
    margin-left: auto;
    background: none;
    border: none;
    color: rgba(255, 255, 255, 0.7);
    font-size: 1.1rem;
    cursor: pointer;
    padding: 2px;
    transition: var(--p-transition);
  }

  .pf-toast-close:hover {
    color: white;
  }

  .pf-toast-progress {
    position: absolute;
    bottom: 0;
    left: 16px;
    right: 16px;
    height: 3px;
    border-radius: 3px;
    background: rgba(255, 255, 255, 0.3);
    overflow: hidden;
  }

  .pf-toast-progress-bar {
    height: 100%;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px;
    animation: toastProgress 3.5s linear forwards;
  }

  @keyframes toastProgress {
    from {
      width: 100%;
    }

    to {
      width: 0%;
    }
  }

  /* ===== Animations ===== */
  .pf-slide-up {
    opacity: 0;
    animation: pfSlideUp 0.65s ease forwards;
  }

  .pf-slide-up:nth-child(1) {
    animation-delay: 0.1s;
  }

  .pf-slide-up:nth-child(2) {
    animation-delay: 0.2s;
  }

  @keyframes pfSlideUp {
    from {
      opacity: 0;
      transform: translateY(24px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* ===== Responsive ===== */
  @media (max-width: 992px) {
    .pf-wrapper {
      padding: 1rem 0;
    }

    .pf-form-body {
      padding: 1.5rem;
    }

    .pf-form-row {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 576px) {
    .pf-form-header {
      flex-direction: column;
      align-items: flex-start;
    }

    .pf-actions {
      flex-direction: column;
    }

    .pf-actions .pf-btn-save,
    .pf-actions .pf-btn-reset {
      width: 100%;
      justify-content: center;
    }

    .pf-btn-discard {
      margin-left: 0;
      width: 100%;
      justify-content: center;
    }

    .pf-tabs {
      flex-direction: column;
    }

    .pf-banner {
      height: 120px;
    }

    .pf-avatar-border {
      width: 110px;
      height: 110px;
    }

    .pf-avatar-area {
      margin-top: -50px;
    }

    .pf-stats {
      margin: 1rem 1.25rem 0;
    }

    .pf-info-list {
      padding: 1rem 1.25rem 1.25rem;
    }
  }
</style>

<div class="page-wrapper">
  <div class="page-content">
    <div class="pf-wrapper">
      <div class="row g-4">

        <!-- ========== LEFT – Profile Card ========== -->
        <div class="col-lg-4 pf-slide-up">
          <div class="pf-card">

            <!-- Banner -->
            <div class="pf-banner">
              <div class="float-shape"></div>
              <div class="float-shape"></div>
              <div class="float-shape"></div>
              <div class="pf-banner-shape">
                <svg viewBox="0 0 500 50" preserveAspectRatio="none">
                  <path d="M0,50 L0,20 Q250,-10 500,20 L500,50 Z" fill="white" />
                </svg>
              </div>
            </div>

            <!-- Avatar -->
            <div class="pf-avatar-area">
              <div class="pf-avatar-container" id="pf-avatar-trigger">
                <input type="file" name="profile_image" id="pf-avatar-upload" accept="image/*" style="display: none;">
                <div class="pf-avatar-border">
                  <?php
                  $img_url = !empty($profile->profile_image)
                    ? base_url($profile->profile_image)
                    : base_url('assets/images/programmer.png');
                  ?>
                  <img src="<?= $img_url; ?>" alt="Profile" class="pf-avatar-img" id="pf-avatar-preview" />
                </div>
                <div class="pf-avatar-overlay">
                  <i class="bx bx-camera"></i>
                  <span>Change</span>
                </div>
                <div class="pf-online-dot"></div>
              </div>
            </div>

            <!-- Info -->
            <div class="pf-info">
              <h4 class="pf-name"><?= isset($profile->name) ? ucfirst($profile->name) : 'User'; ?></h4>
              <div class="pf-role-chip">
                <span class="chip-dot"></span>
                <?= !empty($profile->admin_code) ? 'Administrator' : 'User'; ?>
              </div>
            </div>

            <!-- Stats -->
            <div class="pf-stats">
              <div class="pf-stat">
                <div class="pf-stat-num">24</div>
                <div class="pf-stat-label">Projects</div>
              </div>
              <div class="pf-stat">
                <div class="pf-stat-num">128</div>
                <div class="pf-stat-label">Tasks</div>
              </div>
              <div class="pf-stat">
                <div class="pf-stat-num">4.9</div>
                <div class="pf-stat-label">Rating</div>
              </div>
            </div>

          </div>
        </div>

        <!-- ========== RIGHT – Edit Form ========== -->
        <div class="col-lg-8 pf-slide-up">
          <form id="pf-update-form" enctype="multipart/form-data">
            <div class="pf-form-card">

              <!-- Header -->
              <div class="pf-form-header">
                <div class="pf-form-title-group">
                  <div class="pf-form-icon">
                    <i class="bx bx-user-circle"></i>
                  </div>
                  <div>
                    <h5 class="pf-form-title">Edit Profile</h5>
                    <p class="pf-form-subtitle">Update your personal details and security settings</p>
                  </div>
                </div>
                <span class="pf-verified-badge">
                  <i class="bx bxs-badge-check"></i>
                  Verified
                </span>
              </div>

              <!-- Body -->
              <div class="pf-form-body">

                <!-- Tabs -->
                <div class="pf-tabs">
                  <button type="button" class="pf-tab active" data-tab="personal">
                    <i class="bx bx-user"></i> Personal
                  </button>
                  <button type="button" class="pf-tab" data-tab="security">
                    <i class="bx bx-shield-quarter"></i> Security
                  </button>
                </div>

                <!-- Tab: Personal -->
                <div class="pf-tab-content active" id="tab-personal">
                  <div class="pf-form-row">
                    <!-- Full Name -->
                    <div class="pf-field">
                      <label class="pf-label">
                        <i class="bx bx-user"></i> Full Name <span class="required">*</span>
                      </label>
                      <div class="pf-input-wrap">
                        <i class="bx bx-user pf-icon"></i>
                        <input type="text" class="pf-input" name="name" value="<?= $profile->name; ?>"
                          placeholder="Enter your full name" />
                      </div>
                    </div>

                    <!-- Email -->
                    <div class="pf-field">
                      <label class="pf-label">
                        <i class="bx bx-envelope"></i> Email Address <span class="required">*</span>
                      </label>
                      <div class="pf-input-wrap">
                        <i class="bx bx-envelope pf-icon"></i>
                        <input type="email" class="pf-input" name="email" value="<?= $profile->email; ?>"
                          placeholder="Enter your email" />
                      </div>
                    </div>
                  </div>

                  <div class="pf-form-row single">
                    <!-- Phone -->
                    <div class="pf-field">
                      <label class="pf-label">
                        <i class="bx bx-phone"></i> Phone Number
                      </label>
                      <div class="pf-input-wrap">
                        <i class="bx bx-phone pf-icon"></i>
                        <input type="tel" class="pf-input" name="mobile" value="<?= $profile->mobile; ?>"
                          placeholder="Enter your phone number" />
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tab: Security -->
                <div class="pf-tab-content" id="tab-security">
                  <div class="pf-form-row single">
                    <!-- New Password -->
                    <div class="pf-field">
                      <label class="pf-label">
                        <i class="bx bx-lock-alt"></i> New Password
                      </label>
                      <div class="pf-input-wrap">
                        <i class="bx bx-lock-alt pf-icon"></i>
                        <input type="password" class="pf-input" name="password" id="pf-password"
                          placeholder="Leave blank to keep current" />
                        <button type="button" class="pf-pw-toggle" id="pf-pw-toggle">
                          <i class="bx bx-hide"></i>
                        </button>
                      </div>
                      <!-- Strength Meter -->
                      <div class="pf-strength-bar" id="pf-strength-bar">
                        <div class="pf-strength-seg" id="seg1"></div>
                        <div class="pf-strength-seg" id="seg2"></div>
                        <div class="pf-strength-seg" id="seg3"></div>
                        <div class="pf-strength-seg" id="seg4"></div>
                      </div>
                      <div class="pf-strength-text" id="pf-strength-text"></div>
                    </div>
                  </div>

                  <div class="pf-form-row single">
                    <!-- Confirm Password -->
                    <div class="pf-field">
                      <label class="pf-label">
                        <i class="bx bx-lock-alt"></i> Confirm Password
                      </label>
                      <div class="pf-input-wrap">
                        <i class="bx bx-check-shield pf-icon"></i>
                        <input type="password" class="pf-input" name="password_confirm" id="pf-password-confirm"
                          placeholder="Re-enter new password" />
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Actions -->
                <div class="pf-actions">
                  <button type="button" class="pf-btn-save" id="pf-btn-save">
                    <span class="pf-spinner"></span>
                    <i class="bx bx-check save-label"></i>
                    <span class="save-label">Save Changes</span>
                    <span class="loading-label">Saving...</span>
                  </button>
                  <button type="reset" class="pf-btn-reset">
                    <i class="bx bx-revision"></i> Reset
                  </button>
                  <button type="button" class="pf-btn-discard" id="pf-btn-discard">
                    <i class="bx bx-x"></i> Discard
                  </button>
                </div>

              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Toast -->
<div class="pf-toast" id="pf-toast">
  <div class="pf-toast-icon" id="pf-toast-icon">
    <i class="bx bx-check"></i>
  </div>
  <span id="pf-toast-msg">Success!</span>
  <button class="pf-toast-close" id="pf-toast-close"><i class="bx bx-x"></i></button>
  <div class="pf-toast-progress">
    <div class="pf-toast-progress-bar"></div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function () {

    /* =============================================
     *  Toast Helper (defined first so others can use it)
     * ============================================= */
    var toastTimer;

    function pfToast(msg, type) {
      clearTimeout(toastTimer);
      var t = $("#pf-toast");
      var icon = type === "success" ? "bx-check-circle" : "bx-error-circle";

      t.removeClass("show success error").addClass(type);
      $("#pf-toast-icon").html('<i class="bx ' + icon + '"></i>');
      $("#pf-toast-msg").text(msg);

      // Reset progress bar animation
      var bar = $(".pf-toast-progress-bar");
      bar.css("animation", "none");
      setTimeout(function () { bar.css("animation", ""); }, 10);

      setTimeout(function () { t.addClass("show"); }, 30);
      toastTimer = setTimeout(function () { t.removeClass("show"); }, 3800);
    }

    $("#pf-toast-close").on("click", function () {
      clearTimeout(toastTimer);
      $("#pf-toast").removeClass("show");
    });

    /* =============================================
     *  Tab Switching
     * ============================================= */
    $(".pf-tab").on("click", function () {
      $(".pf-tab").removeClass("active");
      $(this).addClass("active");
      var tab = $(this).data("tab");
      $(".pf-tab-content").removeClass("active");
      $("#tab-" + tab).addClass("active");
    });

    /* =============================================
     *  Avatar Upload – Click Trigger
     * ============================================= */
    $(document).on("click", "#pf-avatar-trigger", function (e) {
      // Prevent the click from firing twice when clicking the overlay
      if ($(e.target).closest("#pf-avatar-upload").length) return;
      e.preventDefault();
      $("#pf-avatar-upload").trigger("click");
    });

    /* =============================================
     *  Avatar Upload – File Change (preview)
     * ============================================= */
    $("#pf-avatar-upload").on("change", function () {
      var file = this.files[0];
      if (!file) return;

      if (file.size > 5 * 1024 * 1024) {
        pfToast("File size must be under 5 MB", "error");
        $(this).val("");          // clear the bad selection
        return;
      }

      if (!file.type.startsWith("image/")) {
        pfToast("Please select a valid image file", "error");
        $(this).val("");
        return;
      }

      var reader = new FileReader();
      reader.onload = function (e) {
        $("#pf-avatar-preview").attr("src", e.target.result);
      };
      reader.readAsDataURL(file);

      pfToast("Photo selected — click Save to apply", "success");
    });

    /* =============================================
     *  Password Toggle (show / hide)
     * ============================================= */
    $("#pf-pw-toggle").on("click", function () {
      var field = $("#pf-password");
      var icon = $(this).find("i");
      if (field.attr("type") === "password") {
        field.attr("type", "text");
        icon.removeClass("bx-hide").addClass("bx-show");
      } else {
        field.attr("type", "password");
        icon.removeClass("bx-show").addClass("bx-hide");
      }
    });

    /* =============================================
     *  Password Strength Meter
     * ============================================= */
    $("#pf-password").on("input", function () {
      var val = $(this).val();
      var strength = 0;

      if (val.length >= 6) strength++;
      if (val.length >= 10) strength++;
      if (/[A-Z]/.test(val) && /[a-z]/.test(val)) strength++;
      if (/[0-9]/.test(val) && /[^A-Za-z0-9]/.test(val)) strength++;

      var segs = ["#seg1", "#seg2", "#seg3", "#seg4"];
      var labels = ["", "Weak", "Fair", "Good", "Strong"];
      var classes = ["", "weak", "weak", "medium", "strong"];
      var colors = ["", "#ef4444", "#ef4444", "#f59e0b", "#10b981"];

      $.each(segs, function (i, s) {
        var el = $(s);
        el.removeClass("active weak medium strong");
        if (i < strength) el.addClass("active " + classes[strength]);
      });

      var textEl = $("#pf-strength-text");
      if (val.length === 0) {
        textEl.text("");
      } else {
        textEl.text(labels[strength]).css("color", colors[strength]);
      }
    });

    /* =============================================
     *  Discard Button
     * ============================================= */
    $("#pf-btn-discard").on("click", function () {
      if (confirm("Discard all unsaved changes?")) {
        location.reload();
      }
    });

    /* =============================================
     *  AJAX Form Submit
     * ============================================= */
    $("#pf-btn-save").on("click", function (e) {
      e.preventDefault();
      var btn = $(this);
      var pw = $("#pf-password").val();
      var pwc = $("#pf-password-confirm").val();

      // ---- Validation ----
      if (pw && pw !== pwc) {
        pfToast("Passwords do not match!", "error");
        // Auto-switch to the Security tab so user sees the fields
        $(".pf-tab").removeClass("active");
        $('[data-tab="security"]').addClass("active");
        $(".pf-tab-content").removeClass("active");
        $("#tab-security").addClass("active");
        return;
      }

      // ---- Build FormData ----
      var formData = new FormData($("#pf-update-form")[0]);
      var file = $("#pf-avatar-upload")[0].files[0];
      if (file) {
        formData.append("profile_image", file);
      }

      // ---- Send ----
      $.ajax({
        url: "<?= base_url('profile/update_profile'); ?>",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function () {
          btn.addClass("loading").attr("disabled", true);
        },
        success: function (res) {
          btn.removeClass("loading").attr("disabled", false);
          if (res.status === 200) {
            pfToast(res.message || "Profile updated successfully!", "success");
            setTimeout(function () { location.reload(); }, 2000);
          } else {
            pfToast(res.message || "Something went wrong!", "error");
          }
        },
        error: function () {
          btn.removeClass("loading").attr("disabled", false);
          pfToast("Server error. Please try again.", "error");
        }
      });
    });

  }); // END document-ready
</script>