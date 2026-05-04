<aside class="main-sidebar sidebar-dark elevation-4">

    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">TEACHER</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('teacher/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">LMS</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('teacher/courses*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Courses</p>
                    </a>
                </li>

                <li class="nav-header">CBT</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('teacher/exams*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Exams</p>
                    </a>
                </li>

                <li class="nav-header">ASSESSMENT</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('teacher/assessment*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Assessment</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>