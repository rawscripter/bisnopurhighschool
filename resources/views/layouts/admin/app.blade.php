<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bisnopur High School</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('/v2/admin/') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('/v2/admin/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('/v2/admin/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="{{ asset('/v2/admin/') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('/css/raw-admin-style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.admin.parts.AdminHeader')

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.admin.parts.AdminSidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('content')
    </main>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Bisnopur High School</span></strong>. All Rights Reserved
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/v2/admin/') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('/v2/admin/') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/v2/admin/') }}/js/main.js"></script>

</body>

</html>
