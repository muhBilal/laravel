<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel=" stylesheet" href="('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <link rel=" stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/summernote/summernote-bs4.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('partials.navbar')


        <!-- Sidebar -->
        @include('partials.sidebar')


        @yield('container')



        @include('partials.footer')

    </div>

    @include('layouts.script')
</body>

</html>
