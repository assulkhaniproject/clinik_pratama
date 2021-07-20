<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Petugas;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
{
    use UploadFile;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Petugas::orderBy('id', 'DESC')->get();
        return view('pages.admin.petugas.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_str' => 'required|max:20|min:16',
            'nama' => 'required|max:50',
            'username' => 'required|min:5|unique:petugas,username',
            'password' => 'required',
            'nipy' => 'required|min:5|unique:petugas,nipy',
            'tempat_lahir' => 'required|max:20',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|max:9',
            'kategori' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max:13|min:10',
            'harga' => 'nullable|numeric',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = new Petugas();
        $data->no_str = $request->no_str;
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->nipy = $request->nipy;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->harga = $request->harga;
        $data->foto = $this->uploadFileDisk($request, 'public', 'foto', 'admin/images/user/');
        $data->save();


        return redirect()->route('admin.petugas.index')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Petugas::find($id);
        return view('pages.admin.petugas.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Petugas::find($id);
        return view('pages.admin.petugas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Petugas::find($id);

        $this->validate($request, [
            'no_str' => 'required|max:20|min:16',
            'nama' => 'required|max:50',
            'username' => 'required|min:5|unique:petugas,username,'. $id,
            'password' => 'nullable',
            'nipy' => 'required|min:5|unique:petugas,nipy,'.$id,
            'tempat_lahir' => 'required|max:20',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|max:9',
            'kategori' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max:13|min:10',
            'harga' => 'nullable|numeric',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data->no_str = $request->no_str;
        $data->nama = $request->nama;
        $data->username = $request->username;
        if($request->password != null){
            $data->password = bcrypt($request->password);
        }
        $data->nipy = $request->nipy;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->harga = $request->harga;
        $foto = $request->file('foto');

        if ($foto) {
            $data->foto = $this->uploadFileDisk($request, 'public', 'foto', 'admin/images/user/');
        } else {
            $data->foto = $request->old_foto;
        }

        $data->update();

        return redirect()->route('admin.petugas.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Petugas::find($id);
        $data->delete();
        return redirect()->route('admin.petugas.index')->with('success', 'Data Berhasil Dihapus');
    }
}
