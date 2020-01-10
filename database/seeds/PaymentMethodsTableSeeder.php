<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Paypal',
                'code' => 'paypal',
                'is_active' => 1,
                'created_at' => '2018-06-15 08:26:08',
                'updated_at' => '2018-06-15 08:26:08',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Bonifico',
                'code' => 'bank',
                'is_active' => 1,
                'created_at' => '2018-06-15 08:26:26',
                'updated_at' => '2018-06-15 08:26:26',
            ),
        ));
    }
}