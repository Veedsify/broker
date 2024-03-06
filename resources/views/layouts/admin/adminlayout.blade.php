<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Dashboard | Minia - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/admins/images/favicon.ico">

    {{-- FONTS --}}
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,301,701,300,501,401,901,400&display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <!-- Icons CSS -->

    <!-- Tailwind CSS -->

    <link rel="stylesheet" href="/admins/css/swiper-bundle.css">
    <link rel="stylesheet" href="/admins/css/tailwind2.css">
</head>

<body data-mode="light" data-sidebar-size="lg" class="group">
    @yield('content')

    {{-- /SCRIPTS --}}
    <script src="/admins/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="/admins/libs/feather-icons/feather.min.js"></script>
    <script src="/admins/libs/metismenujs/metismenujs.min.js"></script>
    <script src="/admins/libs/simplebar/simplebar.min.js"></script>


    <script src="/admins/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <!-- apexcharts -->
    <script src="/admins/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Plugins js-->
    <script src="/admins/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/admins/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <script src="/admins/libs/swiper/swiper-bundle.min.js"></script>

    <!-- dashboard init -->
    <script src="/admins/js/pages/dashboard.init.js"></script>

    <script src="/admins/js/pages/nav%26tabs.js"></script>

    <script src="/admins/js/pages/login.init.js"></script>

    <script src="/admins/js/app.js"></script>

</body>

</html>