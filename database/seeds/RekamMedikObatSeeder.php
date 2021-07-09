<?php

use App\Mahasiswa;
use App\Obat;
use App\RekamMedik;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RekamMedikObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = Obat::all();

        RekamMedik::all()->each(function ($rm) use ($obat) { 
            $rm->obat()->attach(
                $obat->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
