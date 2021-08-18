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
        // $faker = Faker::create('id_ID');

        // for ($i=0; $i < 20; $i++) { 
        //     Keluhan::create([
        //         'keluhan' => $faker->text('50')
        //     ]);
        // }
        Keluhan::create([

            'keluhan' => 'Pusing',

        ]);
        Keluhan::create([

            'keluhan' => 'Gatal-Gatal',

        ]);
        Keluhan::create([

            'keluhan' => 'Demam',

        ]);
        Keluhan::create([

            'keluhan' => 'Batuk',

        ]);
        Keluhan::create([

            'keluhan' => 'Nyeri Sendi',

        ]);
        Keluhan::create([

            'keluhan' => 'Sakit Perut',

        ]);
        Keluhan::create([

            'keluhan' => 'Migren',

        ]);
        Keluhan::create([

            'keluhan' => 'Mual-mual',

        ]);
        Keluhan::create([

            'keluhan' => 'Keram Sendi',

        ]);
        Keluhan::create([

            'keluhan' => 'Keram Perut',

        ]);
        Keluhan::create([

            'keluhan' => 'Sesak Nafas',

        ]);
        Keluhan::create([

            'keluhan' => 'Panas Dalam',

        ]);
        Keluhan::create([

            'keluhan' => 'Keringat Dingin',

        ]);
        Keluhan::create([

            'keluhan' => 'Sakit Gigi',

        ]);
        Keluhan::create([

            'keluhan' => 'Gusi Bengkak',

        ]);
        Keluhan::create([

            'keluhan' => 'Pendarahan',

        ]);
        Keluhan::create([

            'keluhan' => 'Diare',

        ]);
    }
}
