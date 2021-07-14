<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login sesuai request
     * 
     */
    public function index($kategoriUser)
    {
        switch ($kategoriUser) {
            case 'Admin':
                return view('auth.login_admin');

            case 'Medis':
                return view('auth.login_dokter');

            case 'Apoteker':
                return view('auth.login_apoteker');
                    
            case 'Kasir':
                return view('auth.login_kasir');

            default:
                return redirect()->route('home');
        }
    }

    /**
     * melakukan store login
     * 
     */
    public function store(Request $request)
    {
        $data = User::where('email', $request->email)->firstOrFail();

        if (Hash::check($request->password, $data->password)) {
            session([
                'user_id' => $data->id,
                'berhasil_login' => true
            ]);
            
            switch ($data->name) {
                case 'Admin':
                    return redirect()->route('admin.dashboard');

                case 'Medis':
                    return redirect()->route('medis.dashboard');

                case 'Apoteker':
                    return redirect()->route('apoteker.dashboard');
                    
                case 'Kasir':
                    return redirect()->route('kasir.dashboard');
            }
        }

        return redirect()->back()->with('message','Email Atau Password Salah !!');
    }

    public function destroy(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('home');
    }
}
