@extends('templates.apoteker')

<head>
    <title> Dashboard | KLINIK PRATAMA HB</title>
</head>
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Staf Apoteker</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul id="doster-list-slide" class="d-flex flex-wrap align-items-center p-0">
                            <li class="doctor-list-item col-md-3 text-center p-2">
                                <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                        <img src="{{ asset('admin/images/user/05.jpg') }}"
                                            class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                        <h6>Dr. Ike Marlinda</h6>
                                        <h6 class="text-secondary">Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                        <p class="mb-0 text-center pl-2 pr-2">Klinik Pratama Harapan Bersama</p>
                                    </div>
                                </div>
                            </li>
                            <li class="doctor-list-item col-md-3 text-center p-2">
                                <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                        <img src="{{ asset('admin/images/user/06.jpg') }}"
                                            class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                        <h6>Dr. Inka Roekmiasri</h6>
                                        <h6 class="text-secondary">Nurse</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                        <p class="mb-0 text-center pl-2 pr-2">Klinik Pratama Harapan Bersama</p>
                                    </div>
                                </div>
                            </li>
                            <li class="doctor-list-item col-md-3 text-center p-2">
                                <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                        <img src="{{ asset('admin/images/user/07.jpg') }}"
                                            class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                        <h6>Dr. Ike Marlinda</h6>
                                        <h6 class="text-secondary">Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                        <p class="mb-0 text-center pl-2 pr-2">Klinik Pratama Harapan Bersama</p>
                                    </div>
                                </div>
                            </li>
                            <li class="doctor-list-item col-md-3 text-center p-2">
                                <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                        <img src="{{ asset('admin/images/user/08.jpg') }}"
                                            class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                        <h6>Dr. Inka Roekmiasri</h6>
                                        <h6 class="text-secondary">Nurse</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                        <p class="mb-0 text-center pl-2 pr-2">Klinik Pratama Harapan Bersama</p>
                                    </div>
                                </div>
                            </li>
                            <li class="doctor-list-item col-md-3 text-center p-2">
                                <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                        <img src="{{ asset('admin/images/user/09.jpg') }}"
                                            class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                        <h6>Dr. Ike Marlinda</h6>
                                        <h6 class="text-secondary">Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                        <p class="mb-0 text-center pl-2 pr-2">Klinik Pratama Harapan Bersama</p>
                                    </div>
                                </div>
                            </li>
                            <li class="doctor-list-item col-md-3 text-center p-2">
                                <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                        <img src="{{ asset('admin/images/user/10.jpg') }}"
                                            class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                        <h6>Dr. Inka Roekmiasri</h6>
                                        <h6 class="text-secondary">Nurse</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                        <p class="mb-0 text-center pl-2 pr-2">Klinik Pratama Harapan Bersama</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
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
