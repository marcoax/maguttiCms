<?php

use Illuminate\Database\Seeder;

class NewsTagTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('news_tag')->delete();
    }
}