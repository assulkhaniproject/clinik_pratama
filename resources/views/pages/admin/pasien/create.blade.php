@extends('templates.admin')

<head>
   <title> Tambah Data | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Tambah Data Pasien</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
               <form method="post" action="{{route('pasien.store')}}">
                  @csrf
                  <div class="form-group">
                     <label for="email">Kategori:</label>
                     <select name="kategori_pasien" type="text" class="form-control {{$errors->has('kategori_pasien')?'is-invalid':''}}" id="email1">
                        <option>...</option>
                        <option>Pasien Umum</option>
                        <option>Pasien Civitas PHB</option>
                     </select>
                     @if ($errors->has('kategori_pasien'))
                     <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('kategori_pasien')}}</b></p>
                     </span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label for="">Nama:</label>
                     <input name="nama" type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}" id="nama">
                     @if ($errors->has('nama'))
                     <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('nama')}}</b></p>
                     </span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label for="">No Identitas:</label>
                     <input name="no_identitas" type="number" class="form-control {{$errors->has('no_identitas')?'is-invalid':''}}" id="identitas">
                     @if ($errors->has('no_identitas'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('no_identitas')}}</b></p>
                  </span>
                  @endif
                  </div>
                  <div class="row form-group">
                     <div class="col-6">
                        <label for="">Tempat Lahir:</label>
                        <input name="tempat_lahir" type="text" class="form-control {{$errors->has('tempat_lahir')?'is-invalid':''}}" placeholder="">
                        @if ($errors->has('tempat_lahir'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('tempat_lahir')}}</b></p>
                  </span>
                  @endif
                     </div>
                     <div class="col-6">
                        <label for="">Tanggal Lahir:</label>
                        <input name="tanggal_lahir" type="date" class="form-control {{$errors->has('tanggal_lahir')?'is-invalid':''}}" placeholder="">
                        @if ($errors->has('tanggal_lahir'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('tanggal_lahir')}}</b></p>
                  </span>
                  @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="">Jenis Kelamin:</label>
                     <select name="jenis_kelamin" type="text" class="form-control {{$errors->has('jenis_kelamin')?'is-invalid':''}}" id="jk">
                        <option>...</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        @if ($errors->has('jenis_kelamin'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('jenis_kelamin')}}</b></p>
                  </span>
                  @endif
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="">Alamat:</label>
                     <textarea name="alamat" type="text" class="form-control {{$errors->has('alamat')?'is-invalid':''}}" id="alamat"></textarea>
                     @if ($errors->has('alamat'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('alamat')}}</b></p>
                  </span>
                  @endif
                     
                  </div>
                  <div class="form-group">
                     <label for="">Usia:</label>
                     <input name="usia" type="number" class="form-control {{$errors->has('usia')?'is-invalid':''}}" id="usia">
                     @if ($errors->has('usia'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('usia')}}</b></p>
                  </span>
                  @endif
                  </div>
                  <div class="form-group">
                     <label for="">Golongan Darah:</label>
                     <select name="golongan_darah" type="text" class="form-control" id="gol_darah" required>
                        <option>...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="">No HP:</label>
                     <input name="no_hp" type="number" class="form-control {{$errors->has('no_hp')?'is-invalid':''}}" id="no_hp">
                     @if ($errors->has('no_hp'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('no_hp')}}</b></p>
                  </span>
                  @endif
                  </div>
                  <!-- <div class="checkbox mb-3">
                     <label><input type="checkbox"> Remember me</label>
                  </div> -->
                  <a class="btn iq-bg-danger mt-3" onclick="history.back()">Batal</a>
                  <button type="submit" class="btn iq-bg-primary mt-3">Simpan</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection