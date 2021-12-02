<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
