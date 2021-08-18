<?php

use App\Tindakan;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');

        // for ($i=0; $i < 20; $i++) { 
        //     Tindakan::create([
        //         'tindakan' => $faker->text('50')
        //     ]);
        // }

        Tindakan::create([

            'tindakan' => 'Pemeriksaan Fisik Payudara',

        ]);
        Tindakan::create([

            'tindakan' => 'Penanganan Luka Lecet',

        ]);
        Tindakan::create([

            'tindakan' => 'Dressing Luka',

        ]);
        Tindakan::create([

            'tindakan' => 'Pengolesan Betadin',

        ]);
        Tindakan::create([

            'tindakan' => 'Penutupan Luka',

        ]);
        Tindakan::create([

            'tindakan' => 'Transfusi Darah',

        ]);
        Tindakan::create([

            'tindakan' => 'Pemasangan Infus',

        ]);
        Tindakan::create([

            'tindakan' => 'Cek Tensi',

        ]);
        Tindakan::create([

            'tindakan' => 'Cek Gula Darah',

        ]);
        Tindakan::create([

            'tindakan' => 'Cek HB',

        ]);
        Tindakan::create([

            'tindakan' => 'Cek Asam Urat',

        ]);
        Tindakan::create([

            'tindakan' => 'Cek Kolestrol',

        ]);
        Tindakan::create([

            'tindakan' => 'Pemasangan Implan KB',

        ]);
        Tindakan::create([

            'tindakan' => 'Suntik KB',

        ]);
        Tindakan::create([

            'tindakan' => 'Ultrasonografi (USG)',

        ]);
    }
}
