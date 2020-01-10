<?php

use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('discounts')->delete();
        
        \DB::table('discounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'TESTSCONTO',
                'amount' => '10',
                'description' => 'Test sconto 10%',
                'date_start' => NULL,
                'date_end' => NULL,
                'uses' => 10,
                'pub' => 1,
                'created_at' => 2018,
                'updated_at' => '2019-03-15 09:29:44',
            ),
        ));
    }
}