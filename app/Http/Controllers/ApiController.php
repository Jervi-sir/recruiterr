<?php

namespace App\Http\Controllers;

use App\Models\Tempuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function register(Request $request) {

        $exist = Tempuser::where('email', $request->email)->count();
        if($exist == 0) {
            $user = new Tempuser;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->psswd = $request->password;
            $user->field = $request->field;
            $user->student_code = $request->studentCode;
            $user->save();
            return response()->json('successful', 200);
        }
        else {
            return response()->json('email already exists', 200);
        }
    }

    public function wake() {
        return response()->json('server awaken', 200);
    }
}
