@extends('templates.apoteker')

<head>
    <title> Dashboard | KLINIK PRATAMA HB</title>
</head>
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Clinic Staff</h4>
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
        </div>
        <div class="col-sm-12 col-lg-12">
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
                                <img src="{{ asset('admin/images/small/img-1.jpg') }}" class="d-block w-100" alt="#">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('admin/images/small/img-1.jpg') }}" class="d-block w-100" alt="#">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('admin/images/small/img-1.jpg') }}" class="d-block w-100" alt="#">
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

    </div>
@endsection
