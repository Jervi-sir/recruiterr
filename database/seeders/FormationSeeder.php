<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            'name' => 'web dev',
            'video_ids' => 'it must be a json obj',
            'description' => 'description1',
        ]);
        DB::table('formations')->insert([
            'name' => 'blockchain dev',
            'video_ids' => 'it must be a json obj',
            'description' => 'description2',
        ]);
        DB::table('formations')->insert([
            'name' => 'tech lead',
            'video_ids' => 'it must be a json obj',
            'description' => 'description3',
        ]);
    }
}
