<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--plugins-->
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('admin/assets/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/header-colors.css') }}" rel="stylesheet" />

    <title>Easy Shop</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar wrapper-->
        @include('layouts.admin.partials.sidebar')
        <!--end sidebar wrapper-->

        <!--start top header-->
        @include('layouts.admin.partials.header')
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                @yield('content')

            </div>
            <!-- end page content-->
        </div>
        <!--end page content wrapper-->

        @include('layouts.admin.partials.footer')

    </div>
    <!--end wrapper-->





    <!-- JS Files-->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/index3.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>


</body>

</html>
