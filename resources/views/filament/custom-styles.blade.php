<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&display=swap');

    :root {
        --font-serif: 'Playfair Display', Georgia, serif;
        --font-sans: 'Inter', system-ui, -apple-system, sans-serif;
    }

    /* Universal SVG Constraint Safeguard */
    svg {
        max-width: 100%;
    }

    .fi-topbar svg,
    .fi-sidebar svg,
    .fi-icon-btn svg,
    .fi-btn svg,
    .fi-user-menu svg,
    .fi-ta svg {
        max-width: 22px !important;
        max-height: 22px !important;
    }

    /* Base Typography & Background */
    body,
    .fi-body,
    .fi-layout,
    .fi-main,
    .fi-page,
    .fi-content {
        font-family: var(--font-sans) !important;
        background-color: #f8fafc !important;
        color: #0f172a !important;
        letter-spacing: -0.011em;
    }

    /* Page Headings font */
    h1,
    h2,
    h3,
    .fi-page-header-heading,
    .font-serif {
        font-family: var(--font-serif) !important;
        letter-spacing: -0.02em;
        color: #0f172a !important;
    }

    .fi-page-header-heading {
        font-size: 1.85rem !important;
        font-weight: 800 !important;
    }

    /* ------------------------------------------------------------- */
    /* SIDEBAR NAVIGATION - ULTRA CRISP LIGHT THEME                  */
    /* ------------------------------------------------------------- */
    .fi-sidebar {
        border-right: 1px solid #e2e8f0 !important;
        background-color: #ffffff !important;
        box-shadow: 2px 0 8px rgba(15, 23, 42, 0.03) !important;
    }

    .fi-sidebar-header {
        border-bottom: 1px solid #f1f5f9 !important;
        background-color: #ffffff !important;
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important;
    }

    .fi-sidebar-group-label {
        font-size: 0.6875rem !important;
        font-weight: 800 !important;
        letter-spacing: 0.08em !important;
        text-transform: uppercase !important;
        color: #475569 !important;
        margin-top: 1rem !important;
        margin-bottom: 0.35rem !important;
        padding-left: 0.75rem !important;
    }

    .fi-sidebar-item {
        margin-bottom: 3px !important;
    }

    .fi-sidebar-item-button {
        border-radius: 0.625rem !important;
        font-weight: 600 !important;
        font-size: 0.85rem !important;
        color: #1e293b !important;
        padding: 0.55rem 0.75rem !important;
        transition: all 0.15s ease-in-out !important;
    }

    .fi-sidebar-item-button span,
    .fi-sidebar-item-button .fi-sidebar-item-label {
        color: #1e293b !important;
        font-weight: 600 !important;
    }

    .fi-sidebar-item-button svg {
        color: #2563eb !important;
        width: 18px !important;
        height: 18px !important;
        transition: transform 0.15s ease !important;
    }

    .fi-sidebar-item-button:hover {
        background-color: #f1f5f9 !important;
        color: #1d4ed8 !important;
    }

    .fi-sidebar-item-button:hover span,
    .fi-sidebar-item-button:hover .fi-sidebar-item-label {
        color: #1d4ed8 !important;
    }

    .fi-sidebar-item-button:hover svg {
        color: #1d4ed8 !important;
        transform: translateX(2px) !important;
    }

    /* Active nav item */
    .fi-sidebar-item-active .fi-sidebar-item-button {
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 8px -1px rgba(30, 58, 138, 0.25) !important;
    }

    .fi-sidebar-item-active .fi-sidebar-item-button span,
    .fi-sidebar-item-active .fi-sidebar-item-button .fi-sidebar-item-label {
        color: #ffffff !important;
        font-weight: 700 !important;
    }

    .fi-sidebar-item-active .fi-sidebar-item-button svg {
        color: #fde047 !important;
    }

    /* ------------------------------------------------------------- */
    /* TOPBAR                                                        */
    /* ------------------------------------------------------------- */
    .fi-topbar {
        border-bottom: 1px solid #e2e8f0 !important;
        background: #ffffff !important;
        box-shadow: 0 1px 3px rgba(15, 23, 42, 0.03) !important;
    }

    /* ------------------------------------------------------------- */
    /* WIDGETS & GRID POLISHING                                      */
    /* ------------------------------------------------------------- */
    .fi-wi-bureau-banner,
    [class*="bureau-banner"] {
        grid-column: 1 / -1 !important;
        width: 100% !important;
    }

    .fi-section,
    .fi-wi-stats-overview-stat,
    .fi-ta {
        border: 1px solid #e2e8f0 !important;
        border-radius: 1rem !important;
        box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.04), 0 1px 2px -1px rgba(15, 23, 42, 0.04) !important;
        background-color: #ffffff !important;
        color: #0f172a !important;
    }

    .fi-wi-stats-overview-stat {
        transition: transform 0.15s ease, box-shadow 0.15s ease !important;
    }

    .fi-wi-stats-overview-stat:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 10px 15px -3px rgba(15, 23, 42, 0.08) !important;
    }

    .fi-wi-stats-overview-stat-value {
        color: #0f172a !important;
        font-weight: 800 !important;
    }

    .fi-wi-stats-overview-stat-label {
        color: #475569 !important;
        font-weight: 700 !important;
        font-size: 0.75rem !important;
        text-transform: uppercase !important;
        letter-spacing: 0.05em !important;
    }

    /* Table headers & rows */
    .fi-ta-header-cell {
        background-color: #f8fafc !important;
        font-size: 0.7rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.05em !important;
        text-transform: uppercase !important;
        color: #475569 !important;
        border-bottom: 1px solid #e2e8f0 !important;
    }

    .fi-ta-row:hover {
        background-color: #f8fafc !important;
    }

    .fi-ta-cell {
        color: #1e293b !important;
    }

    /* Buttons */
    .fi-btn-primary {
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%) !important;
        border: none !important;
        box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.2) !important;
        font-weight: 600 !important;
        border-radius: 0.625rem !important;
        transition: all 0.15s ease !important;
    }

    .fi-btn-primary:hover {
        background: linear-gradient(135deg, #1e40af 0%, #1d4ed8 100%) !important;
        box-shadow: 0 6px 12px -2px rgba(37, 99, 235, 0.3) !important;
        transform: translateY(-1px) !important;
    }

    /* ------------------------------------------------------------- */
    /* AUTH / LOGIN PAGE LUXURY ENTERPRISE THEME                    */
    /* ------------------------------------------------------------- */
    .fi-simple-layout {
        background-color: #f8fafc !important;
        background-image:
            radial-gradient(circle at 50% 10%, rgba(30, 58, 138, 0.07) 0%, transparent 60%),
            radial-gradient(#cbd5e1 1px, transparent 1px) !important;
        background-size: 100% 100%, 28px 28px !important;
        min-height: 100vh !important;
    }

    .fi-simple-main {
        max-width: 28rem !important;
        background: #ffffff !important;
        border: 1px solid #e2e8f0 !important;
        border-top: 4px solid #1e3a8a !important;
        border-radius: 1.25rem !important;
        box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.12), 0 10px 15px -3px rgba(15, 23, 42, 0.05) !important;
        padding: 2.25rem 2rem !important;
    }

    .fi-simple-header {
        margin-bottom: 1rem !important;
    }

    .fi-simple-header .fi-logo {
        justify-content: center !important;
        margin-bottom: 0.75rem !important;
    }

    /* Input focus styling */
    .fi-input-wrp {
        border-radius: 0.625rem !important;
        border-color: #cbd5e1 !important;
        background-color: #ffffff !important;
        transition: all 0.15s ease !important;
    }

    .fi-input-wrp:focus-within {
        border-color: #2563eb !important;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12) !important;
    }

    /* Scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }

    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
</style>
