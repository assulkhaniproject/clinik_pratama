@extends('templates.medis')

<head>
   <title> Data Rekam Medik | KLINIK PRATAMA HB</title>
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
</head>
@section('content')
<!-- <div class="mt-5 iq-maintenance">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-12 text-center">
                <div class="iq-maintenance">
                    <img src="images/error/02.png" class="img-fluid" alt="">
                    <h3 class="mt-4 mb-1">We are Currently Performing Maintenance</h3>
                    <p>Please check back in sometime.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title row col-12">
                  <h4 class="card-title">Data Rekam Medik (Pemeriksaan Pasien)</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <p>Diurutkan berdasarkan antrian paling lama mendaftar pemeriksaan </p>
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">No.</th>
                        <th scope="col">No. Rekam Medik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">Petugas Medis</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  @php
                      $index = 1;
                  @endphp
                  @foreach($data as $data)
                  <tbody>
                     <tr>
                        <td class="checkbox-column text-center"> {{$loop->iteration}}.</td>
                        <td>{{$data->no_rekam_medik}}</td>
                        <td>{{$data->pasien->nama}}</td>
                        <td>{{$data->tanggal_periksa}}</td>
                        <td>{{$data->petugas->nama}} ({{$data->petugas->kategori}})</td>
                        <td>{{$data->getStatus()}}</td>
                        <td>
                           @if ($index++ == 1)
                              <a href="{{route('medis.rekamMedik.edit', $data->id)}}" type="button" class="btn mb-3 btn-success"><i class="ri-eye-fill"></i>Proses Pemeriksaan</a>
                           @endif
                        </td>
                     </tr>
                  </tbody>
                  @endforeach

               </table>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection