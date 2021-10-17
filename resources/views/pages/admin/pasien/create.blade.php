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
               <form method="post" action="{{route('admin.pasien.store')}}">
                  @csrf
                  <div class="form-group">
                     <label for="email">Kategori:</label>
                     <select name="kategori_pasien" type="text" class="form-control {{$errors->has('kategori_pasien')?'is-invalid':''}}" id="kategori">
                        <option disabled selected>...</option>
                        <option value="Pasien Umum">Pasien Umum</option>
                        <option value="Pasien Civitas PHB">Pasien Civitas PHB</option>
                     </select>
                     @if ($errors->has('kategori_pasien'))
                     <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('kategori_pasien')}}</b></p>
                     </span>
                     @endif
                  </div>
                  <div id="civitas" style="display: none">
                     <div class="form-group">
                        <label for="civitas">Pilih</label>
                        <div class="form-group">
                           <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="mahasiswa" value="Mahasiswa" name="civitas" class="custom-control-input">
                              <label class="custom-control-label" for="mahasiswa"> Mahasiswa</label>
                           </div>
                           <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="pegawai" value="Pegawai" name="civitas" class="custom-control-input">
                              <label class="custom-control-label" for="pegawai"> Pegawai</label>
                           </div>
                           @if ($errors->has('civitas'))
                           <span class="invalid-feedback" role="alert">
                              <p><b>{{ $errors->first('civitas')}}</b></p>
                           </span>
                           @endif
                        </div>
                     </div>
                     {{-- <div class="form-group">
                        <label for="unik">NIM / NIPY</label>
                        <select name="nip_nipy" id="nip_nipy" class="fetch_nip_nipy form-control select2" data-placeholder="Cari NIM / NIPY"></select>
                     </div> --}}
                     <div class="form-group">
                        <label for="">NIM / NIPY:</label>
                        <input name="nim_nipy" type="text" class="form-control {{$errors->has('nim_nipy')?'is-invalid':''}}" id="nim_nipy">
                        @if ($errors->has('nim_nipy'))
                        <span class="invalid-feedback" role="alert">
                           <p><b>{{ $errors->first('nim_nipy')}}</b></p>
                        </span>
                        @endif
                     </div>
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
                  <div class="form-group" id="no_identitas_form">
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
                        <input name="tempat_lahir" type="text" class="form-control {{$errors->has('tempat_lahir')?'is-invalid':''}}" placeholder="" id="tempat_lahir">
                        @if ($errors->has('tempat_lahir'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('tempat_lahir')}}</b></p>
                  </span>
                  @endif
                     </div>
                     <div class="col-6">
                        <label for="">Tanggal Lahir:</label>
                        <input name="tanggal_lahir" type="date" class="form-control {{$errors->has('tanggal_lahir')?'is-invalid':''}}" placeholder="" id="tanggal_lahir"
                        min="{{ date('Y-m-d', strtotime(\Carbon\Carbon::now()->subYear(60)))  }}"
                        max="{{ date('Y-m-d', strtotime(\Carbon\Carbon::now()->subDay(1)))  }}">
                        @if ($errors->has('tanggal_lahir'))
                  <span class="invalid-feedback" role="alert">
                     <p><b>{{ $errors->first('tanggal_lahir')}}</b></p>
                  </span>
                  @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="">Jenis Kelamin:</label>
                     <select name="jenis_kelamin" type="text" class="form-control {{$errors->has('jenis_kelamin')?'is-invalid':''}}" id="jenis_kelamin">
                        <option disabled selected>...</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
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
                        <option disabled selected>...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="">No HP:</label>
                     <input name="no_hp" type="tel" class="form-control {{$errors->has('no_hp')?'is-invalid':''}}" id="no_hp">
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

@section('script')
    <script>
        $(() => {
            $('#no_identitas_form').show();

            $('#kategori').change(() => {
                if ($('#kategori').val() == 'Pasien Civitas PHB') {
                    $('#no_identitas_form').hide();
                    $('#civitas').show();
                } else {
                    $('#no_identitas_form').show();
                    $('#civitas').hide();
                }
            });

            $('#tanggal_lahir').change(() => {
               $('#usia').val(_calculateAge(new Date($('#tanggal_lahir').val())));
            })

            function _calculateAge(birthday) {
               var ageDifMs = Date.now() - birthday.getTime();
               var ageDate = new Date(ageDifMs);
               return Math.abs(ageDate.getUTCFullYear() - 1970);
            }
        })

        // AJAX SELECT2
        $('input[name="type"]').click(function() {
            let valType = $(this).val();

            $('.fetch_nip_nipy').select2({
                    placeholder: $(this).data("placeholder"),
                    theme: 'bootstrap4',
                    ajax: {
                        url: '/admin/nipnipy/fetch/' + valType,
                        dataType: 'json',
                        delay: 100,
                        allowClear: true,
                        cache: true,
                        data: function(params) {
                            return {
                                q: params.term
                            }
                        },
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: (valType == 'mahasiswa' ? item.nim : item.nipy),
                                        text: (valType == 'mahasiswa' ? item.nim : item.nipy),
                                    }
                                })
                            };
                        },
                    },
                })
                .on("select2:select", function(e) {
                    var uniq = $(e.currentTarget).val();

                    $.ajax({
                        url: '/admin/data-nipnipy/fetch/' + uniq + '/' + valType,
                        type: 'GET',
                        datatype: 'json',
                        success: function(data) {
                            $('#nama').val(data.nama);
                            $('#tempat_lahir').val(data.tempat_lahir);
                            $('#tanggal_lahir').val(data.tanggal_lahir);
                            $('#jenis_kelamin option[value="' + data.jenis_kelamin + '"]').prop(
                                "selected", true);
                            $('#alamat').val(data.alamat);
                            $('#usia').val(_calculateAge(new Date(data.tanggal_lahir)));
                            $('#no_hp').val(data.no_hp);
                        },
                    });
                });
        });
    </script>
@endsection

@endsection
