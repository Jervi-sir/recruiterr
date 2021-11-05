<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BadgeSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\ProfileSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\FormationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $role = new RoleSeeder;
        $user = new UserSeeder;
        $speciality = new specialitySeeder;
        $profile = new ProfileSeeder;
        $skill = new SkillSeeder;
        $project = new ProjectSeeder;
        $badge = new BadgeSeeder;
        $formation = new FormationSeeder;

        $role->run();
        $user->run();
        $speciality->run();
        $profile->run();
        $skill->run();
        $project->run();
        $badge->run();
        $formation->run();
    }
}
