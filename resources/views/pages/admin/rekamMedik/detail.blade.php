@extends('templates.admin')

<head>
   <title> Detail Rekam Medik | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="col-sm-12 col-lg-12">
   <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
         <div class="iq-header-title">
            <h4 class="card-title">Detail Data Rekam Medik Pasien</h4>
         </div>
      </div>
      <div class="iq-card-body">
         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
         <form class="form-horizontal ml-5">
         <fieldset disabled>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center ml-4" for="">Kategori :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->no_rekam_medik}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->no_identitas}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tanggal Periksa :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->tanggal_periksa}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Periksa :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->jenis_periksa}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">No.Hp :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->no_hp}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan :</label>
               <div class="col-sm-8">
                  <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="">{{$data->keluhan}}</textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan :</label>
               <div class="col-sm-8">
                  <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="">{{$data->tindakan}}</textarea>
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
               <a href="#" class="btn btn-warning text-white">Edit</a>
            </div>
         </form>
      </div>
   </div>
   @endsection