@extends('templates.admin')

<head>
   <title> Edit Obat | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="col-sm-12 col-lg-12">
   <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
         <div class="iq-header-title">
            <h4 class="card-title">Edit Data Obat</h4>
         </div>
      </div>
      <div class="iq-card-body">
         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
         <form class="form-horizontal ml-5" action="{{route('admin.obat.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('patch')}}
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">Kode Obat :</label>
               <div class="col-sm-8">
                  <input name="kode" type="text" class="form-control ml-3 text-dark {{$errors->has('kode')?'is-invalid':''}}" id="email" placeholder="" value="{{$data->kode}}">
                  @if ($errors->has('kode'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('kode')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama Obat :</label>
               <div class="col-sm-8">
                  <input name="nama" type="text" class="form-control ml-3 text-dark {{$errors->has('nama')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->nama}}">
                  @if ($errors->has('nama'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('nama')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Obat :</label>
               <div class="col-sm-8">
                  <input name="jenis" type="text" class="form-control ml-3 text-dark {{$errors->has('jenis')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->jenis}}">
                  @if ($errors->has('jenis'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('jenis')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Aturan Minum :</label>
               <div class="col-sm-8">
                   <textarea name="aturan_minum" class="ml-3 form-control {{ $errors->has('aturan_minum') ? 'is-invalid' : '' }}" id="aturan_minum" cols="30" rows="3">{{$data->aturan_minum}}</textarea>
                   @if ($errors->has('aturan_minum'))
                       <span class="invalid-feedback" role="alert">
                           <p><b>{{ $errors->first('aturan_minum') }}</b></p>
                       </span>
                   @endif
               </div>
           </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Kadaluarsa Obat :</label>
               <div class="col-sm-8">
                  <input name="kadaluarsa" type="date" class="form-control ml-3 text-dark {{$errors->has('kadaluarsa')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->kadaluarsa}}">
                  @if ($errors->has('kadaluarsa'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('kadaluarsa')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Harga Obat :</label>
               <div class="col-sm-8">
                  <input name="harga" type="number" class="form-control ml-3 text-dark {{$errors->has('harga')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->harga}}">
                  @if ($errors->has('harga'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('harga')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jumlah Stok Obat :</label>
               <div class="col-sm-8">
                  <input name="stok" type="number" class="form-control ml-3 text-dark {{$errors->has('stok')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->stok}}">
                  @if ($errors->has('stok'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('stok')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <!-- <div class="form-group">
               <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
               </div>
            </div> -->
            <div class="form-group text-center">
               <a class="btn btn-primary text-white" onclick="history.back()">Batal</a>
               <button type="submit" class="btn btn-info text-white">Simpan</button>
         </form>
      </div>
   </div>
</div>


@endsection