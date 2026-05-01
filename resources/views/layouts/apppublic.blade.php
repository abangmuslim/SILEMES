<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SILEMES</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <style>
        /* RESET ADMINLTE */
        .content-wrapper {
            margin-left: 0 !important;
            background: #f4f6f9;
            min-height: 100vh;
        }

        /* CONTENT AREA FULLSCREEN */
        .landing-container {
            padding: 20px 30px;
        }

        /* GLOBAL SECTION */
        .section {
            padding: 40px 0;
        }

        /* CARD EFFECT */
        .card {
            transition: 0.3s;
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* SIDEBAR */
        .landing-sidebar {
            position: sticky;
            top: 85px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .landing-sidebar {
                position: relative;
                top: 0;
                margin-top: 20px;
            }

            .landing-container {
                padding: 15px;
            }
        }
    </style>
</head>

<body class="layout-top-nav">

<div class="wrapper">

    {{-- NAVBAR --}}
    @include('layouts.partials.navbar.landing')

    {{-- MAIN CONTENT --}}
    <div class="content-wrapper">

        <div class="content pt-3">

            <div class="container-fluid landing-container">

                <div class="row">

                    {{-- MAIN CONTENT LEFT --}}
                    <div class="col-lg-9 col-md-8">
                        @yield('content')
                    </div>

                    {{-- SIDEBAR RIGHT --}}
                    <div class="col-lg-3 col-md-4">
                        <div class="landing-sidebar">
                            @include('layouts.partials.sidebar.landing')
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- FOOTER --}}
    @include('layouts.partials.footer')

</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>