@extends('templates.admin')

<head>
   <title> Dashboard | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="row">
            <div class="col-md-6 col-lg-3">
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
            </div>
         </div>
      </div>
      <div class="col-lg-8">
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
      </div>
      <div class="col-md-4">
         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Nearest Treatment</h4>
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