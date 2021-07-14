@extends('templates.kasir')

<head>
   <title> Transaksi Pembayaran | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Transaksi</h4>
               </div>
            </div>
            <div class="iq-card-body">

               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">No. Transaksi</th>
                        <td>{{$kodeTransaksi}}</td>
                     </tr>
                     <tr>
                        <th scope="col">Nama Pasien</th>
                        <td>{{$data->pasien->nama}}</td>
                     </tr>
                     <tr>
                        <th scope="col">Pemeriksaan</th>
                        <td>{{$data->pemeriksaan->jenis_pemeriksaan}}</td>
                     </tr>
                     <tr>
                        <th scope="col">Biaya Admin</th>
                        <td>{{$biayaAdmin = str_replace('.', '', '15.000')}}</td>
                     </tr>
                     <tr>
                        <th scope="col">Biaya Petugas Medis</th>
                        <td>{{$biayaPetugasMedis = str_replace('.', '', $data->petugas->harga)}}</td>
                     </tr>
                     <tr>
                        <th scope="col" class="align-text-top">Farmasi</th>
                        <td>
                           <ul>
                              @php
                                  $biayaObat = 0;
                              @endphp
                              @foreach ($data->obat as $item)
                                 <li>{{$item->nama}} ({{str_replace('.', '', $item->harga)}})</li>
                                 @php
                                    $biayaObat +=  str_replace('.', '', $item->harga)
                                 @endphp
                              @endforeach
                              <li><strong>Total Farmasi</strong> ({{$biayaObat}})</li>
                           </ul>
                        </td>
                     </tr>
                     <tr>
                        <th scope="col">Total yang harus dibayar</th>
                        <td>{{$total = $biayaAdmin + $biayaPetugasMedis + $biayaObat }}</td>
                     </tr>
                  </thead>
               </table>
               
               <form method="post" action="{{route('kasir.pembayaran.update', $data->id)}}">
                  @csrf
                  @method('PUT')

                  <input type="text" name="no_transaksi", value="{{$kodeTransaksi}}" hidden>
                  <input type="text" name="rekam_medik_id", value="{{$data->id}}" hidden>
                  <input type="text" name="total_pembayaran" value="{{$total}}" hidden>

                  <a class="btn iq-bg-danger mt-3" onclick="history.back()">Batal</a>
                  <button type="submit" class="btn iq-bg-primary mt-3">Print Nota</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

@section('othscript')
   <script>
      $(() => {
         $('#kategori').change(() => {
            if($('#kategori').val() == '2'){
               $('#civitas').show();
            }else{
               $('#civitas').hide();
            }
         })
      });
   </script>
@endsection

@endsection