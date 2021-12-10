<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Badge;
use App\Models\Skill;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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

        return view('admin.students.all', ['students' => $data_obj]);
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

        return view('admin.specialities.all', ['specialities' => $data_obj]);

    }

    public function specialitiesAdd()
    {
        return view('admin.specialities.add');
    }

    public function specialitiesSave(Request $request)
    {
        $specialitiy = new Speciality();

        $specialitiy->name = $request->name;
        $specialitiy->name_eng = $request->name_eng;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('New Speciality added', '', ["positionClass" => "toast-top-center"]);

        return  redirect()->route('admin.specialities');
    }

    public function specialitiesUpdate(Request $request)
    {
        $specialitiy = Speciality::find($request->id);
        $specialitiy->name = $request->name;
        $specialitiy->name_eng = $request->name_eng;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('Speciality has been Updated', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('admin.specialities');
    }


    public function specialitiesDelete(Request $request)
    {
        $specialitiy = Speciality::find($request->id);
        $specialitiy->delete();

        Toastr::warning('Speciality has been Deleted', '', ["positionClass" => "toast-top-center"]);
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

        return view('admin.skills.all', ['skills' => $data_obj]);
    }

    public function skillsAdd()
    {
        return view('admin.skills.add');

    }

    public function skillsSave(Request $request)
    {
        $skill = new Skill();

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        Toastr::success('new Skill added', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('admin.skills');

    }


    public function skillsUpdate(Request $request)
    {
        $specialitiy = Skill::find($request->id);
        $specialitiy->name = $request->name;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('Skill has been updated', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('admin.skills');
    }


    public function skillsDelete(Request $request)
    {
        $specialitiy = Skill::find($request->id);
        $specialitiy->delete();

        Toastr::warning('Skill has been Deleted', '', ["positionClass" => "toast-top-center"]);
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

        return view('admin.badges.all', ['badges' => $data_obj]);
    }

    public function badgesAdd()

    {
        return view('admin.badges.add');

    }

    public function badgesSave(Request $request)
    {
        $skill = new Badge();

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        Toastr::success('new Badge added', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('admin.badges');

    }

    public function badgesUpdate(Request $request)
    {
        $specialitiy = Badge::find($request->id);
        $specialitiy->name = $request->name;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('Badge has been Updated', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('admin.badges');
    }


    public function badgesDelete(Request $request)
    {
        $specialitiy = Badge::find($request->id);
        $specialitiy->delete();

        Toastr::warning('Badge has been Deleted', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('admin.badges');
    }




}
