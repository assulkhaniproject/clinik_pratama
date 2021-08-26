<div class="iq-sidebar">
   <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="#" class="title">
         <img src="{{asset('admin/images/icon.png')}}" class="img-fluid" alt="">
         <span class="title">Klinik Pratama</span>
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
            <li @if (Request::is('admin/dashboard')) class="active" @else class="false" @endif>
               <a href="{{route('admin.dashboard')}}" class="iq-waves-effect"><i class="ion-home"></i><span>Dashboard</span></a>
            </li>
            <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Data Medik</span></li>
            <li @if (Request::is('admin/rekamMedik')) class="active" @else class="false" @endif>
               <a href="{{route('admin.rekamMedik.index')}}" class="iq-waves-effect"><i class="ion-heart-broken"></i><span>Rekam Medis</span></a>
            </li>
            <li @if (Request::is('admin/history-rekam-medik')) class="active" @else class="false" @endif>
               <a href="{{route('admin.rekamMedik.showHistory')}}" class="iq-waves-effect"><i class="fa fa-folder"></i><span>History Rekam Medis</span></a>
            </li>
            <li @if (Request::is('admin/report')) class="active" @else class="false" @endif>
               <a href="{{route('admin.report.index')}}" class="iq-waves-effect"><i class="ri-file-fill"></i><span>Report Rekam Medis</span></a>
            </li>
            <li @if (Request::is('admin/reportkeuangan')) class="active" @else class="false" @endif>
               <a href="{{ route('admin.reportkeuangan.index') }}" class="iq-waves-effect"><i class="ri-calculator-fill"></i><span>Report Keuangan</span></a>
            </li>
            <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Data Utama</span></li>
            <li @if (Request::is('admin/pasien')) class="active" @else class="false" @endif>
               <a href="{{route('admin.pasien.index')}}" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Data Pasien</span></a>
            </li>
            <li @if (Request::is('admin/petugas')) class="active" @else class="false" @endif>
               <a href="{{route('admin.petugas.index')}}" class="iq-waves-effect"><i class="fa fa-user-circle"></i><span>Data Petugas</span></a>
            </li>
            {{-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
            <li @if (Request::is('admin/InfoCorona19')) class="active" @else class="false" @endif>
               <a href="{{route('corona')}}" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Info Covid-19 Indonesia</span></a>
            </li> --}}
         </ul>
      </nav>
      <div class="p-3"></div>
   </div>
   <!-- Copyright - 2021 || Abu Muslih Assulkhani || Klinik Pratama PoltekHarber -->
</div>