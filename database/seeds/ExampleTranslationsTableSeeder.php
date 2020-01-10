<?php

use Illuminate\Database\Seeder;

class ExampleTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('example_translations')->delete();
        
        \DB::table('example_translations')->insert(array (
            0 => 
            array (
                'id' => 9,
                'example_id' => 1,
                'slug' => 'titolo',
                'locale' => 'it',
                'title' => 'Titolo',
                'description' => NULL,
                'description_2' => NULL,
                'image' => '95748-card-3.jpg',
                'image_media_id' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_keywords' => NULL,
                'seo_no_index' => 0,
                'created_at' => '2019-05-07 15:41:06',
                'updated_at' => '2019-05-07 15:41:41',
            ),
            1 => 
            array (
                'id' => 10,
                'example_id' => 1,
                'slug' => '',
                'locale' => 'en',
                'title' => NULL,
                'description' => NULL,
                'description_2' => NULL,
                'image' => NULL,
                'image_media_id' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_keywords' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2019-05-07 15:41:06',
                'updated_at' => '2019-05-07 15:41:06',
            ),
            2 => 
            array (
                'id' => 11,
                'example_id' => 1,
                'slug' => '',
                'locale' => 'es',
                'title' => NULL,
                'description' => NULL,
                'description_2' => NULL,
                'image' => NULL,
                'image_media_id' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_keywords' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2019-05-07 15:41:06',
                'updated_at' => '2019-05-07 15:41:06',
            ),
            3 => 
            array (
                'id' => 12,
                'example_id' => 1,
                'slug' => '',
                'locale' => 'fr',
                'title' => NULL,
                'description' => NULL,
                'description_2' => NULL,
                'image' => NULL,
                'image_media_id' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_keywords' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2019-05-07 15:41:06',
                'updated_at' => '2019-05-07 15:41:06',
            ),
        ));
    }
}