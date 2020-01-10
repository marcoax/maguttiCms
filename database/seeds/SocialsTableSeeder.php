<?php

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('socials')->delete();
        
        \DB::table('socials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'facebook',
                'description' => NULL,
                'icon' => 'facebook',
                'image' => '',
                'link' => 'http://www.facebook.com',
                'sort' => 10,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2016-08-09 12:50:01',
                'updated_at' => '2016-08-09 10:50:01',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Twitter',
                'description' => '',
                'icon' => 'twitter',
                'image' => '',
                'link' => 'http://www.twitter.com',
                'sort' => 20,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2016-06-28 12:58:53',
                'updated_at' => '2016-06-28 10:58:53',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Linkedin',
                'description' => '',
                'icon' => 'linkedin',
                'image' => '',
                'link' => 'http://www.linkedin.com',
                'sort' => 30,
                'pub' => 1,
                'created_by' => 0,
                'created_at' => '2016-06-28 12:58:59',
                'updated_at' => '2016-06-28 10:58:59',
            ),
        ));
    }
}