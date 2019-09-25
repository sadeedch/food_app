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
            'name' => "Bob",
            'email' => 'Bob@gmail.com',
            'password' => bcrypt('123456'),
            'address' => '123 street, sunnybank',
           // 'role' => 'consumer'
            ]);
        DB::table('users')->insert([
            'name' => "Fred",
            'email' => 'Fred@gmail.com',
            'password' => bcrypt('123456'),
            'address' => '8 woodsina street, brisbane',
            //'role' => 'consumer'
            ]);
        DB::table('users')->insert([
            'name' => "sadeed",
            'email' => 'sadeed@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => '65 throughton road, Brisbane',
            //'role' => 'restaurant'
            ]);
    }
}
