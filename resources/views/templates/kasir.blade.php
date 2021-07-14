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
        @include('templates.partials.kasir._sidebar')
        <!-- end Sidebar -->

        <!-- Page Content  -->
        <div id="content-page" class="content-page">

            <!-- TOP Nav Bar -->
            @include('templates.partials.kasir._navbar')
            <!-- TOP Nav Bar END -->

            <!-- Content -->
            @yield('content')
            <!--end Content -->

            <!-- Footer -->
            @include('templates.partials.kasir._footer')
            <!-- Footer END -->
        </div>
    </div>
    <!-- Wrapper END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('templates.partials.kasir._script')
    @include('sweetalert::alert')
    @yield('othscript')

</body>

<!-- Mirrored from iqonic.design/themes/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 18:03:05 GMT -->

</html>
