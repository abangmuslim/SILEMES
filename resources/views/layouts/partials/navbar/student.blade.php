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
               class="nav-link {{ request()->is('student/dashboard') ? 'active' : '' }}">
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

        <!-- Student Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-graduate"></i>
                {{ Auth::guard('student')->user()->name ?? 'Student' }}
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <a href="#" class="dropdown-item">
                    Profile
                </a>

                <a href="#"
                   class="dropdown-item text-danger"
                   onclick="event.preventDefault(); document.getElementById('logout-form-student').submit();">
                    Logout
                </a>

                <!-- FORM LOGOUT STUDENT -->
                <form id="logout-form-student"
                      action="{{ route('student.logout') }}"
                      method="POST"
                      style="display:none;">
                    @csrf
                </form>

            </div>
        </li>

    </ul>
</nav>