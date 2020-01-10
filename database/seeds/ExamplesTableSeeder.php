<?php

use Illuminate\Database\Seeder;

class ExamplesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('examples')->delete();
        
        \DB::table('examples')->insert(array (
            0 => 
            array (
                'id' => 1,
                'article_id' => 5,
                'color' => '#3b486c',
                'date' => '2019-05-07',
                'article_2_id' => 10,
                'article_3_id' => 7,
                'title' => NULL,
                'description' => NULL,
                'description_2' => NULL,
                'slug' => '',
                'doc' => NULL,
                'image' => NULL,
                'image_crop' => NULL,
                'image_media_id' => NULL,
                'status_id' => 2,
                'sort' => 10,
                'pub' => 1,
                'created_at' => '2019-05-07 15:34:44',
                'updated_at' => '2019-05-07 15:41:41',
            ),
        ));
    }
}