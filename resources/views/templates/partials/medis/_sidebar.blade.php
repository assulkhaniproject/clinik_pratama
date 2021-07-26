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
             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
             <li @if (Request::is('medis/dashboard')) class="active" @else class="false" @endif>
                <a href="{{route('medis.dashboard')}}" class="iq-waves-effect"><i class="ion-home"></i><span>Dashboard</span></a>
             </li>
             <li @if (Request::is('medis/rekamMedik')) class="active" @else class="false" @endif>
                <a href="{{route('medis.rekamMedik.index')}}" class="iq-waves-effect"><i class="ion-heart-broken"></i><span>Antrian Pemeriksaan</span></a>
             </li>
             {{-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
             <li @if (Request::is('InfoCorona19')) class="active" @else class="false" @endif>
                <a href="{{route('corona')}}" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Info Covid-19 Indonesia</span></a>
             </li> --}}
          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
    <!-- Copyright - 2021 || Abu Muslih Assulkhani || Klinik Pratama PoltekHarber -->
 </div>