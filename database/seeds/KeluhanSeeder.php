<?php

use App\Keluhan;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KeluhanSeeder extends Seeder
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
            Keluhan::create([
                'keluhan' => $faker->text('50')
            ]);
        }
    }
}
