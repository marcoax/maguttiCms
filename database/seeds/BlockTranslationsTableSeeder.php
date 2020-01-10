<?php

use Illuminate\Database\Seeder;

class BlockTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('block_translations')->delete();
        
        \DB::table('block_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_id' => 1,
                'locale' => 'en',
                'title' => 'Company Block Content',
                'subtitle' => NULL,
                'description' => '<p>lore impusm</p>',
                'created_at' => '2019-10-19 14:20:13',
                'updated_at' => '2019-10-19 14:20:13',
            ),
            1 => 
            array (
                'id' => 2,
                'block_id' => 1,
                'locale' => 'it',
                'title' => NULL,
                'subtitle' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-19 14:20:13',
                'updated_at' => '2019-10-19 14:20:13',
            ),
            2 => 
            array (
                'id' => 3,
                'block_id' => 1,
                'locale' => 'es',
                'title' => NULL,
                'subtitle' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-19 14:20:13',
                'updated_at' => '2019-10-19 14:20:13',
            ),
            3 => 
            array (
                'id' => 4,
                'block_id' => 1,
                'locale' => 'fr',
                'title' => NULL,
                'subtitle' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-19 14:20:13',
                'updated_at' => '2019-10-19 14:20:13',
            ),
        ));
    }
}