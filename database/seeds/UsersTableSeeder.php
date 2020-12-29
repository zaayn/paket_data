<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            'role' => 'admin'
        ]);
        \App\User::create([
            'name'  => 'zayn',
            'email' => 'zayn@gmail.com',
            'password'  => bcrypt('12345678'),
            'role' => 'user'
        ]);
    }
}
