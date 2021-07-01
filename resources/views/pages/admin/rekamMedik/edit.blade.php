@extends('templates.admin')

<head>
    <title> Edit Rekam Medik | KLINIK PRATAMA HB</title>
</head>
@section('content')

    <div class="col-sm-12 col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Edit Data Rekam Medik Pasien</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
                <form class="form-horizontal ml-5" action="{{ route('rekamMedik.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    <fieldset>
                        @csrf
                        {{ method_field('patch') }}
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center ml-4" for="">No Rekam Medik :</label>
                            <div class="col-sm-8">
                                <input type="text" name="no_rekam_medik" class="form-control ml-3 text-dark" id="email" placeholder="" readonly
                                    value="{{ $data->no_rekam_medik }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
                            <div class="col-sm-8">
                                <input type="text" name="no_identitas" class="form-control ml-3 text-dark" id="no_identitas" placeholder=""
                                    readonly value="{{ $pasien->no_identitas }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tanggal Periksa
                                :</label>
                            <div class="col-sm-8">
                                <input type="date" name="tanggal_periksa" class="form-control ml-3 text-dark" id="pwd1" placeholder=""
                                    value="{{ $data->tanggal_periksa }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama dokter
                                :</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_doc" class="form-control ml-3 text-dark" id="pwd1" placeholder=""
                                    value="{{ $data->nama_doc }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Periksa
                                :</label>
                            <div class="col-sm-8">
                                <input type="text" name="jenis_periksa" class="form-control ml-3 text-dark" id="pwd1" placeholder=""
                                    value="{{ $data->jenis_periksa }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan :</label>
                            <div class="col-sm-8">
                                <textarea type="text" name="keluhan" class="form-control ml-3 text-dark" id="pwd1" placeholder=""
                                    value="">{{ $data->keluhan }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan :</label>
                            <div class="col-sm-8">
                                <textarea type="text" name="tindakan" class="form-control ml-3 text-dark" id="pwd1" placeholder=""
                                    value="">{{ $data->tindakan }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Resep Obat
                                :</label>
                            <div class="col-sm-8">
                                <input type="text" name="resep" class="form-control ml-3 text-dark" id="pwd1" placeholder=""
                                    value="{{$data->resep}}">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a class="btn btn-primary text-white" onclick="history.back()">Keluar</a>
                            <button type="submit" class="btn btn-warning text-white">Simpan</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    @endsection
