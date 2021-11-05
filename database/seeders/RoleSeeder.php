<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'su',
            'description' => 'super admin',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'admin',
            'description' => 'admin',
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'student',
            'description' => 'student',
        ]);
    }
}
