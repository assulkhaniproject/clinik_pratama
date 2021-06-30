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
                        <h4 class="card-title">Tambah Data Rekam Medik</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
                    <form method="post" action="#">
                        @csrf
                        <div class="form-group">
                            <label for="">Nomor Rekam Medik:</label>
                            <input name="no_rekam_medik" type="text" class="form-control {{$errors->has('no_rekam_medik')?'is-invalid':''}}" id="no_rekam_medik" value="{{$noRekamMedik}}" disabled>
                            @if ($errors->has('no_rekam_medik'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('no_rekam_medik')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">No Identitas:</label>
                            {{-- <input name="no_identitas" type="number" class="form-control {{$errors->has('no_identitas')?'is-invalid':''}}" id="number_id"> --}}
                            <select name="no_identitas" id="no_identitas" class="fetch_no_identitas form-control select2" data-placeholder="Cari Pasien"></select>
                            {{-- <div id="autocompleteresultlist" style="position:relative;display:block;"></div> --}}
                            @if ($errors->has('no_identitas'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('no_identitas')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Nama:</label>
                            <input name="nama" type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}" id="name_id">
                            @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('nama')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pemeriksaan:</label>
                            <input name="tanggal_periksa" type="date" class="form-control {{$errors->has('tempat_periksa')?'is-invalid':''}}" placeholder="">
                            @if ($errors->has('tanggal_periksa'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('tempat_periksa')}}</b></p>
                            </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="">No. HP:</label>
                            <input name="no_hp" type="text" class="form-control {{$errors->has('no_hp')?'is-invalid':''}}" id="hp_id">
                            @if ($errors->has('jenis_kelamin'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('jenis_kelamin')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Pemeriksaan:</label>
                            <select name="golongan_darah" type="text" class="form-control" id="gol_darah" required>
                                <option>...</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Keluhan Pasien:</label>
                            <textarea name="alamat" type="text" class="form-control {{$errors->has('alamat')?'is-invalid':''}}" id="alamat"></textarea>
                            @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('alamat')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Keluhan Pasien:</label>
                            <textarea name="alamat" type="text" class="form-control {{$errors->has('alamat')?'is-invalid':''}}" id="alamat"></textarea>
                            @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('alamat')}}</b></p>
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

@section('othscript')
<script>
    $('.fetch_no_identitas').select2({
          placeholder: $(this).data("placeholder"),
          theme: 'bootstrap4',
          ajax: {
              url: '/admin/rekamMedik/get-pasien/fetch/',
              dataType: 'json',
              delay: 100,
              allowClear:true,
              cache: true,
              data: function (params) { 
                  return {
                      q: params.term 
                  }
              },
              processResults: function (data) {
                  return {
                      results:  $.map(data, function (item) {
                          return {
                            id: item.id,
                            text:  item.no_identitas+ ' - ' +item.nama,
                          }
                      })
                  };
              },
          },
     })
</script>
@endsection

@endsection