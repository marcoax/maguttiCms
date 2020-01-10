<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    public function run()
    {

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 1,
                'role_id' => 3,
            ),
        ));
    }
}