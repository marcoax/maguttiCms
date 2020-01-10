<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('orders')->delete();
    }
}