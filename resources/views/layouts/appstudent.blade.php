<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SILEMES - Student</title>

    <!-- 🌙 DARK MODE INIT -->
    <script>
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- ✅ WAJIB --}}
    @include('layouts.partials.theme')

    <style>
        .dark-mode body {
            background-color: #121212 !important;
        }

        body {
            transition: background-color 0.3s ease;
        }

        .brand-link {
            color: #212529 !important;
        }

        .dark-mode .brand-link {
            color: #f8f9fa !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    {{-- student pakai navbar sendiri --}}
    @include('layouts.partials.navbar.student')
    @include('layouts.partials.sidebar.student')

    <div class="content-wrapper p-3">
        @include('layouts.partials.components.breadcrumb')
        @yield('content')
    </div>

    @include('layouts.partials.footer')

</div>

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