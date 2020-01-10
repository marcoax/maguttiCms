<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('blocks')->delete();
        
        \DB::table('blocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'model_type' => 'App\\Article',
                'model_id' => 2,
                'template_id' => 21,
                'title' => '',
                'subtitle' => '',
                'description' => NULL,
                'doc' => NULL,
                'image' => NULL,
                'video' => NULL,
                'link' => NULL,
                'pub' => 1,
                'sort' => 10,
                'created_by' => NULL,
                'updated_by' => NULL,
                'created_at' => '2019-10-19 14:20:13',
                'updated_at' => '2019-10-19 14:20:13',
            ),
        ));
    }
}