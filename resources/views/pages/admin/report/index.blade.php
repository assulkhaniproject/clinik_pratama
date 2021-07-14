@extends('templates.admin')

<head>
    <title> Report | KLINIK PRATAMA HB</title>
</head>
@section('content')
{{-- <div class="mt-5 iq-maintenance">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-12 text-center">
                <div class="iq-maintenance">
                    <img src="images/error/02.png" class="img-fluid" alt="">
                    <h3 class="mt-4 mb-1">We are Currently Performing Maintenance</h3>
                    <p>Please check back in sometime.</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Report Data Rekam Medik</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" action="{{ route('admin.report.store') }}">
                        @csrf
                        Berdasarkan Tanggal: 
                        {{-- <div class="form-group">
                            <label for="">Pasien:</label>
                            <input name="ke_tanggal" type="text" class="form-control {{$errors->has('ke_tanggal')?'is-invalid':''}}" id="ke_tanggal">
                            @if ($errors->has('ke_tanggal'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('ke_tanggal')}}</b></p>
                            </span>
                            @endif
                        </div> --}}
                        <div class="form-group">
                            <label for="">Dari Tanggal:</label>
                            <input name="dari_tanggal" type="date" class="form-control {{$errors->has('dari_tanggal')?'is-invalid':''}}" id="dari_tanggal">
                            @if ($errors->has('dari_tanggal'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('dari_tanggal')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Sampai Tanggal:</label>
                            <input name="ke_tanggal" type="date" class="form-control {{$errors->has('ke_tanggal')?'is-invalid':''}}" id="ke_tanggal">
                            @if ($errors->has('ke_tanggal'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('ke_tanggal')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn iq-bg-primary mt-3">Buat Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection