<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Pasien;
use App\Pegawai;

class PasienController extends Controller
{
    public function index()
    {
        $datas = Pasien::orderBy('id','DESC')->get();
        return view ('pages.admin.pasien.index', compact('datas'));
    }

    public function create()
    {
        return view('pages.admin.pasien.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
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
        ]);

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

        return redirect()->route('admin.pasien.index')->with('success', 'Data Berhasil Tersimpan');
    }

    public function show($id)
    {
        $data = Pasien::find($id);
        return view('pages.admin.pasien.detail', compact('data'));
    }

    public function edit($id)
    {
        $data = Pasien::find($id);
        return view('pages.admin.pasien.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
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
        return redirect()->route('admin.pasien.index')->with('success', 'Data Berhasil Diedit');

    }

    public function destroy($id)
    {
        $data = Pasien::find($id);
        $data->delete();
        return redirect()->route('admin.pasien.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function loadNipNipy(Request $request, $type)
    {
        if($type == 'mahasiswa'){
            $type = Mahasiswa::where('nim', 'like', '%' . ($request->get('q') ?? '') . '%');
        } else {
            $type = Pegawai::where('nipy', 'like', '%' . ($request->get('q') ?? '') . '%');
        }
        
        return response()->json($type->limit(10)->get());
    }

    public function loadDataNipNipy($uniq, $type)
    {
        if($type == 'mahasiswa'){
            $data = Mahasiswa::where('nim', $uniq);
        } else {
            $data = Pegawai::where('nipy', $uniq);
        }

        return response()->json($data->first());
    }
}
