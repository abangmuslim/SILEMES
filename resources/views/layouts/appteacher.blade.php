<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SILEMES - teacher</title>

    <!-- teacherLTE -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/teacherlte.min.css') }}">

    <style>
        body.dark-mode {
            background-color: #121212 !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed" id="body-mode">

<div class="wrapper">

    {{-- Navbar --}}
    @include('layouts.partials.navbar')

    {{-- Sidebar --}}
    @include('layouts.partials.sidebar.teacher')

    {{-- Content --}}
    <div class="content-wrapper p-3">

        {{-- Breadcrumb Component --}}
        @include('layouts.partials.components.breadcrumb')

        @yield('content')

    </div>

    {{-- Footer --}}
    @include('layouts.partials.footer')

</div>

<!-- JS -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/teacherlte.min.js') }}"></script>

<script>
    // 🌙 Dark Mode Toggle
    const body = document.getElementById('body-mode');

    function toggleDarkMode() {
        body.classList.toggle('dark-mode');
        localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
    }

    // Load preference
    if (localStorage.getItem('darkMode') === 'true') {
        body.classList.add('dark-mode');
    }
</script>

</body>
</html>