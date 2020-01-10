<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'GA_CODE',
                'value' => 'UA-',
                'description' => 'Codice  google  analitycs',
                'domain' => 'GA',
                'created_at' => '2016-08-09 12:01:24',
                'updated_at' => '2016-08-09 12:28:06',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'credits_url',
                'value' => 'https://magutti.com',
                'description' => 'url credits',
                'domain' => 'webiste',
                'created_at' => '2016-08-09 12:29:05',
                'updated_at' => '2016-12-29 14:35:06',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'GMAPS_KEY',
                'value' => '',
                'description' => 'Google maps apy key',
                'domain' => '',
                'created_at' => '2016-12-27 17:28:54',
                'updated_at' => '2016-12-29 09:24:44',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'iubenda_code_it',
                'value' => NULL,
                'description' => '',
                'domain' => '',
                'created_at' => '2018-06-05 07:08:21',
                'updated_at' => '2019-05-11 12:06:46',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'iubenda_code_en',
                'value' => NULL,
                'description' => '',
                'domain' => '',
                'created_at' => '2018-06-05 07:10:35',
                'updated_at' => '2019-05-11 12:06:47',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'iubenda_site',
                'value' => NULL,
                'description' => '',
                'domain' => '',
                'created_at' => '2018-06-05 07:10:49',
                'updated_at' => '2019-05-11 12:07:00',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'captcha_site',
                'value' => '',
                'description' => '',
                'domain' => '',
                'created_at' => '2018-08-10 15:00:00',
                'updated_at' => '2018-08-10 15:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'captcha_secret',
                'value' => '',
                'description' => '',
                'domain' => '',
                'created_at' => '2018-08-10 15:00:00',
                'updated_at' => '2018-08-10 15:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'LNG',
                'value' => '9.432586',
                'description' => 'google maps longitude',
                'domain' => 'GMAPS',
                'created_at' => '2019-05-01 06:53:24',
                'updated_at' => '2019-05-11 12:08:00',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'LAT',
                'value' => '46.138065',
                'description' => 'google maps latitude',
                'domain' => 'GMAPS',
                'created_at' => '2019-05-01 06:55:27',
                'updated_at' => '2019-05-11 12:08:16',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'THEME_COLOR',
                'value' => '#9a9c00',
                'description' => 'name="theme-color" content="THEME_COLOR"',
                'domain' => 'THEME',
                'created_at' => '2019-05-02 18:04:54',
                'updated_at' => '2019-05-02 18:13:52',
            ),
        ));
    }
}