<?php

use Illuminate\Database\Seeder;

class HpslidersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('hpsliders')->delete();
        
        \DB::table('hpsliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'maguttiCms 5.8 slider',
                'description' => 'free open source CMS based on the Laravel PHP Framework',
                'icon' => NULL,
                'image' => 'header2.jpg',
                'link' => NULL,
                'slug' => 'magutticms-58-slider',
                'sort' => 200,
                'is_active' => 1,
                'created_by' => 0,
                'created_at' => '2016-12-27 17:34:38',
                'updated_at' => '2019-05-10 23:16:41',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'maguttiCms 5.8',
                'description' => 'A modular multilingual CMS built with Laravel 5.8',
                'icon' => NULL,
                'image' => 'header1.jpg',
                'link' => NULL,
                'slug' => '8',
                'sort' => 100,
                'is_active' => 1,
                'created_by' => 0,
                'created_at' => '2016-12-27 18:18:09',
                'updated_at' => '2019-05-10 23:16:15',
            ),
        ));
    }
}