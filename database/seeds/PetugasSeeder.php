<?php

use App\Petugas;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create( [
            'no_str'=>'10010070',
            'nama'=>'Meyliya Qudriani',
            'tempat_lahir'=>'Pati',
            'tanggal_lahir'=>'1987-05-11',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Admin',
            'alamat'=>'Jl. Slerok Tegal Timur',
            'no_hp'=>'085786222334',
            'harga' => '200000',
        ]);

        Petugas::create( [
            'no_str'=>'03020443',
            'nama'=>'Vivin Avianti Oktavia',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1997-10-24',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Medis',
            'alamat'=>'Jl. Gede giri No.27 rt 29 rw 7 pegirikan, talang',
            'no_hp'=>'0895422824354',
            'harga' => null,
        ]);

        Petugas::create( [
            'no_str'=>'11009064',
            'nama'=>'Novia Ludha Arisanti',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1985-08-05',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Apoteker',
            'alamat'=>'Griya Bahari Sentosa Blok D2 No. 4 Rt. 04/Rw.07 Kelurahan Dampyak Kecamatan Kramat',
            'no_hp'=>'0895422824354',
            'harga' => null,
        ]);

        Petugas::create( [
            'no_str'=>'11018383',
            'nama'=>'Farida Oktavia',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1977-10-04',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Kasir',
            'alamat'=>'Perum Puri Lestari no 6 Kel Kalinyamat Wetan Tegal Selatan',
            'no_hp'=>'085742922211',
            'harga' => '100000',
        ]);
        Petugas::create( [
            'no_str'=>'11018389',
            'nama'=>'Farida Oktavia',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1977-10-04',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Bidan',
            'alamat'=>'Perum Puri Lestari no 6 Kel Kalinyamat Wetan Tegal Selatan',
            'no_hp'=>'085742922211',
            'harga' => '100000',
        ]);
    }
}
