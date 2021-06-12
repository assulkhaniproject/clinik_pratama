<div class="iq-sidebar">
   <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="#" class="title">
         <img src="{{asset('admin/images/logo.png')}}" class="img-fluid" alt="">
         <span class="title">Clinic Pratama</span>
      </a>
      <div class="iq-menu-bt-sidebar">
         <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="ri-more-fill"></i></div>
               <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar-scrollbar">
      <nav class="iq-sidebar-menu">
         <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
            <li @if (Request::is('admin/dashboard')) class="active"
                   @else class="false" @endif>
               <a href="{{route('admin.dashboard')}}" class="iq-waves-effect"><i class="ion-home"></i><span>Dashboard</span></a>
            </li >
            <li @if (Request::is('admin/pasien')) class="active"
                   @else class="false" @endif>
               <a href="{{route('pasien.index')}}" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Data Pasien</span></a>
            </li>
            <li @if (Request::is('admin/rekamMedik')) class="active"
                   @else class="false" @endif>
               <a href="{{route('rekamMedik.index')}}" class="iq-waves-effect"><i class="ion-heart-broken"></i><span>Rekam Medik</span></a>
            </li>
            <li @if (Request::is('admin/obat')) class="active"
                   @else class="false" @endif>
               <a href="{{route('obat.index')}}" class="iq-waves-effect"><i class="ion-medkit"></i><span>Data Obat</span></a>
            </li>
            <li @if (Request::is('admin/report')) class="active"
                   @else class="false" @endif>
               <a href="{{route('report.index')}}" class="iq-waves-effect"><i class="ri-file-fill"></i><span>Report</span></a>
            </li>
            <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
            <li>
               <a href="dashboard-4.html" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Covid-19 Dashboard</span><span class="badge badge-danger">New</span></a>
            </li>
         </ul>
      </nav>
      <div class="p-3"></div>
   </div>
</div>