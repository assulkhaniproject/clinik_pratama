<!doctype html>
<html lang="en">

<head>
   @include('templates.partials.admin._head')
</head>

<body class="sidebar-main-menu">
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
   @yield('othscript')

</body>

<!-- Copyright - 2021 || Abu Muslih Assulkhani || Klinik Pratama PoltekHarber -->

</html>