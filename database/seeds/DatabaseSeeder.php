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
        $this->call(AdminSeeder::class);
        $this->call(KasirSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(ObatSeeder::class);
        $this->call(PemeriksaanSeeder::class);
        $this->call(DokterSeeder::class);
        $this->call(PasienSeeder::class);
        $this->call(RekamMedikSeeder::class);
        // $this->call(RekamMedikObatSeeder::class);

    }
}
