<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pasien;
use Illuminate\Http\Request;
use JavaScript;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use NunoMaduro\Collision\Adapters\Phpunit\Style;
use App\IdGenerator;
use App\Obat;
use App\RekamMedik;
use RealRashid\SweetAlert\Facades\Alert;

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
        $jenisPemeriksaan = RekamMedik::JENIS_PEMERIKSAAN;

        return view('pages.admin.rekamMedik.create', compact('noRekamMedik', 'jenisPemeriksaan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'no_rekam_medik' => 'required',
            'no_identitas' => 'required',
            'tanggal_periksa' => 'required',
            'nama_doc' => 'required',
            'jenis_periksa' => 'required',
            // 'keluhan' => 'required',
            // 'tindakan' => 'required',
        ]);

        RekamMedik::create([
            'no_rekam_medik' => $request->no_rekam_medik,
            'no_identitas' => $request->no_identitas,
            'tanggal_periksa' => $request->tanggal_periksa,
            'nama_doc' => $request->nama_doc,
            'jenis_periksa' => $request->jenis_periksa,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
        ]);
        return redirect()->route('rekamMedik.index')->with('success', 'Data Berhasil Tersimpan');

    }

    public function show($id)
    {
        $data = RekamMedik::find($id);
        $pasien = Pasien::find($data->no_identitas);
        return view('pages.admin.rekamMedik.detail', compact('data', 'pasien'));
    }

    public function edit($id)
    {
        $data = RekamMedik::find($id);
        $pasien = Pasien::find($data->no_identitas);
        $jenisPemeriksaan = RekamMedik::JENIS_PEMERIKSAAN;

        return view('pages.admin.rekamMedik.edit', compact('data', 'pasien', 'jenisPemeriksaan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            // 'no_rekam_medik' => 'required',
            // 'no_identitas' => 'required',
            'tanggal_periksa' => 'required',
            'nama_doc' => 'required',
            'jenis_periksa' => 'required',
            'keluhan' => 'required|min:8',
            'tindakan' => 'required|min:8',
            'resep' => 'required|array|min:1',
        ]);
        
        $data = RekamMedik::find($id);

        if($data->keluhan != null){
            alert()->error('Data gagal diupdate', 'Rekam medik sudah menjadi histori medik');
            return redirect()->route('rekamMedik.index');
        }

        $data->tanggal_periksa = $request->tanggal_periksa;
        $data->nama_doc = $request->nama_doc;
        $data->jenis_periksa = $request->jenis_periksa;
        $data->keluhan = $request->keluhan;
        $data->tindakan = $request->tindakan;
        $data->update();

        // STOK UPDATE
        foreach($request->resep as $item){
            $obat = Obat::findOrFail($item);
            $obat->update([
                'stok' =>  $obat->stok -1
            ]);
        }
        
        $data->obat()->sync($request->resep);
        return redirect()->route('rekamMedik.index')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        $rekamMedik = RekamMedik::find($id);

        if($rekamMedik->keluhan != null){
            alert()->error('Data gagal dihapus', 'Rekam medik sudah menjadi histori medik');
            return redirect()->route('rekamMedik.index');
        }
        
        $rekamMedik->destroy();
        return redirect()->route('rekamMedik.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function fetshautocomplete(Request $request)
    {
        if ($request->get('query')){
            $query = $request->get('query');
            $data = Pasien::table('pasien')
            ->where('no_identitas','like', '%'.$query.'%')->get();
            $output = '<ul class="dropdown-menu" style="display:block;position:absolute;">';
            foreach($data as $row){
                $output .='<li><a href="#">'.$row->no_identitas.'</a></li>';
            }
            $output .= '<ul>';
            echo $output;
        }
    }

    public function fetshotherdata(Request $request)
    {
        if ($request->get('valueofnumberid')){
            $valueofnumberid = $request->get('valueofnumberid');
            $resultdata = Pasien::table('pasien')
            ->leftJoin('rekam_medik', 'pasien.router_id', '=', 'rekam_medik.id')
            ->select('pasien.*','rekam_medik.router_name as router_name'.'rekam_medik.id as router_id')
            ->where('no_identitas', 'like' ,'%'.$valueofnumberid.'%')->get();
            return response()->json($resultdata);
        }
    }

    public function getPasien(Request $request)
    {
        $data = Pasien::where('no_identitas', 'like', '%' . ($request->get('q') ?? '') . '%')
                        ->orWhere('nama', 'like', '%' . ($request->get('q') ?? '') . '%');

        return response()->json($data->limit(10)->get());
    }

    public function getObat(Request $request)
    {
        $data = Obat::where('kode', 'like', '%' . ($request->get('q') ?? '') . '%')
                        ->orWhere('nama', 'like', '%' . ($request->get('q') ?? '') . '%');

        return response()->json($data->limit(10)->get());
    }

}
