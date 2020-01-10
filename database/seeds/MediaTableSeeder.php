<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 2,
                'media_category_id' => 0,
                'model_id' => 2,
                'model_type' => 'App\\Article',
                'collection_name' => 'images',
                'title' => '',
                'alt' => NULL,
                'description' => '',
                'file_name' => 'ff0000.png',
                'file_ext' => 'png',
                'disk' => '',
                'size' => 14594,
                'manipulations' => '',
                'pub' => 1,
                'sort' => NULL,
                'created_at' => '2018-05-03 09:55:26',
                'updated_at' => '2018-05-03 09:55:26',
            ),
            1 => 
            array (
                'id' => 3,
                'media_category_id' => 0,
                'model_id' => 2,
                'model_type' => 'App\\Article',
                'collection_name' => 'images',
                'title' => '',
                'alt' => NULL,
                'description' => '',
                'file_name' => '24524-00ff00.png',
                'file_ext' => 'png',
                'disk' => '',
                'size' => 14903,
                'manipulations' => '',
                'pub' => 1,
                'sort' => NULL,
                'created_at' => '2018-05-03 09:56:11',
                'updated_at' => '2018-05-03 09:56:11',
            ),
        ));
    }
}