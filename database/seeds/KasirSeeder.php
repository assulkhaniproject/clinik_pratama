<?php

use Illuminate\Database\Seeder;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kasir::create([
            'name'    => 'kasir',
            'email'    => 'kasir@gmail.com',
            'password'    => bcrypt('1234567890')
        ]);
    }
}