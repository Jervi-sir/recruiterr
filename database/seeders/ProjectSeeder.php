<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'profile_id' => 1,
            'name' => 'idea1',
            'is_validated' => 'true',
            'need_people' => 'true',
            'description' => 'describe the idea1',
        ]);
        DB::table('projects')->insert([
            'profile_id' => 2,
            'name' => 'idea2',
            'is_validated' => 'false',
            'need_people' => 'true',
            'description' => 'describe the idea2',
        ]);
       
    }
}
