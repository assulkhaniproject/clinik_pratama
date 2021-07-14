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
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Status Rekam Medik :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->getStatus()}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center ml-4" for="">No Rekam Medik :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$data->no_rekam_medik}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control ml-3 text-dark" id="no_identitas" placeholder="" value="{{$pasien->no_identitas}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tanggal Periksa :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->tanggal_periksa}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Petugas Medis :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->petugas->nama}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Periksa :</label>
               <div class="col-sm-8">
                  <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$data->pemeriksaan->jenis_pemeriksaan ?? ''}}">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan :</label>
               <div class="col-sm-8 ml-3">
                  @foreach ($data->keluhan as $item)
                  <span class="btn btn-light mb-2">
                     {{$item->keluhan}}
                  </span>
                  @endforeach
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan Lainnya :</label>
               <div class="col-sm-8">
                  <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="">{{$data->keluhan_lain}}</textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan :</label>
               <div class="col-sm-8 ml-3">
                  @foreach ($data->tindakan as $item)
                  <span class="btn btn-light mb-2">
                     {{$item->tindakan}}
                  </span>
                  @endforeach
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan Lainnya :</label>
               <div class="col-sm-8">
                  <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="">{{$data->tindakan_lain}}</textarea>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Resep Obat :</label>
               <div class="col-sm-8 ml-3">
                  @foreach ($data->obat as $item)
                  <span class="btn btn-light mb-2">
                     {{$item->nama}}
                  </span>
                  @endforeach
               </div>
            </div>
         </fieldset>
         <!-- <div class="form-group">
            <div class="checkbox">
               <label><input type="checkbox"> Remember me</label>
            </div>
         </div> -->
         <div class="form-group text-center">
            <a type="button" class="btn btn-primary text-white" onclick="history.back()"><i class="ri-reply-fill"></i>Keluar</a>
            @if (!$data->keluhan)
               <a type="button" href="{{ route('rekamMedik.print', $data->id) }}" target="_blank" class="btn btn-success text-white ml-3 mr-3"><i class="fa fa-download"></i>Print</a>
               <a href="{{route('rekamMedik.edit', $data->id)}}" class="btn btn-warning text-white"><i class="fa fa-tag"></i>Edit</a>
            @endif
            </div>
         </form>
      </div>
   </div>
   @endsection