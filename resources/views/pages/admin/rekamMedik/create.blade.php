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
                    <form method="post" action="{{route('rekamMedik.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Nomor Rekam Medik:</label>
                            <input name="no_rekam_medik" type="text" class="form-control {{$errors->has('no_rekam_medik')?'is-invalid':''}}" id="no_rekam_medik" value="{{$noRekamMedik}}"readonly>
                            @if ($errors->has('no_rekam_medik'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('no_rekam_medik')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">No Identitas-Nama:</label>
                            <select name="no_identitas" id="no_identitas" class="fetch_no_identitas form-control select2" data-placeholder="Cari Pasien"></select>
                            @if ($errors->has('no_identitas'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('no_identitas')}}</b></p>
                            </span>
                            @endif
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Nama:</label>
                            <input name="nama" type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}" id="name_id">
                            @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('nama')}}</b></p>
                            </span>
                            @endif
                        </div> --}}
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
                            <label for="">Nama Dokter:</label>
                            <input name="nama_doc" type="text" class="form-control {{$errors->has('nama_doc')?'is-invalid':''}}" id="nama_doc">
                            @if ($errors->has('nama_doc'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('nama_doc')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Pemeriksaan:</label>
                            <select name="jenis_periksa" type="text" class="form-control" id="gol_darah" required>
                                <option>...</option>
                                @foreach ($jenisPemeriksaan as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Keluhan Pasien:</label>
                            <textarea name="keluhan" type="text" class="form-control {{$errors->has('keluhan')?'is-invalid':''}}" id="keluhan" disabled></textarea>
                            @if ($errors->has('keluhan'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('keluhan')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Tindakan Dokter:</label>
                            <textarea name="tindakan" type="text" class="form-control {{$errors->has('tindakan')?'is-invalid':''}}" id="tindakan" disabled></textarea>
                            @if ($errors->has('tindakan'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('tindakan')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Resep Obat:</label>
                            <input name="resep_obat" type="text" class="form-control {{$errors->has('resep_obat')?'is-invalid':''}}" id="resep_obat" disabled>
                            @if ($errors->has('resep_obat'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('resep_obat')}}</b></p>
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