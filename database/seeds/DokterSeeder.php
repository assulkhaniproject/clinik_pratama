<?php

use Illuminate\Database\Seeder;
use App\Dokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokter::create([

            'email'    => 'ikemarlinda@gmail.com',
            'password'    => bcrypt('1234567890'),
            'no_str' => '33.1.1.100.2.13.091620',
            'nama_dokter' => 'dr.Ike Marlinda',
            'harga' => '100.000',
        ]);

        Dokter::create([
            'email'    => 'inkaroekmiasri@gmail.com',
            'password'    => bcrypt('1234567890'),
            'no_str' => '33.2.1.100.3.16.044000',
            'nama_dokter' => 'dr.Inka Roekmiasri',
            'harga' => '100.000',
        ]);
    }
}
