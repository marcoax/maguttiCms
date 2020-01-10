<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('payments')->delete();
    }
}