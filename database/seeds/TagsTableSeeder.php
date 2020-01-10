<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '',
                'slug' => 'tag',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-12-27 18:07:28',
                'updated_at' => '2016-12-27 17:07:28',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '',
                'slug' => 'php',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2016-12-27 17:07:15',
                'updated_at' => '2016-12-27 17:07:15',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => '',
                'slug' => 'artisan',
                'created_by' => 0,
                'update_by' => 0,
                'created_at' => '2017-08-02 14:01:53',
                'updated_at' => '2017-08-02 14:01:53',
            ),
        ));
    }
}