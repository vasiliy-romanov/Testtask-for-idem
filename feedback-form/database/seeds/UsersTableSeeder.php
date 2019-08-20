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
        DB::table('users')->insert([
            'name' => 'Vasiliy',
            'email' => 'mythvolt@gmail.com',
            'password' => bcrypt('Crypta'),
            'role' => 'Manager',
        ]);
        DB::table('users')->insert([
            'name' => 'Peter',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('Pen'),
        ]);
    }
}
