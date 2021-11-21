<?php

namespace App\Http\Controllers;

use App\Models\Tempuser;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SmsController extends Controller
{
    public function send(Request $request)
    {
        $phone = $request->phone;
        if(is_numeric($phone)) {
            if(strlen($phone) == 10) {
                if(substr($phone, 0, 1) == '0') {
                    $phone_number = '+213' . substr($phone, 1, 10);
                    $otp=rand(1000,9999);
                    Session::put('key', $otp);
                    Session::put('phone', $phone_number);
                    Nexmo::message()->send([
                        'to' => $phone_number,
                        'from' => 'sender',
                        'text' => 'Welcome to home of entrepreneurs, here is your verification code: ' . $otp . '   ',
                    ]);

                    return redirect('/verifySms');
                }
                else {
                    return back()->withInput()->withErrors(['wrong phone number' => 'wrong phone number']);
                }
            }
        }
    }

    public function getVerify()
    {
        $phone = Session::get('phone');

        return view('withPhoneVerification.phoneVerification', ['phone' => $phone]);
    }

    public function verify(Request $request)
    {
        $code = $request->code;
        if($code == Session::get('key'))
        {
            $phone = Session::get('phone');
            $user = Auth::user();
            $user->isVerified = 1;
            $user->mobile = $phone;

            $user->save();

            Session::forget('key');
            Session::forget('phone');

            return redirect('joined');
        }
        else {
            return back()->withInput()->withErrors(['wrong code' => 'wrong code']);
        }
    }

    public function joined()
    {
        return view('withPhoneVerification.joined');
    }


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
            return view('withPhoneVerification.success');
        }
        else {
            return back()->withInput()->withErrors(['email already taken' => 'email already taken']);
        }
    }

    public function success()
    {
        return view('withPhoneVerification.success');
    }

}
