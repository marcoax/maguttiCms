<?php

use Illuminate\Database\Seeder;

class CategoryTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('category_translations')->delete();
        
        \DB::table('category_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'prima-categoria',
                'category_id' => 1,
                'locale' => 'it',
                'title' => 'Prima Categoria',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-07-04 06:29:04',
                'updated_at' => '2018-06-13 14:43:39',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'first-category',
                'category_id' => 1,
                'locale' => 'en',
                'title' => 'First Category',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-07-04 06:29:04',
                'updated_at' => '2018-06-13 14:43:39',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'second-category',
                'category_id' => 2,
                'locale' => 'en',
                'title' => 'Second Category',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-12-26 12:16:23',
                'updated_at' => '2018-06-13 14:44:31',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'seconda-categoria',
                'category_id' => 2,
                'locale' => 'it',
                'title' => 'Seconda Categoria',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-12-26 12:16:23',
                'updated_at' => '2018-06-13 14:44:31',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'thid-category',
                'category_id' => 3,
                'locale' => 'en',
                'title' => 'Third Category',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-12-27 18:33:25',
                'updated_at' => '2018-06-13 14:45:00',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'terza-category',
                'category_id' => 3,
                'locale' => 'it',
                'title' => 'Terza Categoria',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-12-27 18:33:25',
                'updated_at' => '2018-06-13 14:45:00',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'nuova-categoria',
                'category_id' => 4,
                'locale' => 'it',
                'title' => 'Nuova categoria',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2017-08-02 13:16:28',
                'updated_at' => '2017-08-02 13:16:28',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'new-category',
                'category_id' => 4,
                'locale' => 'en',
                'title' => 'New category',
                'description' => NULL,
                'seo_title' => '',
                'seo_description' => '',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2017-08-02 13:16:28',
                'updated_at' => '2017-08-02 13:16:28',
            ),
        ));
    }
}