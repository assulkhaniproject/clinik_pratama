<?php

use App\Mahasiswa;
use App\Pasien;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $idServiceSuffle = Mahasiswa::all()->pluck('id')->toArray();

        for ($i=0; $i < 10; $i++) { 
            Pasien::create([
                'kategori_pasien' => $faker->randomElement(['Pasien Umum', 'Pasien Civitas PHB']),
                'nama' => $faker->name,
                'no_identitas' => $faker->numberBetween($min = 1000000000000000, $max = 9999999999999999),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date(('Y-m-d')),
                'jenis_kelamin' => $faker->randomElement(['Perempuan', 'Laki-laki']),
                'alamat' => $faker->address,
                'no_hp' => $faker->numberBetween([1000000000, '999999999999']),
                'usia' => 20,
                'golongan_darah' => 'A',
            ]);
        }
    }
}
