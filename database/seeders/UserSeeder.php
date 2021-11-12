<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'su',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'admin',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'student1',
            'email' => 'student1@email.com',
            'password' => bcrypt('password'),
            'code' => '175175175',
        ]);
        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'student2',
            'email' => 'student2@email.com',
            'password' => bcrypt('password'),
            'code' => '0023112556',
        ]);
    }
}
