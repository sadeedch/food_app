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
            'name' => "pakistan",
            'email' => 'pakistan@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'role' => 'manufacturer',
            'name' => 'Nandos',
            'email' => 'nandos@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'role' => 'manufacturer',
            'name' => 'McDonalds',
            'email' => 'mcdonalds@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'role' => 'manufacturer',
            'name' => 'Pakistani Food',
            'email' => 'pakistanis@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => '65 throughton road, Brisbane',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
    }
}
