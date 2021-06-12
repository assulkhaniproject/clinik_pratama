@extends('templates.admin')

<head>
    <title> Profile | KLINIK PRATAMA HB</title>
</head>
@section('content')


<div class="iq-card-body pl-0 pr-0 pt-0">
    <div class="doctor-details-block">
        <div class="doc-profile-bg bg-primary" style="height:150px;">
        </div>
        <div class="doctor-profile text-center">
            <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
        </div>
        <div class="text-center mt-3 pl-3 pr-3">
            <h4><b>Admin</b></h4>
            <p>Doctor</p>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repudiandae eveniet harum.</p>
        </div>
        <hr>
        <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
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
        </ul>
    </div>
</div>
@endsection