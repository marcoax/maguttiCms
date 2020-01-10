<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'request_product_id' => '',
                'subject' => 'testsoggetto',
                'message' => 'testmessaggio',
                'name' => 'testnome',
                'surname' => 'testcognome',
                'company' => 'testazienda',
                'email' => 'testmail@testdomain.test',
                'status' => 0,
                'created_by' => 0,
                'created_at' => '2019-03-08 14:31:27',
                'updated_at' => '2019-03-08 14:31:27',
            ),
            1 => 
            array (
                'id' => 2,
                'request_product_id' => '2',
                'subject' => 'testsoggetto',
                'message' => 'testmessaggio',
                'name' => 'testnome',
                'surname' => 'testcognome',
                'company' => 'testazienda',
                'email' => 'testmail@testdomain.test',
                'status' => 0,
                'created_by' => 0,
                'created_at' => '2019-03-08 14:32:01',
                'updated_at' => '2019-03-08 14:32:01',
            ),
            2 => 
            array (
                'id' => 3,
                'request_product_id' => '',
                'subject' => '1',
                'message' => '111',
                'name' => 'Angelo marco Asperti',
                'surname' => 'Asperti',
                'company' => '1',
                'email' => 'marcoasperti@gmail.com',
                'status' => 0,
                'created_by' => 0,
                'created_at' => '2019-05-11 12:21:06',
                'updated_at' => '2019-05-11 12:21:06',
            ),
        ));
    }
}