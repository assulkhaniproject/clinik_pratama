@extends('templates.admin')

<head>
   <title> Dashboard | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="row">
            {{-- <div class="col-md-6 col-lg-3">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-body">
                     <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                        <span class="bg-primary" data-percent="70"></span>
                     </div>
                     <span class="line-height-4">10 feb, 2020</span>
                     <h4 class="mb-2 mt-2">Hypertensive Crisis</h4>
                     <p class="mb-0 text-secondary line-height">Ongoing treatment</p>
                  </div>
               </div>
            </div> 
            <div class="col-md-6 col-lg-3">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-body">
                     <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                        <span class="bg-danger" data-percent="50"></span>
                     </div>
                     <span class="line-height-4">12 Jan, 2020</span>
                     <h4 class="mb-2 mt-2">Osteoporosis</h4>
                     <p class="mb-0 text-secondary line-height">Incurable</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-body">
                     <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                        <span class="bg-warning" data-percent="80"></span>
                     </div>
                     <span class="line-height-4">15 feb, 2020</span>
                     <h4 class="mb-2 mt-2">Hypertensive Crisis</h4>
                     <p class="mb-0 text-secondary line-height">Examination</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-body P-0 rounded" style="background: url(images/page-img/38.jpg) no-repeat scroll center center; background-size: contain; min-height: 146px;">
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
      {{-- <div class="col-lg-7">
         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Health Curve</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <div id="home-chart-06" style="height: 350px;"></div>
            </div>
         </div>
      </div> --}}
      <div class="col-sm-12 col-lg-7">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Dashboard</h4>
               </div>
            </div>
            <div class="iq-card-body">
               {{-- <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p> --}}
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="images/small/img-1.jpg" class="d-block w-100" alt="#">
                     </div>
                     <div class="carousel-item">
                        <img src="images/small/img-1.jpg" class="d-block w-100" alt="#">
                     </div>
                     <div class="carousel-item">
                        <img src="images/small/img-1.jpg" class="d-block w-100" alt="#">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-5">
         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Calendar</h4>
               </div>
            </div>
            <div class="iq-card-body smaill-calender-home">
               <input type="text" class="flatpicker d-none">
            </div>
         </div>
      </div>
   </div>
</div>
@endsection