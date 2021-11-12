<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studentcodes')->insert([
            'code' => '175175175',
            'student_name' => 'Jervi',
            'grade' => 'Computer Science',
        ]);
        DB::table('studentcodes')->insert([
            'code' => '123123123',
            'student_name' => 'Bruh',
            'grade' => 'Bruh grammer',
        ]);
        DB::table('studentcodes')->insert([
            'code' => '0023156',
            'student_name' => 'Charlie',
            'grade' => 'Video editor',
        ]);
        DB::table('studentcodes')->insert([
            'code' => '0023112556',
            'student_name' => 'Wheelie',
            'grade' => 'Most angries man',
        ]);
        DB::table('studentcodes')->insert([
            'code' => '2023112556',
            'student_name' => 'Mr Jacob',
            'grade' => 'Blind man',
        ]);

    }
}
