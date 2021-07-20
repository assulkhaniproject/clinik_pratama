@extends('templates.admin')

<head>
   <title> Edit Data Pasien | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="col-sm-12 col-lg-12">
   <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
         <div class="iq-header-title">
            <h4 class="card-title">Edit Data Pasien</h4>
         </div>
      </div>
      <div class="iq-card-body">
         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
         <form class="form-horizontal ml-5" action="{{route('admin.pasien.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('patch')}}
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center ml-4" for="">Kategori :</label>
               <div class="col-sm-8">
                  <input name="kategori_pasien" type="text" class="form-control ml-3 text-dark {{$errors->has('kategori_pasien')?'is-invalid':''}}" id="email" placeholder="" value="{{$data->kategori_pasien}}" disabled>
               </div>
            </div>
            @if ($data->kategori_pasien != 'Pasien Civitas PHB')
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
               <div class="col-sm-8">
                  <input name="no_identitas" type="text" class="form-control ml-3 text-dark {{$errors->has('no_identitas')?'is-invalid':''}}" id="email" placeholder="" value="{{$data->no_identitas}}">
                  @if ($errors->has('no_identitas'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('no_identitas')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            @endif
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama :</label>
               <div class="col-sm-8">
                  <input name="nama" type="nama" class="form-control ml-3 text-dark {{$errors->has('nama')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->nama}}">
                  @if ($errors->has('nama'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('nama')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="row form-group">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tempat / Tanggal Lahir :</label>
               <div class="col-4">
                  <input name="tempat_lahir" type="text" class="form-control ml-3 text-dark {{$errors->has('tempat_lahir')?'is-invalid':''}}" placeholder="" value="{{$data->tempat_lahir}}">
                  @if ($errors->has('tempat_lahir'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('tempat_lahir')}}</b></p>
                  </span>
                  @endif
               </div>
               <div class="col-4">
                  <input name="tanggal_lahir" type="date" class="form-control ml-3 text-dark {{$errors->has('tanggal_lahir')?'is-invalid':''}}" placeholder="" value="{{$data->tanggal_lahir}}">
                  @if ($errors->has('tanggal_lahir'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('tanggal_lahir')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Kelamin :</label>
               <div class="col-sm-8">
                  <select name="jenis_kelamin" type="nama" class="form-control ml-3 text-dark {{$errors->has('jenis_kelamin')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->jenis_kelamin}}">
                     <option {{$data->jenis_kelamin === 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                     <option {{$data->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
                  @if ($errors->has('jenis_kelamin'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('jenis_kelamin')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Alamat :</label>
               <div class="col-sm-8">
                  <textarea name="alamat" type="nama" class="form-control ml-3 text-dark {{$errors->has('alamat')?'is-invalid':''}}" id="pwd1" placeholder="" value="">{{$data->alamat}}</textarea>
                  @if ($errors->has('alamat'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('alamat')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Usia :</label>
               <div class="col-sm-8">
                  <input name="usia" type="nama" class="form-control ml-3 text-dark {{$errors->has('usia')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->usia}}">
                  @if ($errors->has('usia'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('usia')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Golongan Darah :</label>
               <div class="col-sm-8">
                  <select name="golongan_darah" type="nama" class="form-control ml-3 text-dark {{$errors->has('golongan_darah')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->golongan_darah}}">
                     <option {{$data->golongan_darah === 'A' ? 'selected' : '' }}>A</option>
                     <option {{$data->golongan_darah === 'B' ? 'selected' : '' }}>B</option>
                     <option {{$data->golongan_darah === 'AB' ? 'selected' : '' }}>AB</option>
                     <option {{$data->golongan_darah === 'O' ? 'selected' : '' }}>O</option>
                  </select>
                  @if ($errors->has('golongan_darah'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('golongan_darah')}}</b></p>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">No.Hp :</label>
               <div class="col-sm-8">
                  <input name="no_hp" type="nama" class="form-control ml-3 text-dark {{$errors->has('no_hp')?'is-invalid':''}}" id="pwd1" placeholder="" value="{{$data->no_hp}}">
                  @if ($errors->has('no_hp'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('no_hp')}}</b></p>
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