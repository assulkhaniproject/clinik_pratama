<?php

use App\Pengaturan;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::create([
            'key' => 'KEPALA_KLINIK',
            'value' => 'Meyliya Qudriani'
        ]);
    }
}
