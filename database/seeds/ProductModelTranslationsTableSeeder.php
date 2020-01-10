<?php

use Illuminate\Database\Seeder;

class ProductModelTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('product_model_translations')->delete();
    }
}