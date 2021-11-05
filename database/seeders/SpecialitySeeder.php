<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialities')->insert([
            'name' => 'null speciality',
            'name_eng' => 'null speciality',
            'description' => 'must not be shown for student/ maybe i might change it with a nullable',
        ]);
        DB::table('specialities')->insert([
            'name' => 'Informatique',
            'name_eng' => 'Computer Science',
            'description' => 'computer science',
        ]);
        DB::table('specialities')->insert([
            'name' => 'Electronique',
            'name_eng' => 'Electric Engeneering',
            'description' => 'electronics and arduino stuffs',
        ]);
    }
}
