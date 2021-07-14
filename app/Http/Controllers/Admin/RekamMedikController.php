<?php

namespace App\Http\Controllers\Admin;

use App\Dokter;
use App\Http\Controllers\Controller;
use App\Pasien;
use Illuminate\Http\Request;
use App\IdGenerator;
use App\Obat;
use App\Pemeriksaan;
use App\Petugas;
use App\RekamMedik;
use PDF;

class RekamMedikController extends Controller
{
    public function index()
    {
        $data = RekamMedik::orderBy('id','DESC')->get();
        return view('pages.admin.rekamMedik.index', compact('data'));
    }

    public function create()
    {
        $noRekamMedik = $id = IdGenerator::generate(['table' => 'rekam_medik', 'field' => 'no_rekam_medik', 'length' => 12, 'prefix' =>'RKMDK-']);
        $jenisPemeriksaan = Pemeriksaan::all();
        $petugasMedis = Petugas::where('kategori', 'Dokter')->orWhere('kategori', 'Bidan')->orWhere('kategori', 'Perawat')->get();

        return view('pages.admin.rekamMedik.create', compact('noRekamMedik', 'jenisPemeriksaan', 'petugasMedis'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_identitas' => 'required',
            'tanggal_periksa' => 'required',
            'petugas_id' => 'required',
        ]);

        RekamMedik::create([
            'no_rekam_medik' => $request->no_rekam_medik,
            'no_identitas' => $request->no_identitas,
            'tanggal_periksa' => $request->tanggal_periksa,
            'petugas_id' => $request->petugas_id,
            'status' => 1
        ]);

        alert()->success('Data berhasil disimpan');
        return redirect()->route('admin.rekamMedik.index');

    }

    public function show($id)
    {
        $data = RekamMedik::find($id);
        $pasien = Pasien::find($data->no_identitas);
        return view('pages.admin.rekamMedik.detail', compact('data', 'pasien'));
    }

    public function edit($id)
    {
        // $data = RekamMedik::find($id);
        // $pasien = Pasien::find($data->no_identitas);
        // $jenisPemeriksaan = Pemeriksaan::all();
        // $dokter = Dokter::all();

        // return view('pages.admin.rekamMedik.edit', compact('data', 'pasien', 'jenisPemeriksaan', 'dokter'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'tanggal_periksa' => 'required',
        //     'dokter_id' => 'required',
        //     'pemeriksaan_id' => 'required',
        //     'keluhan' => 'required|min:8',
        //     'tindakan' => 'required|min:8',
        //     'resep' => 'required|array|min:1',
        // ]);
        
        // $data = RekamMedik::find($id);

        // if($data->keluhan != null){
        //     alert()->error('Data gagal diupdate', 'Rekam medik sudah menjadi histori medik');
        //     return redirect()->route('admin.rekamMedik.index');
        // }

        // $data->tanggal_periksa = $request->tanggal_periksa;
        // $data->dokter_id = $request->dokter_id;
        // $data->pemeriksaan_id = $request->pemeriksaan_id;
        // $data->keluhan = $request->keluhan;
        // $data->tindakan = $request->tindakan;
        // $data->update();

        // // STOK UPDATE
        // foreach($request->resep as $item){
        //     $obat = Obat::findOrFail($item);
        //     $obat->update([
        //         'stok' =>  $obat->stok -1
        //     ]);
        // }
        
        // $data->obat()->sync($request->resep);
        // return redirect()->route('admin.rekamMedik.index')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        $rekamMedik = RekamMedik::find($id);

        if($rekamMedik->pemeriksaan_id != null){
            alert()->error('Data gagal dihapus', 'Rekam medik sudah menjadi histori medik');
            return redirect()->route('admin.rekamMedik.index');
        }
        
        $rekamMedik->delete();
        return redirect()->route('admin.rekamMedik.index')->with('success', 'Data Berhasil Dihapus');
    }
    
    /**
     * Menampilkan History Rekam Medik
     * 
     */
    public function showHistory()
    {
        $data = RekamMedik::latest()->where('status', 4)->get();
        return view('pages.admin.history-rekam-medik.index', compact('data'));
    }

    /**
     * Fetch pasien berdasarkan pencarian
     * 
     */
    public function getPasien(Request $request)
    {
        $data = Pasien::where('no_identitas', 'like', '%' . ($request->get('q') ?? '') . '%')
                        ->orWhere('nama', 'like', '%' . ($request->get('q') ?? '') . '%');

        return response()->json($data->limit(10)->get());
    }
}
