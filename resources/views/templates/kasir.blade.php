<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 21:10:05 GMT -->


@include('templates.partials.kasir._head')

   <body class="sidebar-main-menu">
      <!-- loader Start -->
      
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('templates.partials.kasir._sidebar')
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
			@include('templates.partials.kasir._navbar')
         <!-- TOP Nav Bar END -->
		 @yield('content')
            <!-- Footer -->
			@include('templates.partials.kasir._footer')
      <!-- Footer END -->
         </div>
      </div>
      <!-- Wrapper END -->
      
      <!-- Optional JavaScript -->
      @include('templates.partials.kasir._script')
      @include('sweetalert::alert')

   </body>

<!-- Mirrored from iqonic.design/themes/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 21:10:58 GMT -->
</html>
