@extends('templates.admin')

<head>
   <title> Data Obat | KLINIK PRATAMA HB</title>
</head>
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title row col-12">
                  <h4 class="card-title">Data Obat</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <span class="table-add float-right mb-3 mr-lg-2">
                  <a href="{{route('admin.obat.create')}}" role="button" class="btn btn-primary mr-5"><i class="ion-plus-circled"></i>Tambah Data<a class=""><span></span></a>
                  </a>
               </span>
               <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
               <table id="myTable" class="table">
                  <thead>
                     <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kadaluarsa</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  @foreach($datas as $data)
                  <tbody>
                     <tr>
                        <td class="checkbox-column text-center">{{$loop->iteration}}.</td>
                        <td>{{$data->kode}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->kadaluarsa}}</td>
                        <td>Rp.{{$data->harga}}</td>
                        <td>{{$data->stok}}</td>
                        <td>
                           <a href="{{route('admin.obat.edit', $data->id)}}" type="button" class="btn mb-3 btn-warning"><i class="ion-pricetag"></i>Edit</a>
                           <a href="{{route('admin.obat.destroy', $data->id)}}" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini ?')" type="button" class="btn mb-3 btn-danger"><i class="ion-trash-b"></i>Hapus</a>
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