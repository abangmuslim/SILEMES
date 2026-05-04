<nav class="main-header navbar navbar-expand navbar-light bg-white">

    <!-- LEFT -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="#"
                class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>
    </ul>

    <!-- RIGHT -->
    <ul class="navbar-nav ml-auto">

        <!-- Dark Mode -->
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="toggleDarkMode()">
                <i class="fas fa-moon"></i>
            </a>
        </li>

        <!-- User Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle"></i>
                {{ Auth::user()->name ?? 'User' }}
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <a href="#" class="dropdown-item">
                    Profile
                </a>

                <a href="#"
                    class="dropdown-item text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>

            </div>
        </li>

    </ul>
</nav>