<?php

use Illuminate\Database\Seeder;

class MediaTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('media_translations')->delete();
        
        \DB::table('media_translations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'media_id' => 2,
                'locale' => 'it',
                'title' => 'ff0000.png',
                'alt' => NULL,
                'description' => '',
                'created_at' => '2018-05-03 09:55:26',
                'updated_at' => '2018-05-03 09:55:26',
            ),
            1 => 
            array (
                'id' => 3,
                'media_id' => 3,
                'locale' => 'it',
                'title' => '24524-00ff00.png',
                'alt' => NULL,
                'description' => '',
                'created_at' => '2018-05-03 09:56:11',
                'updated_at' => '2018-05-03 09:56:11',
            ),
        ));
    }
}