<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'speciality_id' => 1,
            'first_name' => 'su',
            'family_name' => 'su',
            'birthday' => Null,
            'bio' => 'super admin',
        ]);

        DB::table('profiles')->insert([
            'user_id' => 2,
            'speciality_id' => 1,
            'first_name' => 'admin',
            'family_name' => 'admin',
            'birthday' => Null,
            'bio' => 'admin',
        ]);

        DB::table('profiles')->insert([
            'user_id' => 3,
            'speciality_id' => 2,
            'first_name' => 'student',
            'family_name' => 'student',
            'birthday' => Null,
            'bio' => 'info i guess',
        ]);

        DB::table('profiles')->insert([
            'user_id' => 4,
            'speciality_id' => 3,
            'first_name' => 'student',
            'family_name' => 'student',
            'birthday' => Null,
            'bio' => 'electromnic i guess',
        ]);

        
    }
}
