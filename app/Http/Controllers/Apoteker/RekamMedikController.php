<?php

namespace App\Http\Controllers\Apoteker;

use App\Http\Controllers\Controller;
use App\Obat;
use App\Pasien;
use App\RekamMedik;
use Illuminate\Http\Request;

class RekamMedikController extends Controller
{
    public function index()
    {
        $data = RekamMedik::oldest()->where('status', 2)->get();

        return view('pages.apoteker.rekamMedik.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(RekamMedik $rekamMedik)
    {
        //
    }

    public function edit(RekamMedik $rekamMedik)
    {
        $pasien = Pasien::find($rekamMedik->no_identitas);
        
        return view('pages.apoteker.rekamMedik.edit', compact('rekamMedik', 'pasien'));
    }

    public function update(Request $request, RekamMedik $rekamMedik)
    {
        $rekamMedik->status = 3;
        
        $rekamMedik->update();

        // STOK UPDATE DIKURANGI
        foreach($rekamMedik->obat as $item){
            $item->update([
                'stok' =>  $item->stok -1
            ]);
        }

        return redirect()->route('apoteker.rekamMedik.index')->with('success', 'Data Berhasil Diproses');
    }

    public function destroy(RekamMedik $rekamMedik)
    {
        //
    }
}
