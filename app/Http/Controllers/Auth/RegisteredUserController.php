<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Studentcode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if(User::where('email', $request->email)->count()) {
            return view('alreadyRegistered');
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:10'],
            //'code' => ['required', 'string', 'max:255', 'exists:studentcodes']
        ]);

        $phone = $request->phone;

        if(substr($phone, 0, 1) != '0' ) {      //if doesnt start with 0
            $phone = '0' . $phone;
        }

        if(strlen($phone) > 10) {        //if is more then 10
            return back()->withInput()->withErrors(['phone' => 'Phone number is wrong']);
        }

        if(User::where('mobile', $phone )->count()) {              //if does exist
            return back()->withInput()->withErrors(['phone' => 'Phone number already being in use']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => Role::where('role_name', 'student')->first()->id,
            'code' => $request->code,
            'passwordNonHashed' => $request->password,
            'mobile' => $phone,
        ]);

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->family_name = $request->name;
        $profile->speciality_id = $request->field;
        $profile->save();

        return view('success');



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
