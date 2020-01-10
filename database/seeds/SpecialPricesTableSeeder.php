<?php

use Illuminate\Database\Seeder;

class SpecialPricesTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('special_prices')->delete();
    }
}