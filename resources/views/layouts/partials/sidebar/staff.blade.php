<aside class="main-sidebar sidebar-dark elevation-4">

    <!-- BRAND -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">STAFF</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('staff/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">STUDENT</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('staff/students*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Students</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('staff/enrollment*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>Enrollment</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>