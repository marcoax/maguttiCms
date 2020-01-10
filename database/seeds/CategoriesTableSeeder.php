<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'title' => '',
                'abstract' => NULL,
                'description' => NULL,
                'slug' => 'identity',
                'image' => '',
                'banner' => '',
                'doc' => '',
                'sort' => 0,
                'pub' => 1,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'created_by' => 0,
                'created_at' => '2016-07-04 06:29:04',
                'updated_at' => '2018-06-13 14:43:39',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'title' => '',
                'abstract' => NULL,
                'description' => NULL,
                'slug' => 'research',
                'image' => '',
                'banner' => '',
                'doc' => '',
                'sort' => 10,
                'pub' => 1,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'created_by' => 0,
                'created_at' => '2016-12-26 12:16:23',
                'updated_at' => '2018-06-13 14:44:31',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'title' => '',
                'abstract' => NULL,
                'description' => NULL,
                'slug' => 'start-up',
                'image' => '',
                'banner' => '',
                'doc' => '',
                'sort' => 20,
                'pub' => 1,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'created_by' => 0,
                'created_at' => '2016-12-27 18:33:25',
                'updated_at' => '2018-06-13 14:45:00',
            ),
        ));
    }
}