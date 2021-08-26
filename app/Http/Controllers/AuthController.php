<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login sesuai request
     * 
     */
    public function index()
    {
        return view('auth.login');

        // switch ($kategoriUser) {
        //     case 'Admin':
        //         return view('auth.login_admin');

        //     case 'Medis':
        //         return view('auth.login_dokter');

        //     case 'Apoteker':
        //         return view('auth.login_apoteker');
                    
        //     case 'Kasir':
        //         return view('auth.login_kasir');

        //     default:
        //         return redirect()->route('home');
        // }
    }

    /**
     * melakukan store login
     * 
     */
    public function store(Request $request)
    {
        $data = Petugas::where('username', $request->username)
                    ->orWhere('nipy', $request->username)
                    ->first();

        if ($data && Hash::check($request->password, $data->password)) {
            session([
                'role' => in_array($data->kategori, ['Bidan', 'Perawat', 'Dokter']) ? 'medis' : strtolower($data->kategori),
                'petugas_id' => $data->id,
                'berhasil_login' => true
            ]);
            
            switch (session('role')) {
                case 'admin':
                    return redirect()->route('admin.dashboard');

                case 'medis':
                    return redirect()->route('medis.dashboard');

                case 'apoteker':
                    return redirect()->route('apoteker.dashboard');
                    
                case 'kasir':
                    return redirect()->route('kasir.dashboard');
            }
        }

        return redirect()->back()->with('message','NIPY Atau Password Salah !!');
    }

    

    public function destroy(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('home');
    }
}
