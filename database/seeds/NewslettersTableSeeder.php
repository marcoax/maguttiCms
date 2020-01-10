<?php

use Illuminate\Database\Seeder;

class NewslettersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('newsletters')->delete();
    }
}