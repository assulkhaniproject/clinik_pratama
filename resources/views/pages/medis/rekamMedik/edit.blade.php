@extends('templates.medis')

<head>
    <title> Edit Rekam Medis | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="col-sm-12 col-lg-12">
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Input Pemeriksaan Rekam Medis Pasien</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
            <form class="form-horizontal ml-5" action="{{ route('medis.rekamMedik.update', $rekamMedik->id) }}" method="post"
                enctype="multipart/form-data">
                <fieldset>
                    @csrf
                    {{ method_field('patch') }}
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Pemeriksaan:</label>
                        <div class="col-sm-8">
                            <select name="pemeriksaan_id" type="text" class="form-control ml-3 text-dark {{$errors->has('pemeriksaan_id')?'is-invalid':''}}" id="pemeriksaan_id" required>
                                <option disabled selected>...</option>
                                @foreach ($jenisPemeriksaan as $item)
                                    <option value="{{$item->id}}" {{$rekamMedik->pemeriksaan_id == $item->id ? 'selected':''}}>{{$item->jenis_pemeriksaan}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('pemeriksaan_id'))
                            <span class="invalid-feedback ml-3" role="alert">
                                <p><b>{{ $errors->first('pemeriksaan_id')}}</b></p>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan:</label>
                        <div class="col-sm-8">
                            <div class="ml-3">
                                <select name="keluhan[]" class="fetch_keluhan form-control select2 ml-3 {{$errors->has('keluhan')?'is-invalid':''}}" multiple data-placeholder="Cari Keluhan">
                                    @foreach($rekamMedik->keluhan as $key => $item)                                   
                                        <option value="{{ $item->id }}" @if($rekamMedik->keluhan->containsStrict('id', $item->id)) selected="selected" @endif>{{ $item->keluhan }}</option>
                                     @endforeach 
                                </select>
                                @if ($errors->has('keluhan'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('keluhan')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1"></label>
                        <div class="col-sm-8">
                            <div class="ml-3">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchKeluhanLain">
                                    <label class="custom-control-label" for="customSwitchKeluhanLain">Tambahkan Keluhan Lain</label>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="keluhan_lain" style="display: none">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan Lain :</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="keluhan_lain" class="form-control ml-3 text-dark {{$errors->has('keluhan_lain')?'is-invalid':''}}" id="pwd1" placeholder=""
                                value=""></textarea>
                            @if ($errors->has('keluhan_lain'))
                            <span class="invalid-feedback ml-3" role="alert">
                                <p><b>{{ $errors->first('keluhan_lain')}}</b></p>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan</label>
                        <div class="col-sm-8">
                            <div class="ml-3">
                                <select name="tindakan[]" class="fetch_tindakan form-control select2 ml-3 {{$errors->has('tindakan')?'is-invalid':''}}" multiple data-placeholder="Cari Tindakan">
                                    @foreach($rekamMedik->tindakan as $key => $item)                                   
                                        <option value="{{ $item->id }}" @if($rekamMedik->tindakan->containsStrict('id', $item->id)) selected="selected" @endif>{{ $item->tindakan }}</option>
                                     @endforeach 
                                </select>
                                @if ($errors->has('tindakan'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('tindakan')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1"></label>
                        <div class="col-sm-8">
                            <div class="ml-3">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchTindakanLain">
                                    <label class="custom-control-label" for="customSwitchTindakanLain">Tambahkan Tindakan Lain</label>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="tindakan_lain" style="display: none">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan Lain:</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="tindakan_lain" class="form-control ml-3 text-dark {{$errors->has('tindakan_lain')?'is-invalid':''}}" id="pwd1" placeholder=""
                                value=""></textarea>
                            @if ($errors->has('tindakan_lain'))
                            <span class="invalid-feedback ml-3" role="alert">
                                <p><b>{{ $errors->first('tindakan_lain')}}</b></p>
                            </span>
                            @endif
                        </div>
                    </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Resep Obat:</label>
                            <div class="col-sm-8">
                                <div class="ml-3">
                                    <select name="resep[]" class="fetch_resep form-control select2 ml-3 {{$errors->has('resep')?'is-invalid':''}}" multiple data-placeholder="Cari Obat">
                                        @foreach($rekamMedik->obat as $key => $item)                                   
                                            <option value="{{ $item->id }}" @if($rekamMedik->obat->containsStrict('id', $item->id)) selected="selected" @endif>{{ $item->kode }} {{ $item->nama }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                @if ($errors->has('resep'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('resep')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Aturan Minum :</label>
                            <div class="col-sm-8">
                                <textarea name="resep_aturan_minum" class="ml-3 form-control {{ $errors->has('resep_aturan_minum') ? 'is-invalid' : '' }}" id="resep_aturan_minum"></textarea>
                                @if ($errors->has('resep_aturan_minum'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('resep_aturan_minum') }}</b></p>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group text-center">
                            Perhatian ! harap dicek kembali, setelah anda mengklik "Kirim Ke Apoteker", rekam medik akan masuk ke apoteker, dan aksi tidak dapat diubah<br>
                            <a class="btn btn-primary text-white" onclick="history.back()">Keluar</a>
                            <button type="submit" class="btn btn-warning text-white">Kirim Ke Apoteker</button>
                            <a type="button" href="{{ route('medis.rekamMedik.print', $rekamMedik->id) }}" target="_blank" class="btn btn-success text-white"><i class="fa fa-download"></i>Cetak dan Tulis Keluhan Tndakan </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="col-sm-12 col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Detail Lain Rekam Medis Pasien</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
                <form class="form-horizontal ml-5">
                    <fieldset>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Status Rekam Medis :</label>
                            <div class="col-sm-8">
                               <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$rekamMedik->getStatus()}}" disabled>
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center ml-4" for="">No Rekam Medis :</label>
                            <div class="col-sm-8">
                               <input type="text" class="form-control ml-3 text-dark" id="email" placeholder="" value="{{$rekamMedik->no_rekam_medik}}" disabled>
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
                            <div class="col-sm-8">
                               <input type="text" class="form-control ml-3 text-dark" id="no_identitas" placeholder="" value="{{$pasien->no_identitas}}" disabled>
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tanggal Periksa :</label>
                            <div class="col-sm-8">
                               <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$rekamMedik->tanggal_periksa}}" disabled>
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Petugas Medis :</label>
                            <div class="col-sm-8">
                               <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$rekamMedik->petugas->nama}}" disabled>
                            </div>
                         </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        @section('othscript')
        <script>
            $(() => {
                $('#customSwitchKeluhanLain').change(function(){
                    if(this.checked) {
                        $('#keluhan_lain').show();
                    } else {
                        $('#keluhan_lain').hide();
                    }
                });    

                $('#customSwitchTindakanLain').change(function(){
                    if(this.checked) {
                        $('#tindakan_lain').show();
                    } else {
                        $('#tindakan_lain').hide();
                    }
                });    
            })

            $('.fetch_keluhan').select2({
                  placeholder: $(this).data("placeholder"),
                  theme: 'bootstrap4',
                  ajax: {
                      url: '{{route('medis.getKeluhan')}}',
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
                                    text:  item.keluhan,
                                  }
                              })
                          };
                      },
                  },
             })
             $('.fetch_tindakan').select2({
                  placeholder: $(this).data("placeholder"),
                  theme: 'bootstrap4',
                  ajax: {
                      url: '{{route('medis.getTindakan')}}',
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
                                    text:  item.tindakan,
                                  }
                              })
                          };
                      },
                  },
             })
            $('.fetch_resep').select2({
                  placeholder: $(this).data("placeholder"),
                  theme: 'bootstrap4',
                  ajax: {
                      url: '{{route('medis.getObat')}}',
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
                                    text:  item.kode+ ' - ' +item.nama,
                                  }
                              })
                          };
                      },
                  },
             })
        </script>
        @endsection
    @endsection
