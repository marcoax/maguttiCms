<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 109,
                'title' => 'Valle d\'Aosta',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 109,
                'title' => 'Piemonte',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 109,
                'title' => 'Liguria',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 109,
                'title' => 'Friuli Venezia Giulia',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 109,
                'title' => 'Toscana',
                'zone' => 'center',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 109,
                'title' => 'Veneto',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 109,
                'title' => 'Lombardia',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 109,
                'title' => 'Emilia Romagna',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 109,
                'title' => 'Lazio',
                'zone' => 'center',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 109,
                'title' => 'Umbria',
                'zone' => 'center',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 109,
                'title' => 'Marche',
                'zone' => 'center',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 109,
                'title' => 'Trentino Alto Adige',
                'zone' => 'north',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 109,
                'title' => 'Abruzzo',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 109,
                'title' => 'Molise',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 109,
                'title' => 'Campania',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 109,
                'title' => 'Puglia',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 109,
                'title' => 'Basilicata',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 109,
                'title' => 'Calabria',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 109,
                'title' => 'Sicilia',
                'zone' => 'south',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 109,
                'title' => 'Sardegna',
                'zone' => 'center',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
    }
}