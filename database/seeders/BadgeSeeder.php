<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('badges')->insert([
            'name' => 'Web dev',
            'description' => 'Web development in general',
        ]);
        DB::table('badges')->insert([
            'name' => 'digital marketer',
            'description' => 'Marketing ',
        ]);
        DB::table('badges')->insert([
            'name' => 'designer',
            'description' => 'Web designs',
        ]);
        DB::table('badges')->insert([
            'name' => 'public speaking',
            'description' => 'Web development in general',
        ]);
    }
}
