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
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20; $i++) { 
            Tindakan::create([
                'tindakan' => $faker->text('50')
            ]);
        }
    }
}
