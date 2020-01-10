<?php

use Illuminate\Database\Seeder;

class AdminuserRoleTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('adminuser_role')->delete();
        
        \DB::table('adminuser_role')->insert(array (
            0 => 
            array (
                'adminuser_id' => 3,
                'role_id' => 1,
            ),
        ));
    }
}