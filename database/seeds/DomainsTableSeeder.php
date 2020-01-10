<?php

use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('domains')->delete();
        
        \DB::table('domains')->insert(array (
            0 => 
            array (
                'id' => 1,
                'domain' => 'imagetype',
                'title' => '',
                'value' => '',
                'sort' => 10,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2016-06-23 07:36:42',
                'updated_at' => '2016-06-28 07:58:39',
            ),
            1 => 
            array (
                'id' => 2,
                'domain' => 'imagetype',
                'title' => '',
                'value' => '',
                'sort' => 20,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2016-06-23 07:38:24',
                'updated_at' => '2016-06-28 07:59:19',
            ),
            2 => 
            array (
                'id' => 21,
                'domain' => 'template',
                'title' => '',
                'value' => 'template_subpage',
                'sort' => 30,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2016-06-28 13:18:04',
                'updated_at' => '2016-12-27 14:17:35',
            ),
        ));
    }
}