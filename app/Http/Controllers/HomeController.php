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
        $role_student = Role::where('role_name', 'student')->first();
        //$user_count = User::where('role_id', $role_student)->count();
        $articles = Article::orderBy('id', 'DESC')->get();

        $data['role'][0] = [
            'role_id' => $role_student->id,
            'role_name' => $role_student->role_name,
        ];

        foreach ($articles as $key => $article) {
            $data['articles'][$key] = [
                'id' => $article->id,
                'title' => $article->title,
                'title_isArabic' => $this->is_rtl($article->title),
                'images' => $article->images,
                'link' => $article->link,
                'description' => $article->description,
                'description_isArabic' => $this->is_rtl($article->description),
                'time' => $article->updated_at->diffForHumans(),
            ];
        }

        return view('simplest.feeds.index',['data' => $data]);
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


    function is_rtl($string) {
        $rtl_chars_pattern = '/[\x{0590}-\x{05ff}\x{0600}-\x{06ff}]/u';
        return preg_match($rtl_chars_pattern, $string);
    }
}
