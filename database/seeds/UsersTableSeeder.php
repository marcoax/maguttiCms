<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Magutti User',
                'email' => 'user@magutti.com',
                'gender' => 'M',
                'password' => '$2y$10$lHD.KhLYqqtHRQuXH6PKXODXFlgcQ8UZ6l7.3vaaeLSP1qgxSUszu',
                'remember_token' => 'XuvhEKuwvGBWY9o9Fogsjvr2WR8HrUhidF7X7NupnhglXVBFr1NnmmELygdQ',
                'list_code' => '',
                'is_active' => 1,
                'created_at' => '2017-07-07 13:37:30',
                'updated_at' => '2019-05-11 10:53:21',
            ),
        ));
    }
}