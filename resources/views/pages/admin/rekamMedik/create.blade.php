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
                        <h4 class="card-title">Tambah Data Rekam Medis</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" action="{{route('admin.rekamMedik.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Nomor Rekam Medis:</label>
                            <input name="no_rekam_medik" type="text" class="form-control {{$errors->has('no_rekam_medik')?'is-invalid':''}}" id="no_rekam_medik" value="{{$noRekamMedik}}"readonly>
                            @if ($errors->has('no_rekam_medik'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('no_rekam_medik')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">No Identitas-Nama:</label>
                            <select name="no_identitas" id="no_identitas" class="fetch_no_identitas form-control select2 {{$errors->has('no_identitas')?'is-invalid':''}}" data-placeholder="Cari Pasien"></select>
                            @if ($errors->has('no_identitas'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('no_identitas')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pemeriksaan:</label>
                            <input name="tanggal_periksa" value="{{ date('Y-m-d') }}" type="date" class="form-control {{$errors->has('tanggal_periksa')?'is-invalid':''}}" placeholder="" readonly>
                            @if ($errors->has('tanggal_periksa'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('tanggal_periksa')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Nama Petugas Medis:</label>
                            <select name="petugas_id" type="text" class="form-control text-dark {{$errors->has('petugas_id')?'is-invalid':''}}" id="petugas_id" required>
                                @foreach ($petugasMedis as $item)
                                    <option value="{{$item->id}}">{{$item->nama}} ({{$item->kategori}})</option>
                                @endforeach
                            </select>
                            @if ($errors->has('petugas_id'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('petugas_id')}}</b></p>
                            </span>
                            @endif
                        </div>
                        <!-- <div class="checkbox mb-3">
                     <label><input type="checkbox"> Remember me</label>
                  </div> -->
                        <span>Ketika anda klik simpan, rekam medis akan dikirim ke bagian petugas medis</span> <br>
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
              url: '{{route('admin.rekamMedik.getPasien')}}',
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
                            text:  (item.no_identitas == '' ? ((item.civitas == 'Mahasiswa' ? 'NIM. ':'NIPY. ') + item.nim_nipy):'NO.ID. '+item.no_identitas) + ' - ' +item.nama,
                          }
                      })
                  };
              },
          },
     })
</script>
@endsection

@endsection