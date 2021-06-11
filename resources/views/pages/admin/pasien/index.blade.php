@extends('templates.admin')

<head>
   <title> Data Pasien | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title row col-12">
                  <h4 class="card-title">Data Pasien</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <span class="table-add float-right mb-3 mr-lg-2">
                  <a href="{{route('pasien.create')}}" role="button" class="btn btn-primary mr-5"><i class="ion-plus-circled"></i>Tambah Data<a class=""><span></span></a>
                  </a>
               </span>
               <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Katogori Pasien</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No. Hp</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  @foreach($datas as $data)
                  <tbody>
                     <tr>
                     <td class="checkbox-column text-center"> {{$loop->iteration}}.</td>
                     <td>{{$data->nama}}</td>
                        <td>{{$data->kategori_pasien}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->no_hp}}</td>
                        <td>
                        <a href="{{route('pasien.show', $data->id)}}" type="button" class="btn mb-3 btn-primary"><i class="ri-eye-fill"></i>Lihat</a>
                        <a href="{{route('pasien.destroy', $data->id)}}" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini ?')"
                            type="button" class="btn mb-3 btn-danger"><i class="ion-trash-b"></i>Hapus</a>
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