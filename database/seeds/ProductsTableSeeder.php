<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'PRDA',
                'category_id' => 1,
                'title' => '',
                'subtitle' => '',
                'description' => '',
                'slug' => NULL,
                'price' => 10.0,
                'image' => 'A.png',
                'doc' => NULL,
                'video' => '',
                'sort' => 0,
                'pub' => 1,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'created_by' => 0,
                'created_at' => '2017-08-02 10:09:39',
                'updated_at' => '2018-06-13 14:48:28',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'PRDB',
                'category_id' => 2,
                'title' => '',
                'subtitle' => '',
                'description' => '',
                'slug' => NULL,
                'price' => 20.0,
                'image' => 'B.png',
                'doc' => NULL,
                'video' => '',
                'sort' => 10,
                'pub' => 1,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'created_by' => 0,
                'created_at' => '2018-06-13 14:49:32',
                'updated_at' => '2018-06-13 14:49:32',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'PRDC',
                'category_id' => 3,
                'title' => '',
                'subtitle' => '',
                'description' => '',
                'slug' => NULL,
                'price' => 30.0,
                'image' => 'Cpng.png',
                'doc' => NULL,
                'video' => NULL,
                'sort' => 0,
                'pub' => 1,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'created_by' => 0,
                'created_at' => '2018-06-13 14:50:05',
                'updated_at' => '2019-08-16 07:52:00',
            ),
        ));
    }
}