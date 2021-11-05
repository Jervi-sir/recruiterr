<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'web dev',
            'description' => 'web dev skill',
        ]);
        DB::table('skills')->insert([
            'name' => 'designer',
            'description' => 'desgin dscription',
        ]);
        DB::table('skills')->insert([
            'name' => 'writing',
            'description' => 'writing dscription',
        ]);
        DB::table('skills')->insert([
            'name' => 'musicComposer',
            'description' => 'musicComposer dscription',
        ]);
        DB::table('skills')->insert([
            'name' => 'digital artist',
            'description' => 'digital artist dscription',
        ]);
        DB::table('skills')->insert([
            'name' => 'athleat',
            'description' => 'athleat dscription',
        ]);
        DB::table('skills')->insert([
            'name' => 'quran',
            'description' => 'quran dscription',
        ]);
    }
}
