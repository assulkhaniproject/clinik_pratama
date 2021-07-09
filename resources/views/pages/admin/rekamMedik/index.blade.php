@extends('templates.admin')

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
                  <h4 class="card-title">Data Rekam Medik</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <span class="table-add float-right mb-3 mr-lg-2">
                  <a href="{{route('rekamMedik.create')}}" role="button" class="btn btn-primary mr-5"><i class="ion-plus-circled"></i>Tambah Data<a class=""><span></span></a>
                  </a>
               </span>
               <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">No.</th>
                        <th scope="col">No. Rekam Medik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">Nama Dokter</th>
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
                        <td>{{$data->dokter->nama_dokter}}</td>
                        <td>
                           <form action="{{ route('rekamMedik.destroy', $data->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <a href="{{route('rekamMedik.show', $data->id)}}" type="button" class="btn mb-3 btn-primary"><i class="ri-eye-fill"></i>Lihat</a>
                              @if (!$data->keluhan)
                                 <button type="submit" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini ?')" type="button" class="btn mb-3 btn-danger"><i class="ion-trash-b"></i>Hapus</button>
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