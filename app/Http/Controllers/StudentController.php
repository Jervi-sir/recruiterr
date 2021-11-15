<?php

namespace App\Http\Controllers;

use App\Models\Tempuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function join(Request $request)
    {
        $exist = Tempuser::where('email', $request->email)->count();
        if($exist == 0) {
            $user = new Tempuser;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->psswd = $request->password;
            $user->field = $request->field;
            $user->student_code = $request->code;
            $user->save();
            return view('success');
        }
        else {
            return back()->withInput()->withErrors(['email already taken' => 'The Message']);
        }
        //
    }

    public function success()
    {
        return view('success');
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
