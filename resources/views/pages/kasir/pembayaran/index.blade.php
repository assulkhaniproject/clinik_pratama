@extends('templates.kasir')

<head>
   <title> Antrian Pemeriksaan | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title row col-12">
                  <h4 class="card-title">Antrian Pemeriksaan Rekam Medik</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">No.</th>
                        <th scope="col">No. Rekam Medik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Waktu Periksa</th>
                        <th scope="col">Nama Dokter</th>
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
                        <td>{{date('d-m-Y H:i:s', strtotime($data->created_at))}}</td>
                        <td>{{$data->dokter->nama_dokter}}</td>
                        <td>
                           <form action="{{ route('rekamMedik.destroy', $data->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <a href="{{route('pembayaran.show', $data->id)}}" type="button" class="btn mb-3 btn-primary"><i class="ri-eye-fill"></i>Lihat</a>
                              @if ($index++ == 1)
                              <a href="{{route('pembayaran.edit', $data->id)}}" type="button" class="btn mb-3 btn-success"><i class="ri-eye-fill"></i>Proses</a>
                              @endif
                           </form>
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