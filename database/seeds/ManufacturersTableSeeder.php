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
            'role' => 'manufacturer',
            'name' => "Food Point",
            'email' => 'food@gmail.com',
            'password' => bcrypt('1234'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'role' => 'manufacturer',
            'name' => 'Nandos',
            'email' => 'nandos@gmail.com',
            'password' => bcrypt('1234'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'role' => 'manufacturer',
            'name' => 'McDonalds',
            'email' => 'mcdonalds@gmail.com',
            'password' => bcrypt('1234'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
       
        
    }
}
