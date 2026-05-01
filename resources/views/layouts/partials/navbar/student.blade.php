<nav class="main-header navbar navbar-expand navbar-dark" style="background-color:#dc3545;">

    <!-- LEFT -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link active">Dashboard</a>
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
                <i class="fas fa-user-graduate"></i> Student
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Logout</a>
            </div>
        </li>

    </ul>
</nav>