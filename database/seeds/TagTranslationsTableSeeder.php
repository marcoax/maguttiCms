<?php

use Illuminate\Database\Seeder;

class TagTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('tag_translations')->delete();
        
        \DB::table('tag_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag_id' => 1,
                'locale' => 'en',
                'title' => 'Tag',
                'created_at' => '2016-12-27 18:07:07',
                'updated_at' => '2016-12-27 17:07:07',
            ),
            1 => 
            array (
                'id' => 2,
                'tag_id' => 1,
                'locale' => 'it',
                'title' => 'tag',
                'created_at' => '2016-12-27 14:46:45',
                'updated_at' => '2016-12-27 13:46:45',
            ),
            2 => 
            array (
                'id' => 3,
                'tag_id' => 2,
                'locale' => 'en',
                'title' => 'PHP',
                'created_at' => '2016-12-27 17:07:15',
                'updated_at' => '2016-12-27 17:07:15',
            ),
            3 => 
            array (
                'id' => 4,
                'tag_id' => 2,
                'locale' => 'it',
                'title' => 'Php',
                'created_at' => '2016-12-27 17:07:15',
                'updated_at' => '2017-08-02 14:02:09',
            ),
            4 => 
            array (
                'id' => 7,
                'tag_id' => 4,
                'locale' => 'it',
                'title' => 'Artisan',
                'created_at' => '2017-08-02 14:01:53',
                'updated_at' => '2017-08-02 14:01:53',
            ),
            5 => 
            array (
                'id' => 8,
                'tag_id' => 4,
                'locale' => 'en',
                'title' => 'Artisan',
                'created_at' => '2017-08-02 14:01:53',
                'updated_at' => '2017-08-02 14:01:53',
            ),
        ));
    }
}