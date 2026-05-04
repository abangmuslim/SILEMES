<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SILEMES - Admin</title>

    <!-- 🌙 DARK MODE INIT (ANTI FLICKER) -->
    <script>
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- THEME --}}
    @include('layouts.partials.theme')

    <style>
        /* Background dark */
        .dark-mode body {
            background-color: #121212 !important;
        }

        /* Smooth transition */
        body {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        {{-- Navbar --}}
        @include('layouts.partials.navbar.user')

        {{-- Sidebar --}}
        @include('layouts.partials.sidebar.admin')

        {{-- Content --}}
        <div class="content-wrapper p-3">

            {{-- Breadcrumb --}}
            @include('layouts.partials.components.breadcrumb')

            @yield('content')

        </div>

        {{-- Footer --}}
        @include('layouts.partials.footer')

    </div>

    <!-- JS -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <script>
        const root = document.documentElement;

        function toggleDarkMode() {
            root.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', root.classList.contains('dark-mode'));
        }
    </script>

</body>

</html>