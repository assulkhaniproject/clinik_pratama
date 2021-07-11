<?php

namespace App\Http\Controllers\Apoteker;

use App\Http\Controllers\Controller;
use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApotekerController extends Controller
{
    public function showLogin()
    {
        return view('auth.login_apoteker');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $data = Petugas::where('email', $request->email)->firstOrFail();
        if (Hash::check($request->password, $data->password)) {
            session(['berhasil_login' => true]);
            return redirect('apoteker/dashboard');
        }
        return redirect('/apoteker/login')->with('message','Email Atau Password Salah !!');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/apoteker/login');
    }
}
