<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'domain' => '',
                'date' => '2017-07-11',
                'title' => '',
                'description' => '',
                'slug' => 'pinoscotto11',
                'doc' => '96281-dedprifxoaaxql6.jpg',
                'image' => 'DEDpRifXoAAXql6.jpg',
                'link' => NULL,
                'sort' => 0,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2017-07-11 05:18:08',
                'updated_at' => '2019-05-10 23:14:39',
            ),
            1 => 
            array (
                'id' => 2,
                'domain' => '',
                'date' => '2019-05-07',
                'title' => '',
                'description' => '',
                'slug' => NULL,
                'doc' => NULL,
                'image' => 'home-icone-news.png',
                'link' => NULL,
                'sort' => NULL,
                'pub' => 1,
                'created_by' => NULL,
                'created_at' => '2019-05-07 05:16:44',
                'updated_at' => '2019-05-07 05:18:22',
            ),
            2 => 
            array (
                'id' => 3,
                'domain' => '',
                'date' => '2019-04-17',
                'title' => '',
                'description' => '',
                'slug' => NULL,
                'doc' => NULL,
                'image' => 'slide-2.jpg',
                'link' => NULL,
                'sort' => NULL,
                'pub' => 1,
                'created_by' => NULL,
                'created_at' => '2019-05-07 05:17:21',
                'updated_at' => '2019-05-10 23:14:48',
            ),
            3 => 
            array (
                'id' => 4,
                'domain' => '',
                'date' => '2019-03-07',
                'title' => '',
                'description' => '',
                'slug' => NULL,
                'doc' => NULL,
                'image' => 'slide-6.jpg',
                'link' => NULL,
                'sort' => NULL,
                'pub' => 1,
                'created_by' => NULL,
                'created_at' => '2019-05-07 05:18:08',
                'updated_at' => '2019-05-07 05:20:18',
            ),
        ));
    }
}