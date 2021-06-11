<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 21:10:05 GMT -->


@include('templates.partials.admin._head')

   <body class="sidebar-main-menu">
      <!-- loader Start -->
      
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('templates.partials.admin._sidebar')
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
			@include('templates.partials.admin._navbar')
         <!-- TOP Nav Bar END -->
		 @yield('content')
            <!-- Footer -->
			@include('templates.partials.admin._footer')
      <!-- Footer END -->
         </div>
      </div>
      <!-- Wrapper END -->
      
      <!-- Optional JavaScript -->
      @include('templates.partials.admin._script')
      @include('sweetalert::alert')

   </body>

<!-- Mirrored from iqonic.design/themes/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 21:10:58 GMT -->
</html>
