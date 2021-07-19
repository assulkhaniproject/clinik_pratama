<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pasien;
use App\RekamMedik;
use App\Transaksi;
use Barryvdh\DomPDF\Facade as PDF;

class ReportKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = RekamMedik::where('status', 3)->doesntHave('transaksi')->oldest()->get();
        return view('pages.admin.reportkeuangan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.reportkeuangan.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'dari_tanggal' => 'required|date',
            'ke_tanggal' => 'required|date|after_or_equal:dari_tanggal'
        ]);

        $filterRekam = Transaksi::whereBetween('created_at', [$request->dari_tanggal, $request->ke_tanggal])->get();

        $pdf = PDF::loadview('pages.admin.reportkeuangan.pdf.transaksi', [
            'filterRekam' => $filterRekam, 
            'request' => $request
        ])->setPaper('f4', 'potrait');

        return $pdf->stream('dokumen-transaksi.pdf');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
