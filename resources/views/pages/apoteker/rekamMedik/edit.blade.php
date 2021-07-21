@extends('templates.apoteker')

<head>
    <title> Edit Rekam Medik | KLINIK PRATAMA HB</title>
</head>
@section('content')

    <div class="col-sm-12 col-lg-12">
      <div class="iq-card">
         <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                 <h4 class="card-title">Resep Obat Pasien</h4>
             </div>
         </div>
         <div class="iq-card-body">
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Resep Obat :</label>
               <div class="col-sm-8 ml-3">
                  @foreach ($rekamMedik->obat as $item)
                  <span class="btn btn-light mb-2">
                     {{$item->nama}}
                  </span>
                  @endforeach
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Aturan Minum :</label>
               <div class="col-sm-8 ml-3">
                  <textarea name="resep_aturan_minum" class="form-control" rows="5" disabled>{{$rekamMedik->resep_aturan_minum}}</textarea>
               </div>
            </div>
            <div class="form-group text-center mt-3">
               <form class="form-horizontal ml-5" action="{{ route('apoteker.rekamMedik.update', $rekamMedik->id) }}" method="post"
                  enctype="multipart/form-data">
                  <fieldset>
                      @csrf
                      {{ method_field('patch') }}
                      <p>Perhatian ! setelah anda mengklik "Kirim Ke Kasir", rekam medik akan masuk ke kasir, kemudian stok obat akan berkurang dan aksi tidak dapat diubah</p>
                      <a class="btn btn-primary text-white" onclick="history.back()">Keluar</a>
                     <button type="submit" class="btn btn-warning text-white">Kirim Ke Kasir Untuk Pembayarann</button>
                  </fieldset>
               </form>
         </div>
         </div>
     </div>

        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Detail Lain Rekam Medik Pasien</h4>
                </div>
            </div>
            <div class="iq-card-body">
               <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Status Rekam Medik :</label>
                     <div class="col-sm-8">
                        <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$rekamMedik->getStatus()}}" disabled>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center ml-4" for="">No Rekam Medik :</label>
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
                  <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Periksa :</label>
                     <div class="col-sm-8">
                        <input type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="{{$rekamMedik->pemeriksaan->jenis_pemeriksaan ?? ''}}" disabled>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan :</label>
                     <div class="col-sm-8 ml-3">
                        @foreach ($rekamMedik->keluhan as $item)
                        <span class="btn btn-light mb-2">
                           {{$item->keluhan}}
                        </span>
                        @endforeach
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Keluhan Lainnya :</label>
                     <div class="col-sm-8">
                        <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="" disabled>{{$rekamMedik->keluhan_lain}}</textarea>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan :</label>
                     <div class="col-sm-8 ml-3">
                        @foreach ($rekamMedik->tindakan as $item)
                        <span class="btn btn-light mb-2">
                           {{$item->tindakan}}
                        </span>
                        @endforeach
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tindakan Lainnya :</label>
                     <div class="col-sm-8">
                        <textarea type="nama" class="form-control ml-3 text-dark" id="pwd1" placeholder="" value="" disabled>{{$rekamMedik->tindakan_lain}}</textarea>
                     </div>
                  </div>
            </div>
        </div>

        @section('othscript')
    
        @endsection
    @endsection
