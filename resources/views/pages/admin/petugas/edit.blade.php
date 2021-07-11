@extends('templates.admin1')

<head>
    <title>Edit Data Petugas | KLINIK PRATAMA HB</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
@section('content')

    <div class="col-sm-12 col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Edit Data Petugas Klinik</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p> -->
                <form class="form-horizontal ml-5" action="{{ route('petugas.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    {{ method_field('patch') }}
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="">No. STR :</label>
                        <div class="col-sm-8">
                            <input name="no_str" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('no_str') ? 'is-invalid' : '' }}"
                                id="no_str" placeholder="" value="{{ $data->no_str }}">
                            @if ($errors->has('no_str'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('no_str') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Nama :</label>
                        <div class="col-sm-8">
                            <input name="nama" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('nama') ? 'is-invalid' : '' }}"
                                id="pwd1" placeholder="" value="{{ $data->nama }}">
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('nama') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Tempat/Tanggal Lahir
                            :</label>
                        <div class="col-sm-4">
                            <input name="tempat_lahir" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}"
                                id="tempat_lahir" placeholder="" value="{{ $data->tempat_lahir }}">
                            @if ($errors->has('tempat_lahir'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('tempat_lahir') }}</b></p>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <input name="tanggal_lahir" type="date"
                                class="form-control ml-3 text-dark {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}"
                                id="pwd1" placeholder="" value="{{ $data->tanggal_lahir }}">
                            @if ($errors->has('tanggal_lahir'))
                                <span class="invalid-feedback" role="alert" value="{{ $data->tanggal_lahir }}">
                                    <p><b>{{ $errors->first('tanggal_lahir') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Jenis Kelamin
                            :</label>
                        <div class="col-sm-8">
                            <select name="jenis_kelamin" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}"
                                id="jenis_kelamin" placeholder="" value="">
                                <option {{ $data->jenis_kelamin === 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option {{ $data->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                @if ($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('jenis_kelamin') }}</b></p>
                                    </span>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Alamat :</label>
                        <div class="col-sm-8">
                            <textarea name="alamat" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('alamat') ? 'is-invalid' : '' }}"
                                id="alamat" placeholder="">{{ $data->alamat }}</textarea>
                            @if ($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('alamat') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">No. Hp
                            :</label>
                        <div class="col-sm-8">
                            <input name="no_hp" type="number"
                                class="form-control ml-3 text-dark {{ $errors->has('no_hp') ? 'is-invalid' : '' }}"
                                id="no_hp" placeholder="" value="{{ $data->no_hp }}">
                            @if ($errors->has('no_hp'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('no_hp') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Email
                            :</label>
                        <div class="col-sm-8">
                            <input name="email" type="email"
                                class="form-control ml-3 text-dark {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                id="email" placeholder="" value="{{ $data->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('email') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Password
                            :</label>
                        <div class="col-sm-8">
                            <input name="password" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                id="password" placeholder="">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('password') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Kategori
                            :</label>
                        <div class="col-sm-8">
                            <select name="kategori" type="text"
                                class="form-control ml-3 text-dark {{ $errors->has('kategori') ? 'is-invalid' : '' }}"
                                id="kategori" placeholder="" value="{{ $data->kategori }}">
                                <option {{ $data->kategori === 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option {{ $data->kategori === 'Kasir' ? 'selected' : '' }}>Kasir</option>
                                <option {{ $data->kategori === 'Apoteker' ? 'selected' : '' }}>Apoteker</option>
                                <option {{ $data->kategori === 'Dokter' ? 'selected' : '' }}>Dokter</option>
                                @if ($errors->has('kategori'))
                                    <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('kategori') }}</b></p>
                                    </span>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center mb-0 ml-4" for="pwd1">Foto
                            :</label>
                        <div class="col-sm-8">
                            <input type="hidden" value="{{ $data->foto }}" name="old_foto">
                            <input class="form-control ml-3 mb-4 {{ $errors->has('foto') ? 'is-invalid' : '' }}"
                                type="file" name="foto" value="{{ old('foto') }}" onchange="loadfile(event)" id="foto">
                            <img id="output" class="img-fluid ml-3" height="100" width="100"
                                src="{{ asset('admin/images/user/' . $data->foto) }}">
                            @if ($errors->has('foto'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('foto') }}</b></p>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <a class="btn btn-primary text-white" onclick="history.back()">Kembali</a>
                        <button type="submit" class="btn btn-warning text-white">Simpan</button>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script>
        var loadfile = function(event) {
            var foto = document.getElementById('foto');
            var output = document.getElementById('output');
            if (foto) {
                output.src = URL.createObjectURL(event.target.files[0]);
            }
        };
    </script>
@endsection
