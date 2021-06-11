<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pasien::all();
        return view ('pages.admin.pasien.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
         $rule=[
            'kategori_pasien' => 'required',
            'nama' => 'required|max:100',
            'no_identitas' => 'required|max:16',
            'tempat_lahir' => 'required|max:20',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|max:9',
            'alamat' => 'required',
            'usia' => 'required|max:2',
            'golongan_darah' => 'required|max:2',
            'no_hp' => 'required|max:13'
        ];
        $message = [
            'required' => 'Isi Bidang Ini.',
            'nama.max' => 'Nama Maximal 100 Huruf.',
            'no_identitas.max' => 'No. Identitas Maximal 16 Huruf.',
            'jenis_kelamin.max' => 'Jenis Kelamin Maximal 9 Huruf.',
            'usia.max' => 'Usia Maximal 2 Huruf.',
            'golongan_darah.max' => 'Golongan Darah Maximal 2 Huruf.',
            'no_hp.max' => 'Nomor Hp Maximal 13 Huruf.',
        ];
        $this->validate($request, $rule, $message);

        Pasien::create([
            'kategori_pasien' => $request->kategori_pasien,
            'nama' => $request->nama,
            'no_identitas' => $request->no_identitas,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'usia' => $request->usia,
            'golongan_darah' => $request->golongan_darah,
        ]);
        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pasien::find($id);
        return view('pages.admin.pasien.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pasien::find($id);
        return view('pages.admin.pasien.edit', compact('data'));
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
        $this->validate($request,[
            'kategori_pasien' => 'required',
            'nama' => 'required|max:100',
            'no_identitas' => 'required|max:16|min:8',
            'tempat_lahir' => 'required|max:20',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|max:9',
            'alamat' => 'required',
            'no_hp' => 'required|max:13|min:11',
            'usia' => 'required|min:2|max:2',
            'golongan_darah' => 'required|max:2',
        ]);

        $data = Pasien::find($id);
        $data->kategori_pasien = $request->kategori_pasien;
        $data->nama = $request->nama;
        $data->no_identitas = $request->no_identitas;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat = $request->alamat;
        $data->usia = $request->usia;
        $data->golongan_darah = $request->golongan_darah;
        $data->no_hp = $request->no_hp;
        
        $data->update();
        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pasien::find($id);
        $data->delete();
        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Dihapus');
    }
}
