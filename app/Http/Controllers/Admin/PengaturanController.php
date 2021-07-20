<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $kepalaKlinik = Pengaturan::find('KEPALA_KLINIK')->first()->value;
        return view('pages.admin.pengaturan.index', compact('kepalaKlinik'));
    }

    public function store(Request $request)
    {
        Pengaturan::find('KEPALA_KLINIK')->update([
            'value' => $request->kepala_klinik
        ]);

        alert()->success('Berhasil disimpan');
        return redirect()->back();
    }
}
