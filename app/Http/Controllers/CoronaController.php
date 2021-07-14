<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoronaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $res = Http::get('https://api.kawalcorona.com/indonesia');
        $datas = $res->json();
        $data = $response->json();
        return view('infoCorona', compact('data','datas'));
    }
}
