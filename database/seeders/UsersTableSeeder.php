<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'user1',
                'email' => 'user1@example.com',
                'email_verified_at' => '2022-09-06 07:58:37',
                'password' => '$2y$10$z6shyUtJeJuDrqN6MuAqxuadfU43bds.k75Hb0GlVmjdeRcgGuzlu',
                'remember_token' => 'iPtPMQDJM2',
                'created_at' => '2022-09-06 07:58:37',
                'updated_at' => '2022-09-06 07:58:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user2',
                'email' => 'user2@example.com',
                'email_verified_at' => '2022-09-06 07:58:37',
                'password' => '$2y$10$mQGXZ8N4LXDNAT8vvE7tSudBefuRr2G/O3pR14VJdloIu6uTEws2W',
                'remember_token' => 'OQnuHamsAX',
                'created_at' => '2022-09-06 07:58:37',
                'updated_at' => '2022-09-06 07:58:37',
            ),
        ));
        
        
    }
}