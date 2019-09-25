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
            'name' => 'Restaurant 1',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Restaurant 2',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Restaurant 3',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
