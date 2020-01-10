<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'user@magutti.com',
                'token' => '$2y$10$nJXdKBQUeiyZ1sNwrWxlAeMPUqCMN4C0sZjBJ2LOxwXv7wrgoriGy',
                'created_at' => '2019-06-22 12:57:39',
            ),
            1 => 
            array (
                'email' => 'cmsadmin@magutti.com',
                'token' => '$2y$10$KgF9dxkzTiXJ7NNvnyGoheRhAc8XQymclR2c0TW63zBeUIkhELlpy',
                'created_at' => '2019-06-22 12:57:50',
            ),
        ));
    }
}