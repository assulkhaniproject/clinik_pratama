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
            'email'=>'meyliya8@gmail.com',
            'password'=>bcrypt('1234567890'),
            'tempat_lahir'=>'Pati',
            'tanggal_lahir'=>'1987-05-11',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Admin',
            'alamat'=>'Jl. Slerok Tegal Timur',
            'no_hp'=>'085786222334'
        ]);

        Petugas::create( [
            'no_str'=>'03020443',
            'nama'=>'Vivin Avianti Oktavia',
            'email'=>'meyliya@gmail.com',
            'password'=>bcrypt('1234567890'),
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1997-10-24',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Kasir',
            'alamat'=>'Jl. Gede giri No.27 rt 29 rw 7 pegirikan, talang',
            'no_hp'=>'0895422824354'
        ]);

        Petugas::create( [
            'no_str'=>'11009064',
            'nama'=>'Novia Ludha Arisanti',
            'email'=>'novia@gmail.com',
            'password'=>bcrypt('1234567890'),
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1985-08-05',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Apoteker',
            'alamat'=>'Griya Bahari Sentosa Blok D2 No. 4 Rt. 04/Rw.07 Kelurahan Dampyak Kecamatan Kramat',
            'no_hp'=>'0895422824354'
        ]);

        Petugas::create( [
            'no_str'=>'11018383',
            'nama'=>'Farida Oktavia',
            'email'=>'farida@gmail.com',
            'password'=>bcrypt('1234567890'),
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1977-10-04',
            'jenis_kelamin'=>'Perempuan',
            'kategori'=>'Dokter',
            'alamat'=>'Perum Puri Lestari no 6 Kel Kalinyamat Wetan Tegal Selatan',
            'no_hp'=>'085742922211'
        ]);
        Petugas::create( [
            'no_str'=>'12345678',
            'nama'=>'Muhammad Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234567890'),
            'tempat_lahir'=>'DiTempat',
            'tanggal_lahir'=>'1999-12-12',
            'jenis_kelamin'=>'Laki-laki',
            'kategori'=>'Admin',
            'alamat'=>'DiTempat',
            'no_hp'=>'08512345678'
        ]);
        Petugas::create( [
            'no_str'=>'12345679',
            'nama'=>'Muhammad Kasir',
            'email'=>'kasir@gmail.com',
            'password'=>bcrypt('1234567890'),
            'tempat_lahir'=>'DiTempat',
            'tanggal_lahir'=>'1999-12-12',
            'jenis_kelamin'=>'Laki-laki',
            'kategori'=>'Kasir',
            'alamat'=>'DiTempat',
            'no_hp'=>'08512345679'
        ]);
    }
}
