<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Petugas;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{
    public function showLogin()
    {
        return view('auth.login_admin');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $data = Petugas::where('email', $request->email)->firstOrFail();
        if (Hash::check($request->password, $data->password)) {
            session(['berhasil_login' => true]);
            return redirect('admin/dashboard');
        }
        return redirect('/admin/login')->with('message','Email Atau Password Salah !!');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
