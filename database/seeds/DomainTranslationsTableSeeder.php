<?php

use Illuminate\Database\Seeder;

class DomainTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('domain_translations')->delete();
        
        \DB::table('domain_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'domain_id' => 1,
                'locale' => 'it',
                'title' => 'Top Header Slider',
                'update_by' => 0,
                'created_at' => '2016-06-23 07:36:42',
                'updated_at' => '2016-06-28 07:58:39',
            ),
            1 => 
            array (
                'id' => 2,
                'domain_id' => 1,
                'locale' => 'en',
                'title' => 'Top Header Slider',
                'update_by' => 0,
                'created_at' => '2016-06-23 07:36:42',
                'updated_at' => '2016-06-28 07:58:39',
            ),
            2 => 
            array (
                'id' => 7,
                'domain_id' => 2,
                'locale' => 'it',
                'title' => 'Bottom Slider Image',
                'update_by' => 0,
                'created_at' => '2016-06-23 07:38:24',
                'updated_at' => '2016-06-28 07:59:19',
            ),
            3 => 
            array (
                'id' => 8,
                'domain_id' => 2,
                'locale' => 'en',
                'title' => 'page gallery',
                'update_by' => 0,
                'created_at' => '2016-06-23 07:38:24',
                'updated_at' => '2016-12-27 16:38:49',
            ),
            4 => 
            array (
                'id' => 121,
                'domain_id' => 21,
                'locale' => 'it',
                'title' => 'Template con sottopagine',
                'update_by' => 0,
                'created_at' => '2016-06-28 13:18:04',
                'updated_at' => '2016-07-04 07:38:10',
            ),
            5 => 
            array (
                'id' => 122,
                'domain_id' => 21,
                'locale' => 'en',
                'title' => 'Sub page template',
                'update_by' => 0,
                'created_at' => '2016-06-28 13:18:04',
                'updated_at' => '2016-12-27 14:17:28',
            ),
        ));
    }
}