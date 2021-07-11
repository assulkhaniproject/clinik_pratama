<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
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
        $rule = [
            'no_str' => 'required|max:20|min:16',
            'nama' => 'required|max:50',
            'email' => 'required|max:50',
            'password' => 'required',
            'tempat_lahir' => 'required|max:20',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|max:9',
            'kategori' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max:13|min:10',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ];
        $message = [
            'required' => 'Isi Bidang Ini.',
            'kode.max' => 'no str Maximal 20 Huruf.',
            'nama.max' => 'Nama Maximal 50 Huruf.',
            'email.max' => 'Email Maximal 50 Huruf.',
            'tempat.max' => 'Tempat Lahir Maximal 20 Huruf.',
            'no_hp.max' => 'Maksimal 13 angkat / Minimal 10 angka',
            'foto.image' => 'file tidak sesuai.'
        ];
        $this->validate($request, $rule, $message);

        $foto = $request->file('foto');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = public_path('/admin/images/user/');
        $foto->move($destinationPath, $filename);

        $data = new Petugas();
        $data->no_str = $request->no_str;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->foto = $request->filename;
        $data->save();


        return redirect()->route('petugas.index')->with('success', 'Data Berhasil Tersimpan');
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
        $rule = [
            'no_str' => 'required|max:20|min:16',
            'nama' => 'required|max:50',
            'email' => 'required|max:50',
            'tempat_lahir' => 'required|max:20',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|max:9',
            'kategori' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max:13|min:10',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ];
        $message = [
            'required' => 'Isi Bidang Ini.',
            'kode.max' => 'no str Maximal 20 Huruf.',
            'nama.max' => 'Nama Maximal 50 Huruf.',
            'email.max' => 'Email Maximal 50 Huruf.',
            'tempat.max' => 'Tempat Lahir Maximal 20 Huruf.',
            'no_hp.max' => 'Maksimal 13 angkat / Minimal 10 angka',
            'foto.image' => 'file tidak sesuai.'
        ];
        $this->validate($request, $rule, $message);

        $data = Petugas::find($id);
        $data->no_str = $request->no_str;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $foto = $request->file('foto');
        if ($foto) {
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/user');
            $foto->move($destinationPath, $filename);
            $data->foto = $filename;
        } else {
            $data->foto = $request->old_foto;
        }
        $data->update();

        return redirect()->route('petugas.index');
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
        return redirect()->route('petugas.index')->with('success', 'Data Berhasil Dihapus');
    }
}
