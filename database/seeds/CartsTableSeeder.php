<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('carts')->delete();
    }
}