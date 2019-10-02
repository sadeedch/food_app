<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name' => "Food Point",
            'email' => 'food@gmail.com',
            'password' => bcrypt('1234'),
            'address' => '65 throughton road, Brisbane',
            'user_id' => '3' ,
            
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Nandos',
            'email' => 'nandos@gmail.com',
            'password' => bcrypt('1234'),
            'address' => '65 throughton road, Brisbane',
            'user_id' => '4' ,
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'McDonalds',
            'email' => 'mcdonalds@gmail.com',
            'password' => bcrypt('1234'),
            'address' => '65 throughton road, Brisbane',
            'user_id' => '5' ,
        ]);
       
        
    }
}
