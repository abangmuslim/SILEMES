<aside class="main-sidebar sidebar-dark elevation-4">

    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">STUDENT</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('student/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">LEARNING</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('student/courses*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>My Course</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('student/progress*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Progress</p>
                    </a>
                </li>

                <li class="nav-header">EXAM</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('student/exams*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>My Exam</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('student/results*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>Result</p>
                    </a>
                </li>

                <li class="nav-header">CERTIFICATE</li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('student/certificates*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-certificate"></i>
                        <p>Certificate</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>