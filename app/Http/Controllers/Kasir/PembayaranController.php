<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\IdGenerator;
use App\Pasien;
use App\RekamMedik;
use App\Transaksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = RekamMedik::where('status', 3)->doesntHave('transaksi')->oldest()->get();
        return view('pages.kasir.pembayaran.index', compact('data'));
    }

    public function create()
    {
        return view('pages.kasir.report.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dari_tanggal' => 'required|date',
            'ke_tanggal' => 'required|date|after_or_equal:dari_tanggal'
        ]);

        $filterRekam = Transaksi::whereBetween('created_at', [$request->dari_tanggal, $request->ke_tanggal])->get();

        $pdf = PDF::loadview('pages.kasir.report.pdf.transaksi', [
            'filterRekam' => $filterRekam, 
            'request' => $request
        ])->setPaper('f4', 'potrait');

        return $pdf->stream('dokumen-transaksi.pdf');
    }

    public function show(RekamMedik $rekamMedik)
    {
        $pasien = Pasien::find($rekamMedik->no_identitas);

        return view('pages.kasir.pembayaran.detail', compact('rekamMedik', 'pasien'));
    }

    public function edit(RekamMedik $rekamMedik)
    {
        $kodeTransaksi = IdGenerator::generate(['table' => 'transaksi', 'field' => 'no_transaksi', 'length' => 12, 'prefix' =>'TRANS-']);
        $data = RekamMedik::find($rekamMedik->id);
        
        return view('pages.kasir.pembayaran.create', compact('data', 'kodeTransaksi'));
    }

    public function update(Request $request, RekamMedik $rekamMedik)
    {
        if($rekamMedik->transaksi == null){
            $this->validate($request, [
                'no_transaksi' => 'required',
                'rekam_medik_id' => 'required',
                'total_pembayaran' => 'required',
            ]);

            Transaksi::create($request->all());

            $rekamMedik->status = 4;
            $rekamMedik->update();
        }

        $pdf = PDF::loadview('pages.kasir.pembayaran.pdf.nota', [
            'rekamMedik' => $rekamMedik,
            'transaksi' => $rekamMedik->transaksi,
            'tgl_periksa' => $this->dayDateID($rekamMedik->created_at)
        ])->setPaper('f4', 'potrait');

        return $pdf->stream('nota.pdf');
    }

    public function destroy(RekamMedik $rekamMedik)
    {
        //
    }
}
