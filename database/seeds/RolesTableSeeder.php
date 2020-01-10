<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'su',
                'display_name' => 'super user',
                'description' => 'can do all',
                'created_at' => '2015-12-20 18:23:32',
                'updated_at' => '2015-12-20 18:23:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'admin',
                'description' => 'admi  user',
                'created_at' => '2015-12-20 18:26:36',
                'updated_at' => '2015-12-20 18:26:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'display_name' => 'user',
                'description' => 'user role',
                'created_at' => '2015-12-20 18:50:58',
                'updated_at' => '2015-12-20 18:50:58',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Guest',
                'display_name' => 'guest',
                'description' => 'guest user',
                'created_at' => '2015-12-28 13:37:23',
                'updated_at' => '2015-12-28 13:37:23',
            ),
        ));
    }
}