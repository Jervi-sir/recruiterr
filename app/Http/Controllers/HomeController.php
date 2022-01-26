<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Article;
use App\Models\Skill;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_student = Role::where('role_name', 'student')->first()->id;
        $user_count = User::where('role_id', $role_student)->count();
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('home.index',['user_count' => $user_count, 'articles' => $articles]);
    }

    public function newsfeed()
    {
        //
    }

    public function groups()
    {
        return view('groups.index');
    }

    public function courses()
    {
        //
    }


    public function events()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function badges()
    {
        return view('badges.index');
        //
    }

}
