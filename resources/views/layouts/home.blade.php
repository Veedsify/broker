<!doctype html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #keywords -->
    <meta name="keywords" content="boot, Bootstrap, CTP HTML Template">
    <!-- #description -->
    <meta name="description" content="CTP HTML Template">
    <!-- #title -->
    <title>{{ $title }} - Web3 crypto website</title>
    <!-- #favicon -->
    <link rel="shortcut icon" href="/assets/images/fav.png" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- preloader css -->
    <link rel="stylesheet" href="/assets/css/preloader.min.css" type="text/css" />
    {{--

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
</head>

<body>
    {{-- <x-preloader /> --}}
    <div id="preloader" class="pre-item d-center">
        <div class="loaderall"></div>
    </div>
    @yield('content')
    <x-footer />
    <!-- ==== js dependencies start ==== -->
    <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugin-custom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('assets/js/plugins/charttwo.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
