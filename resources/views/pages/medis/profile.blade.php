@extends('templates.medis')

<head>
    <title> Profile | KLINIK PRATAMA HB</title>
</head>
@section('content')


<div class="iq-card-body pl-0 pr-0 pt-0">
    <div class="doctor-details-block">
        <div class="doc-profile-bg bg-primary" style="height:150px;">
        </div>
        <div class="doctor-profile text-center">
            <img src="{{asset('admin/images/user/icon.png')}}" alt="profile-img" class="avatar-130 img-fluid">
        </div>
        <div class="text-center mt-3 pl-3 pr-3">
            <h4><b>Medis</b></h4>
            <p>Klinik Pratama Politeknik Tegal</p>
            <hr>
            <p class="mb-0">Jalan Mataram No 9 (belakang terminal) Pesurungan Lor Kota Tegal.</p>
        </div>
        
        <br>
        <br>
        {{-- <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
            <li class="text-center">
                <h3 class="counter">4500</h3>
                <span>Operations</span>
            </li>
            <li class="text-center">
                <h3 class="counter">100</h3>
                <span>Hospital</span>
            </li>
            <li class="text-center">
                <h3 class="counter">10000</h3>
                <span>Patients</span>
            </li>
        </ul> --}}
    </div>
</div>
@endsection