<?php

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('order_items')->delete();
    }
}