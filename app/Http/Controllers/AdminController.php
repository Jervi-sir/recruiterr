<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Badge;
use App\Models\Skill;
use App\Models\Speciality;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function adminList() {
        $role = Role::where('role_name', 'student')->first();

    }

    public function students()
    {
        $role = Role::where('role_name', 'student')->first();
        $students = $role->users()->get();

        foreach ($students as $key => $student) {
            $data['students'][$key] = [
                'id' => $student->id,
                'name' => $student->name,
                'email' => $student->email,
                'mobile' => $student->mobile,
                'speciality' => $student->profile->speciality_id,
            ];
        }

        $data_obj = (object)$data['students'];

        return view('admin.students', ['students' => $data_obj]);
    }

    public function specialities()
    {
        $specialities = Speciality::all();

        foreach ($specialities as $key => $specialitiy) {
            $data['specialities'][$key] = [
                'id' => $specialitiy->id,
                'name' => $specialitiy->name,
                'name_eng' => $specialitiy->name_eng,
                'description' => $specialitiy->description,
            ];
        }

        $data_obj = (object)$data['specialities'];

        return view('admin.specialities', ['specialities' => $data_obj]);

    }

    public function specialitiesAdd()
    {
        return view('admin.specialityAdd');
    }

    public function specialitiesSave(Request $request)
    {
        $specialitiy = new Speciality();

        $specialitiy->name = $request->name;
        $specialitiy->name_eng = $request->name_eng;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        return  redirect()->route('admin.specialities');

    }

    ///////////////////////////////////////////////
    public function skills()
    {
        $skills = Skill::all();

        foreach ($skills as $key => $skill) {
            $data['skills'][$key] = [
                'id' => $skill->id,
                'name' => $skill->name,
                'description' => $skill->description,
            ];
        }

        $data_obj = (object)$data['skills'];

        return view('admin.skills', ['skills' => $data_obj]);
    }

    public function skillsAdd()
    {
        return view('admin.skillAdd');

    }

    public function skillsSave(Request $request)
    {
        $skill = new Skill();

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        return  redirect()->route('admin.skills');

    }

    ///////////////////////////////////////////////
    public function badges()
    {
        $badges = Badge::all();

        foreach ($badges as $key => $badge) {
            $data['badges'][$key] = [
                'id' => $badge->id,
                'name' => $badge->name,
                'description' => $badge->description,
            ];
        }

        $data_obj = (object)$data['badges'];

        return view('admin.badges', ['badges' => $data_obj]);
    }

    public function badgesAdd()
    {
        return view('admin.badgesAdd');

    }

    public function badgesSave(Request $request)
    {
        $skill = new Badge();

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        return  redirect()->route('admin.badges');

    }


}
