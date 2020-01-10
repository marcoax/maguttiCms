<?php

use Illuminate\Database\Seeder;

class HpSliderTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('hp_slider_translations')->delete();
        
        \DB::table('hp_slider_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hp_slider_id' => 1,
                'locale' => 'en',
                'title' => 'maguttiCms 5.8 V2',
                'description' => 'free open source CMS based on the Laravel PHP Framework',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2019-05-12 16:05:28',
                'updated_at' => '2019-05-12 16:06:10',
            ),
            1 => 
            array (
                'id' => 2,
                'hp_slider_id' => 1,
                'locale' => 'it',
                'title' => NULL,
                'description' => NULL,
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2019-05-12 16:05:28',
                'updated_at' => '2019-05-12 16:05:28',
            ),
            2 => 
            array (
                'id' => 3,
                'hp_slider_id' => 1,
                'locale' => 'es',
                'title' => NULL,
                'description' => NULL,
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2019-05-12 16:05:28',
                'updated_at' => '2019-05-12 16:05:28',
            ),
            3 => 
            array (
                'id' => 4,
                'hp_slider_id' => 1,
                'locale' => 'fr',
                'title' => NULL,
                'description' => NULL,
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2019-05-12 16:05:28',
                'updated_at' => '2019-05-12 16:05:28',
            ),
        ));
    }
}