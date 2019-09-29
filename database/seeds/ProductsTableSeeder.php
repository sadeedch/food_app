<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //query build object calling insert function 
        DB::table('products')->insert([
            'name' => 'Pizza',
            'price' => '$15.00',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Burger',
            'price' => '$12.00',
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Kebab',
            'price' => '$10.00',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Salad',
            'price' => '$5.00',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Chips',
            'price' => '$3.50',
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'HSP',
            'price' => '$15.00',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'McChicken',
            'price' => '$9.00',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Chicken Karahi',
            'price' => '$20.00',
            'manufacturer_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Biryani',
            'price' => '$15.00',
            'manufacturer_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Kheer',
            'price' => '$7.00',
            'manufacturer_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
