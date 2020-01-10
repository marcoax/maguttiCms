<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('addresses')->delete();
    }
}