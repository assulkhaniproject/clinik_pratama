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
                        <h4 class="card-title">Pengaturan Lainnya</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" action="{{ route('admin.pengaturan.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Kepala Klinik:</label>
                            <input name="kepala_klinik" type="text" class="form-control {{$errors->has('kepala_klinik')?'is-invalid':''}}" id="kepala_klinik" value="{{$kepalaKlinik }}">
                            @if ($errors->has('kepala_klinik'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('kepala_klinik')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn iq-bg-primary mt-3">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection