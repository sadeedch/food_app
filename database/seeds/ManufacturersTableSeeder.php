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
            'name' => 'KFC',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Nandos',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'McDonalds',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
