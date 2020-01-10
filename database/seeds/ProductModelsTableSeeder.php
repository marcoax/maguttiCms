<?php

use Illuminate\Database\Seeder;

class ProductModelsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('product_models')->delete();
    }
}