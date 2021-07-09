<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IdGenerator;
use Illuminate\Http\Request;
use App\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Obat::all();
        return view('pages.admin.obat.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kodeObat = IdGenerator::generate(['table' => 'obat', 'field' => 'kode', 'length' => 8, 'prefix' =>'OBT-']);
        
        return view('pages.admin.obat.create', compact('kodeObat'));
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
            'kode' => 'required|max:8|min:8',
            'nama' => 'required|max:50',
            'jenis' => 'required|max:50',
            'kadaluarsa' => 'required',
            'harga' => 'required|max:10',
            'stok' => 'required|max:5',
        ];
        $message = [
            'required' => 'Isi Bidang Ini.',
            'kode.max' => 'Kode Maximal 8 Huruf.',
            'nama.max' => 'Nama Maximal 50 Huruf.',
            'jenis.max' => 'Jenis Obat Maximal 50 Huruf.',
            'kadaluarsa.max' => 'Kadaluarsa Obat Maximal 10 Huruf.',
            'harga.max' => 'Kadaluarsa Obat Maximal 10 Huruf.',
            'stok.max' => 'Stok Obat Maximal 5 Huruf.'
        ];
        $this->validate($request, $rule, $message);

        Obat::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'kadaluarsa' => $request->kadaluarsa,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect()->route('obat.index')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Obat::find($id);
        return view('pages.admin.obat.edit', compact('data'));
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
            'kode' => 'required|max:8|min:8',
            'nama' => 'required|max:50',
            'jenis' => 'required|max:50',
            'kadaluarsa' => 'required',
            'harga' => 'required|max:10',
            'stok' => 'required|max:5',
        ];
        $message = [
            'required' => 'Isi Bidang Ini.',
            'kode.max' => 'Kode Maximal 8 Huruf.',
            'nama.max' => 'Nama Maximal 50 Huruf.',
            'jenis.max' => 'Jenis Obat Maximal 50 Huruf.',
            'kadaluarsa.max' => 'Kadaluarsa Obat Maximal 10 Huruf.',
            'harga.max' => 'Kadaluarsa Obat Maximal 10 Huruf.',
            'stok.max' => 'Stok Obat Maximal 5 Huruf.'
        ];
        $this->validate($request, $rule, $message);

        $data = Obat::find($id);
        $data->kode = $request->kode;
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->kadaluarsa = $request->kadaluarsa;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->update();
        return redirect()->route('obat.index')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Obat::find($id);
        $data->delete();
        return redirect()->route('obat.index')->with('success', 'Data Berhasil Dihapus');
    }
}
