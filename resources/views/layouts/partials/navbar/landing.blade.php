<nav class="main-header navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
    <div class="container">

        {{-- BRAND / LOGO --}}
        <a href="{{ route('landing.home') }}" class="navbar-brand d-flex align-items-center">

            {{-- LOGO (optional, nanti tinggal isi file) --}}
            <img src="{{ asset('foto/logo/logo.png') }}"
                alt="Logo"
                style="height:35px; width:auto;"
                class="mr-2">

            <span class="brand-text font-weight-bold">SILEMES</span>
        </a>

        {{-- TOGGLER --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLanding">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLanding">

            {{-- LEFT MENU --}}
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a href="{{ route('landing.home') }}"
                        class="nav-link {{ request()->routeIs('landing.home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('landing.category') }}"
                        class="nav-link {{ request()->routeIs('landing.category*') ? 'active' : '' }}">
                        Kategori
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('landing.toc') }}"
                        class="nav-link {{ request()->routeIs('landing.toc') ? 'active' : '' }}">
                        Daftar Isi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('landing.about') }}"
                        class="nav-link {{ request()->routeIs('landing.about') ? 'active' : '' }}">
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('landing.contact') }}"
                        class="nav-link {{ request()->routeIs('landing.contact') ? 'active' : '' }}">
                        Kontak
                    </a>
                </li>

            </ul>

            {{-- RIGHT MENU --}}
            <ul class="navbar-nav ml-auto align-items-center">

                {{-- LOGIN USER --}}
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="fas fa-user mr-1"></i> Login User
                    </a>
                </li>

                {{-- LOGIN STUDENT --}}
                <li class="nav-item ml-2">
                    <a href="{{ route('student.login') }}" class="btn btn-light btn-sm font-weight-bold">
                        <i class="fas fa-graduation-cap mr-1"></i> Login Student
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

{{-- STYLE TAMBAHAN --}}
<style>
    /* NAV LINK */
    .navbar-nav .nav-link {
        transition: 0.3s;
        position: relative;
        font-weight: 500;
    }

    /* HOVER EFFECT */
    .navbar-nav .nav-link:hover {
        color: #ffd966 !important;
    }

    /* ACTIVE MENU */
    .navbar-nav .nav-link.active {
        color: #fff !important;
        font-weight: 600;
    }

    /* UNDERLINE EFFECT */
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #ffd966;
        transition: 0.3s;
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    .navbar-nav .nav-link.active::after {
        width: 100%;
        background: #fff;
    }

    /* LOGO */
    .navbar-brand img {
        object-fit: contain;
    }
</style>