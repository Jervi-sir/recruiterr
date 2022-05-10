<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Badge;
use App\Models\Skill;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AdminClassicController extends Controller
{


    public function adminList() {
        $role = Role::where('role_name', 'student')->first();

    }

    public function students()
    {
        $role = Role::where('role_name', 'student')->first();
        $students = $role->users()->paginate(20);

        return view('adminNoVue.students.all', ['students' => $students]);
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

        return view('adminNoVue.specialities.all', ['specialities' => $data_obj]);

    }

    public function specialitiesAdd()
    {
        return view('adminNoVue.specialities.add');
    }

    public function specialitiesSave(Request $request)
    {
        $specialitiy = new Speciality();

        $specialitiy->name = $request->name;
        $specialitiy->name_eng = $request->name_eng;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('New Speciality added', '', ["positionClass" => "toast-top-center"]);

        return  redirect()->route('adminNoVue.specialities');
    }

    public function specialitiesUpdate(Request $request)
    {
        $specialitiy = Speciality::find($request->id);
        $specialitiy->name = $request->name;
        $specialitiy->name_eng = $request->name_eng;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('Speciality has been Updated', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.specialities');
    }


    public function specialitiesDelete(Request $request)
    {
        $specialitiy = Speciality::find($request->id);
        $specialitiy->delete();

        Toastr::warning('Speciality has been Deleted', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.specialities');
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

        return view('adminNoVue.skills.all', ['skills' => $data_obj]);
    }

    public function skillsAdd()
    {
        return view('adminNoVue.skills.add');

    }

    public function skillsSave(Request $request)
    {
        $skill = new Skill();

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        Toastr::success('new Skill added', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.skills');

    }


    public function skillsUpdate(Request $request)
    {
        $specialitiy = Skill::find($request->id);
        $specialitiy->name = $request->name;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('Skill has been updated', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.skills');
    }


    public function skillsDelete(Request $request)
    {
        $specialitiy = Skill::find($request->id);
        $specialitiy->delete();

        Toastr::warning('Skill has been Deleted', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.skills');
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

        return view('adminNoVue.badges.all', ['badges' => $data_obj]);
    }

    public function badgesAdd()

    {
        return view('adminNoVue.badges.add');

    }

    public function badgesSave(Request $request)
    {
        $skill = new Badge();

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        Toastr::success('new Badge added', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.badges');

    }

    public function badgesUpdate(Request $request)
    {
        $specialitiy = Badge::find($request->id);
        $specialitiy->name = $request->name;
        $specialitiy->description = $request->description;
        $specialitiy->save();

        Toastr::success('Badge has been Updated', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.badges');
    }


    public function badgesDelete(Request $request)
    {
        $specialitiy = Badge::find($request->id);
        $specialitiy->delete();

        Toastr::warning('Badge has been Deleted', '', ["positionClass" => "toast-top-center"]);
        return  redirect()->route('adminNoVue.badges');
    }




}
