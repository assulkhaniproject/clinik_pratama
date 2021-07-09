<?php

use App\Dokter;
use App\IdGenerator;
use App\Pasien;
use App\Pemeriksaan;
use App\RekamMedik;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RekamMedikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $idPemeriksaanSuffle = Pemeriksaan::all()->pluck('id')->toArray();
        $idDokterSuffle = Dokter::all()->pluck('id')->toArray();
        $idPasienSuffle = Pasien::all()->pluck('id')->toArray();

        for ($i=0; $i < 10; $i++) { 
            RekamMedik::create([
                'no_rekam_medik' => IdGenerator::generate(['table' => 'rekam_medik', 'field' => 'no_rekam_medik', 'length' => 12, 'prefix' =>'RKMDK-']),
                'no_identitas' => $faker->randomElement($idPasienSuffle),
                'tanggal_periksa' => $faker->date('Y-m-d'),
                'dokter_id' => $faker->randomElement($idDokterSuffle),
                'pemeriksaan_id' => $faker->randomElement($idPemeriksaanSuffle),
            ]);
        }
    }
}
