@extends('templates.admin')

<head>
   <title> Data Rekam Medik | KLINIK PRATAMA HB</title>
</head>
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title row col-12">
                  <h4 class="card-title">History Data Rekam Medik</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <p>Diurutkan berdasarkan antrian paling baru melakukan pembayaran </p>
               <table id="myTable" class="table">
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
                            <a href="{{route('admin.rekamMedik.show', $data->id)}}" type="button" class="btn mb-3 btn-primary"><i class="ri-eye-fill"></i>Lihat</a>
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