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
            <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
            <li @if (Request::is('kasir/dashboard')) class="active" @else class="false" @endif>
               <a href="{{route('kasir.dashboard')}}" class="iq-waves-effect"><i class="ion-home"></i><span>Dashboard</span></a>
            </li>
            <li @if (Request::is('kasir/pembayaran')) class="active" @else class="false" @endif>
               <a href="{{ route('kasir.pembayaran.index') }}" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Antrian Pembayaran</span></a>
            </li>
            {{-- <li @if (Request::is('kasir/pembayaran/create')) class="active" @else class="false" @endif>
               <a href="{{ route('kasir.pembayaran.create') }}" class="iq-waves-effect"><i class="ri-file-fill"></i><span>Report</span></a>
            </li> --}}
         </ul>
      </nav>
      <div class="p-3"></div>
   </div>
</div>