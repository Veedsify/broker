<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png')}}" type="image/x-icon">


    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <!-- Layout config Js -->
    <!-- Icons CSS -->

    <!-- Tailwind CSS -->

    <link rel="stylesheet" href="{{asset('admins/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('admins/css/output.css')}}">
    <link rel="stylesheet" href="{{asset('admins/css/tailwind2.css')}}">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
</head>

<body data-mode=" light
    " data-sidebar-size="lg" class="group">
@yield('content')

{{-- /SCRIPTS --}}
<script src="{{ asset('admins/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{ asset('admins/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{ asset('admins/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{ asset('admins/libs/simplebar/simplebar.min.js')}}"></script>


<script src="{{ asset('admins/js/jquery-3.6.0.min.js')}}"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<!-- apexcharts -->
<script src="{{ asset('admins/libs/apexcharts/apexcharts.min.js')}}"></script>
<!-- Plugins js-->
<script src="{{ asset('admins/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script
    src="{{ asset('admins/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

<script src="{{ asset('admins/libs/swiper/swiper-bundle.min.js')}}"></script>

<!-- dashboard init -->
<script src="{{ asset('admins/js/pages/dashboard.init.js')}}"></script>

<script src="{{ asset('admins/js/pages/nav%26tabs.js')}}"></script>

<script src="{{ asset('admins/js/pages/login.init.js')}}"></script>

<script src="{{ asset('admins/js/app.js')}}"></script>

{{-- NEW SCRIPTS --}}


<!-- Required datatable js -->
<script src="{{ asset('admins/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admins/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ asset('admins/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('admins/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admins/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('admins/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('admins/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('admins/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('admins/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('admins/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{ asset('admins/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admins/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admins/js/custom.js')}}"></script>

<!-- Datatable init js -->
<script src="{{ asset('admins/js/pages/datatables.init.js')}}"></script>
</body>

</html>
