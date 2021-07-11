<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kasir;
use App\Petugas;
use Illuminate\Support\Facades\Hash;

class AuthKasirController extends Controller
{
    public function showLogin()
    {
        return view('auth.login_kasir');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $data = Petugas::where('email', $request->email)->firstOrFail();
        if (Hash::check($request->password, $data->password)) {
            session(['berhasil_login' => true]);
            return redirect('kasir/dashboard');
        }
        return redirect('/kasir/login')->with('message','Email Atau Password Salah !!');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
