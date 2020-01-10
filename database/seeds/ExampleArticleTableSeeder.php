<?php

use Illuminate\Database\Seeder;

class ExampleArticleTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('example_article')->delete();
        
        \DB::table('example_article')->insert(array (
            0 => 
            array (
                'example_id' => 1,
                'article_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'example_id' => 1,
                'article_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'example_id' => 1,
                'article_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}