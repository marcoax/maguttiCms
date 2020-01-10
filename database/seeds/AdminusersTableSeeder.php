<?php

use Illuminate\Database\Seeder;

class AdminusersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('adminusers')->delete();
        
        \DB::table('adminusers')->insert(array (
            0 => 
            array (
                'id' => 3,
                'first_name' => 'magutti',
                'last_name' => 'Admin',
                'email' => 'cmsadmin@magutti.com',
                'password' => '$2y$10$fhRhYYRj2tgq1/jmaUkgH.y7AW2lcDrdEIsn5GP35aLVsEQWWCBh6',
                'real_password' => 'password',
                'remember_token' => 'A86YDNrXLhNgomNa77UWyzBMOcrbkhtcbEXTg0VWSjL84U9l4D2C3HaL4Z6U',
                'is_active' => 1,
                'locale' => 'en',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2019-04-10 20:00:46',
            ),
        ));
    }
}