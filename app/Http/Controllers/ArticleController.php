<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ArticleController extends Controller
{
    public function addPost() {
        return view('simplest.articles.add');
    }

    public function publishPost(Request $request) {
        //$uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [ "quality" => "50"])->getSecurePath();
        $user = Auth::user();

        $article = new Article();
        $article->user_id = $user->id;
        $article->title = $request->title;
        $article->link = $request->link;
        $article->images = '$uploadedFileUrl';
        $article->description = $request->description;
        $article->save();

        return redirect()->route('home');
    }

    public function show($id) {
        $article = Article::find($id);
        $data= [
            'id' => $article->id,
            'title' => $article->title,
            'title_isArabic' => $this->is_rtl($article->title),
            'images' => $article->images,
            'link' => $article->link,
            'description' => $article->description,
            'description_isArabic' => $this->is_rtl($article->description),
            'time' => $article->updated_at->diffForHumans(),
        ];

        return view('simplest.articles.show',['article' => $data]);
    }

    public function editPost($id) {
        $article = Article::find($id);
        $data= [
            'id' => $article->id,
            'title' => $article->title,
            'images' => $article->images,
            'link' => $article->link,
            'description' => $article->description,
            'time' => $article->updated_at->diffForHumans(),
        ];

        return view('simplest.articles.edit',['article' => $data]);
    }

    public function updatePost(Request $request, $id) {

        $article = Article::find($id);
        $article->title = $request->title;
        $article->link = $request->link;

        if($article->image != null) {
            $article->images = '$uploadedFileUrl';
        }

        $article->description = $request->description;
        $article->save();

        $data= [
            'id' => $article->id,
            'title' => $article->title,
            'images' => $article->images,
            'link' => $article->link,
            'description' => $article->description,
            'time' => $article->updated_at->diffForHumans(),
        ];

        return view('simplest.articles.edit',['article' => $data]);
    }


    function is_rtl($string) {
        $rtl_chars_pattern = '/[\x{0590}-\x{05ff}\x{0600}-\x{06ff}]/u';
        return preg_match($rtl_chars_pattern, $string);
    }
}
