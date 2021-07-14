<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(ObatSeeder::class);
        $this->call(PemeriksaanSeeder::class);
        $this->call(PasienSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(RekamMedikSeeder::class);
        $this->call(TindakanSeeder::class);
        $this->call(KeluhanSeeder::class);
    }
}
