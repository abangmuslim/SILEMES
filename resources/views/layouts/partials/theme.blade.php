<style>
    :root {
        --theme-color:
            {{ $themeColor == 'danger' ? '#dc3545' :
               ($themeColor == 'warning' ? '#ffc107' :
               ($themeColor == 'success' ? '#28a745' : '#007bff')) }};

        --theme-text: #ffffff;
    }

    /* DARK MODE */
    .dark-mode {
        --theme-color:
            {{ $themeColor == 'danger' ? '#ff6b6b' :
               ($themeColor == 'warning' ? '#ffd966' :
               ($themeColor == 'success' ? '#5cd65c' : '#66b3ff')) }};

        --theme-text: #121212;
    }

    /* SIDEBAR ACTIVE */
    .nav-sidebar .nav-link.active {
        background-color: var(--theme-color) !important;
        color: var(--theme-text) !important;
        border-radius: 6px;
        font-weight: 600;
    }

    /* NAVBAR ACTIVE (BACKGROUND MODE) */
    .navbar .nav-link.active {
        background-color: var(--theme-color) !important;
        color: var(--theme-text) !important;
        border-radius: 6px;
        padding: 6px 12px;
    }

    /* BREADCRUMB (BACKGROUND MODE) */
    .theme-breadcrumb {
        background-color: var(--theme-color) !important;
        color: var(--theme-text) !important;
        border-radius: 6px;
    }

    .theme-breadcrumb h5,
    .theme-breadcrumb small {
        color: var(--theme-text) !important;
    }

    /* SIDEBAR BRAND FIX (LIGHT MODE) */
    .brand-link {
        color: #212529 !important;
    }

    .dark-mode .brand-link {
        color: #ffffff !important;
    }
</style>