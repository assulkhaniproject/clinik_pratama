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
            'username'    => 'admin',
            'email'    => 'admin@gmail.com',
            'password'    => bcrypt('password')
        ]);

        User::create([
            'name'    => 'Medis',
            'username'    => 'medis',
            'nipy'    => '12345',
            'email'    => 'medis@gmail.com',
            'password'    => bcrypt('password')
        ]);

        User::create([
            'name'    => 'Apoteker',
            'nipy'    => '123456',
            'username'    => 'apoteker',
            'email'    => 'apoteker@gmail.com',
            'password'    => bcrypt('password')
        ]);

        User::create([
            'name'    => 'Kasir',
            'username'    => 'kasir',
            'email'    => 'kasir@gmail.com',
            'password'    => bcrypt('password')
        ]);
    }
}
