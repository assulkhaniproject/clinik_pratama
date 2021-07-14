<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'    => bcrypt('password')
        ]);

        User::create([
            'name'    => 'Medis',
            'email'    => 'medis@gmail.com',
            'password'    => bcrypt('password')
        ]);

        User::create([
            'name'    => 'Apoteker',
            'email'    => 'apoteker@gmail.com',
            'password'    => bcrypt('password')
        ]);

        User::create([
            'name'    => 'Kasir',
            'email'    => 'kasir@gmail.com',
            'password'    => bcrypt('password')
        ]);
    }
}
