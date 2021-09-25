@extends('templates.admin')

<head>
   <title> Detail Pasien | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="col-sm-12 col-lg-12">
   <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
         <div class="iq-header-title">
            <h4 class="card-title">Detail Data Pasien</h4>
         </div>
      </div>
      <div class="iq-card-body">
         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
         <form class="form-horizontal ml-5">
         <fieldset disabled>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center ml-4" for="">Kategori :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->kategori_pasien}}">
               </div>
            </div>
            @if ($data->kategori_pasien != 'Pasien Civitas PHB')
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->no_identitas}}">
               </div>
            </div>
            @else
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">Civitas :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->civitas}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">NIM / NIPY :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->nim_nipy}}">
               </div>
            </div>
            @endif
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->nama}}">
               </div>
            </div>
            <div class="row form-group">
            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tempat / Tanggal Lahir :</label>
               <div class="col-4">
                  <input name="tempat_lahir" type="text" class="form-control ml-3 text-dark" placeholder="" value="{{$data->tempat_lahir}}">
               </div>
               <div class="col-4">
                  <input name="tanggal_lahir" type="date" class="form-control ml-3 text-dark" placeholder="" value="{{$data->tanggal_lahir}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Kelamin :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->jenis_kelamin}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Alamat :</label>
               <div class="col-sm-8">
                  <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="">{{$data->alamat}}</textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Usia :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->usia}} Tahun">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Golongan Darah :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->golongan_darah}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">No.Hp :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->no_hp}}">
               </div>
            </div>
         </fieldset>
            <!-- <div class="form-group">
               <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
               </div>
            </div> -->
            <div class="form-group text-center">
               <a class="btn btn-primary text-white" onclick="history.back()">Keluar</a>
               <a href="{{route('admin.pasien.edit', $data->id)}}" class="btn btn-warning text-white">Edit</a>
            </div>
         </form>
      </div>
   </div>
   @endsection