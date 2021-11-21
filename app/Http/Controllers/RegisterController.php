<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:10'],
            //'code' => ['required', 'string', 'max:255', 'exists:studentcodes']
        ]);


        $phone = $request->phone;
        if(substr($phone, 0, 1) != '0' && strlen($phone) < 10) {
            $phone = '0' . $phone;
            if(User::where('mobile', $phone )->count())
            {
                return back()->withInput()->withErrors(['phone' => 'Phone number already being in use']);
            }
        }
        else {
            if(strlen($phone) == 10) {
                continue;
            } else {
                return back()->withInput()->withErrors(['phone' => 'Phone number is wrong']);
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => Role::where('role_name', 'student')->first()->id,
            'code' => $request->code,
            'mobile' => $request->phone,
        ]);

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->speciality_id = $request->field;
        $profile->save();

        return view('success');
    }
}
