<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 18:03:00 GMT -->

<head>
    @include('templates.partials.admin._head')
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">

        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Sidebar  -->
        @include('templates.partials.admin._sidebar')
        <!-- end Sidebar -->

        <!-- Page Content  -->
        <div id="content-page" class="content-page">

            <!-- TOP Nav Bar -->
            @include('templates.partials.admin._navbar')
            <!-- TOP Nav Bar END -->

            <!-- Content -->
            @yield('content')
            <!--end Content -->

            <!-- Footer -->
            @include('templates.partials.admin._footer')
            <!-- Footer END -->
        </div>
    </div>
    <!-- Wrapper END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('templates.partials.admin._script')
    @include('sweetalert::alert')

</body>

<!-- Mirrored from iqonic.design/themes/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 18:03:05 GMT -->

</html>
