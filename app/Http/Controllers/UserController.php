<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sendOtp(Request $request)
    {
        $phone = $request->phone;
        if(is_numeric($phone)) {
            if(strlen($phone) == 10) {
                if(substr($phone, 0, 1) == '0') {
                    dd(true);
                }
                else {
                    return back()->withInput()->withErrors(['email already taken' => 'email already taken']);
                }
            }
        }
    }
}
