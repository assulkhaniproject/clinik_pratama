@extends('templates.'.session('role'))

<head>
    <title> Info Corona-19 | KLINIK PRATAMA HB</title>
</head>
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
        @foreach($datas as $dataCorona)
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-left">
                                    <h4 class="mb-2 mt-2">Positif</h4>
                                    <h3 class="mb-0 line-height">{{$dataCorona['positif']}}</h3>
                                </div>
                                <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-task-line"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-left">
                                    <h4 class="mb-2 mt-2">Sembuh</h4>
                                    <h3 class="mb-0 line-height">{{$dataCorona['sembuh']}}</h3>
                                </div>
                                <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-hospital-line"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-left">
                                    <h4 class="mb-2 mt-2">Meninggal</h4>
                                    <h3 class="mb-0 line-height">{{$dataCorona['meninggal']}}</h3>
                                </div>
                                <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-gradienter-line"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body P-0 rounded" style="background: url(images/page-img/44.jpg) no-repeat scroll center center; background-size: contain; min-height: 127px;">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>


        <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Global record</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Positif</th>
                                    <th scope="col">Sembuh</th>
                                    <th scope="col">Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $dataCorona)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$loop->iteration}} .</td>
                                    <td>{{$dataCorona['attributes']['Provinsi']}}</td>
                                    <td>{{$dataCorona['attributes']['Kasus_Posi']}}</td>
                                    <td>{{$dataCorona['attributes']['Kasus_Semb']}}</td>
                                    <td>{{$dataCorona['attributes']['Kasus_Meni']}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection