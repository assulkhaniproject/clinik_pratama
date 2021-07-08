<?php

use Illuminate\Database\Seeder;
use App\Pemeriksaan;
class PemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Pemeriksaan Umum',
            'harga' => '30.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Medikasi Ringan',
            'harga' => '35.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Medikasi Sedang',
            'harga' => '45.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Medikasi Bera',
            'harga' => '55.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'KB Pill',
            'harga' => '100.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'KB Suntik 1 bulan',
            'harga' => '200.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'KB Suntik 2 bulan',
            'harga' => '100.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'KB Pasang & Lepas Implant',
            'harga' => '80.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'KB Padang & Lepas IUD',
            'harga' => '100.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Pemeriksaan LAB. Gula Darah',
            'harga' => '30.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Pemeriksaan LAB. Asam Urat',
            'harga' => '30.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Pemeriksaan LAB. Kolestrol',
            'harga' => '30.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Pemeriksaan LAB. HB',
            'harga' => '30.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Rapid Antibody',
            'harga' => '150.000',
        ]);

        Pemeriksaan::create([
            
            'jenis_pemeriksaan' => 'Rapid Antigen',
            'harga' => '200.000',
        ]);
    }
}
