<?php

namespace App\Http\Controllers\Medis;

use App\Http\Controllers\Controller;
use App\Keluhan;
use App\Obat;
use App\Pasien;
use App\Pemeriksaan;
use App\RekamMedik;
use App\Tindakan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class RekamMedikController extends Controller
{
    public function index()
    {
        $data = RekamMedik::oldest()->where('status', 1)->get();

        return view('pages.medis.rekamMedik.index', compact('data'));
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

    /**
     * Menampilkan form edit untuk memasukan pemeriksaan obat dll
     * 
     */
    public function edit(RekamMedik $rekamMedik)
    {
        $pasien = Pasien::find($rekamMedik->no_identitas);
        $jenisPemeriksaan = Pemeriksaan::all();

        return view('pages.medis.rekamMedik.edit', compact('rekamMedik', 'pasien', 'jenisPemeriksaan'));
    }

    /**
     * Aksi untuk menyimpan pemeriksaan pasien
     * 
     */
    public function update(Request $request, RekamMedik $rekamMedik)
    {
        $this->validate($request,[
            'pemeriksaan_id' => 'required',
            'keluhan_lain' => 'nullable|min:8',
            'tindakan_lain' => 'nullable|min:8',
            'keluhan' => 'nullable|array|min:1',
            'tindakan' => 'nullable|array|min:1',
            'resep' => 'required|array|min:1',
            'resep_aturan_minum' => 'required|min:5',
        ]);

        $rekamMedik->pemeriksaan_id = $request->pemeriksaan_id;
        $rekamMedik->status = 2;
        $rekamMedik->resep_aturan_minum = $request->resep_aturan_minum;
        
        if($request->keluhan_lain != null){
            $rekamMedik->keluhan_lain = $request->keluhan_lain;
        }

        if($request->tindakan_lain != null){
            $rekamMedik->tindakan_lain = $request->tindakan_lain;
        }
        
        $rekamMedik->update();
        $rekamMedik->keluhan()->sync($request->keluhan);
        $rekamMedik->tindakan()->sync($request->tindakan);
        $rekamMedik->obat()->sync($request->resep);

        return redirect()->route('medis.rekamMedik.index')->with('success', 'Data Berhasil Diproses');
    }
    
    public function destroy(RekamMedik $rekamMedik)
    {
        //
    }

    /**
     * Generate pdf rekam medik
     * 
     */
    public function printRekamMedik(RekamMedik $rekamMedik)
    {
        $pdf = PDF::loadview('pages.medis.rekamMedik.pdf.rekam-medik', [
            'rekamMedik' => $rekamMedik,
            'tgl_periksa' => $this->dayDateID($rekamMedik->created_at)
        ])->setPaper('f4', 'potrait');

        return $pdf->stream('dokumen-rekam-medik.pdf');
    }

    /**
     * Fetch obat berdasarkan pencarian
     * 
     */
    public function getObat(Request $request)
    {
        $data = Obat::where('kode', 'like', '%' . ($request->get('q') ?? '') . '%')
                        ->orWhere('nama', 'like', '%' . ($request->get('q') ?? '') . '%');

        return response()->json($data->limit(10)->get());
    }

    /**
     * Fetch keluhan berdasarkan pencarian
     * 
     */
    public function getKeluhan(Request $request)
    {
        $data = Keluhan::where('keluhan', 'like', '%' . ($request->get('q') ?? '') . '%');

        return response()->json($data->limit(10)->get());
    }

    /**
     * Fetch Tindakan berdasarkan pencarian
     * 
     */
    public function getTindakan(Request $request)
    {
        $data = Tindakan::where('tindakan', 'like', '%' . ($request->get('q') ?? '') . '%');

        return response()->json($data->limit(10)->get());
    }
}
