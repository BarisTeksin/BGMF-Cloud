<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="BasePYP">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>{{ config('app.name') }} | @yield('page_name')</title>

    <link rel="stylesheet" href="/assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/basic.min.css">
</head>

<body class="theme-black full-dark">
    <!-- Page Loader -->
    @if (Auth::check())
    @include('dashboard.components.header')
    @include('dashboard.components.side_bar')
    @endif

    @yield('content')


    <!-- Jquery Core Js -->
    <script src="/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <!-- Jquery DataTable Plugin Js -->
    <script src="/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="/assets/js/theme.js"></script><!-- Custom Js -->
    <script src="/assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>