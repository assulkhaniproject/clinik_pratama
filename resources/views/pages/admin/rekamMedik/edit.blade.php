@extends('templates.admin')

<head>
    <title> Edit Rekam Medik | KLINIK PRATAMA HB</title>
</head>
@section('content')

    <div class="col-sm-12 col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Edit Data Rekam Medik Pasien</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
                <form class="form-horizontal ml-5" action="{{ route('rekamMedik.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    <fieldset>
                        @csrf
                        {{ method_field('patch') }}
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center ml-4" for="">No Rekam Medik :</label>
                            <div class="col-sm-8">
                                <input type="text" name="no_rekam_medik" class="form-control ml-3 text-dark {{$errors->has('no_rekam_medik')?'is-invalid':''}}" id="email" placeholder="" readonly
                                    value="{{ $data->no_rekam_medik }}">
                                @if ($errors->has('no_rekam_medik'))
                                <span class="invalid-feedback ml-3" role="alert">
                                    <p><b>{{ $errors->first('no_rekam_medik')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. Identitas :</label>
                            <div class="col-sm-8">
                                <input type="text" name="no_identitas" class="form-control ml-3 text-dark" id="no_identitas" placeholder=""
                                    readonly value="{{ $pasien->no_identitas }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tanggal Periksa
                                :</label>
                            <div class="col-sm-8">
                                <input type="date" name="tanggal_periksa" class="form-control ml-3 text-dark {{$errors->has('tanggal_periksa')?'is-invalid':''}}" id="pwd1" placeholder=""
                                    value="{{ $data->tanggal_periksa }}">
                                @if ($errors->has('tanggal_periksa'))
                                <span class="invalid-feedback ml-3" role="alert">
                                    <p><b>{{ $errors->first('tanggal_periksa')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama dokter
                                :</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_doc" class="form-control ml-3 text-dark {{$errors->has('nama_doc')?'is-invalid':''}}" id="pwd1" placeholder=""
                                    value="{{ $data->nama_doc }}">
                                @if ($errors->has('nama_doc'))
                                <span class="invalid-feedback ml-3" role="alert">
                                    <p><b>{{ $errors->first('nama_doc')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Periksa
                                :</label>
                            <div class="col-sm-8">
                                <select name="jenis_periksa" type="text" class="form-control ml-3 text-dark {{$errors->has('text')?'is-invalid':''}}" id="jenis_periksa" required>
                                    @foreach ($jenisPemeriksaan as $item)
                                        <option value="{{$item}}" {{$item == $data->jenis_periksa ? 'selected':''}}>{{$item}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('jenis_periksa'))
                                <span class="invalid-feedback ml-3" role="alert">
                                    <p><b>{{ $errors->first('jenis_periksa')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan :</label>
                            <div class="col-sm-8">
                                <textarea type="text" name="keluhan" class="form-control ml-3 text-dark {{$errors->has('keluhan')?'is-invalid':''}}" id="pwd1" placeholder=""
                                    value="">{{ $data->keluhan }}</textarea>
                                @if ($errors->has('keluhan'))
                                <span class="invalid-feedback ml-3" role="alert">
                                    <p><b>{{ $errors->first('keluhan')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan :</label>
                            <div class="col-sm-8">
                                <textarea type="text" name="tindakan" class="form-control ml-3 text-dark {{$errors->has('tindakan')?'is-invalid':''}}" id="pwd1" placeholder=""
                                    value="">{{ $data->tindakan }}</textarea>
                                @if ($errors->has('tindakan'))
                                <span class="invalid-feedback ml-3" role="alert">
                                    <p><b>{{ $errors->first('tindakan')}}</b></p>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Resep Obat:</label>
                            <div class="col-sm-8">
                                <div class="ml-3">
                                    <select name="resep[]" class="fetch_resep form-control select2 ml-3 {{$errors->has('resep')?'is-invalid':''}}" multiple data-placeholder="Cari Obat">
                                        @foreach($data->obat as $key => $item)                                   
                                            <option value="{{ $item->id }}" @if($data->obat->containsStrict('id', $item->id)) selected="selected" @endif>{{ $item->kode }} {{ $item->nama }}</option>
                                         @endforeach 
                                    </select>
                                    @if ($errors->has('resep'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('resep')}}</b></p>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group text-center">
                            <a class="btn btn-primary text-white" onclick="history.back()">Keluar</a>
                            <button type="submit" class="btn btn-warning text-white">Simpan</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        @section('othscript')
        <script>
            $('.fetch_resep').select2({
                  placeholder: $(this).data("placeholder"),
                  theme: 'bootstrap4',
                  ajax: {
                      url: '/admin/rekamMedik/get-obat/fetch/',
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
