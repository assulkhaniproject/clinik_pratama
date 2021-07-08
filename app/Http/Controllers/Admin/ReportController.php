<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RekamMedik;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.report.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dari_tanggal' => 'required|date',
            'ke_tanggal' => 'required|date|after_or_equal:dari_tanggal'
        ]);

        $filterRekam = RekamMedik::whereBetween('tanggal_periksa', [$request->dari_tanggal, $request->ke_tanggal])->get();

        $pdf = PDF::loadview('pages.admin.report.pdf.rekam-medik', [
            'filterRekam' => $filterRekam, 
            'request' => $request
        ])->setPaper('f4', 'potrait');

        return $pdf->stream('dokumen-rekap-medik.pdf');
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
