<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 1,
            'manufacturer_id' => 1,
            'quantity' => 10,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 2,
            'manufacturer_id' => 1,
            'quantity' => 20,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 2,
            'manufacturer_id' => 1,
            'quantity' => 30,
            'created_at' => '2011-10-02',
            
        ]);
        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 3,
            'manufacturer_id' => 1,
            'quantity' => 30,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 4,
            'manufacturer_id' => 1,
            'quantity' => 30,
            'created_at' => '2011-10-02',
            
        ]);
        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 2,
            'manufacturer_id' => 1,
            'quantity' => 30,
            'created_at' => '2011-10-02',  
        ]);
        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 2,
            'manufacturer_id' => 1,
            'quantity' => 30,
            'created_at' => '2011-10-02',  
        ]);
    }
}
