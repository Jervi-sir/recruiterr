<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ArticleController extends Controller
{
    public function addPost() {

        return view('articles.add');
    }


    public function publishPost(Request $request) {
        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [ "quality" => "50"])->getSecurePath();
        $user = Auth()->user();

        $article = new Article();
        $article->user_id = $user->id;
        $article->title = $request->title;
        $article->link = $request->link;
        $article->images = $uploadedFileUrl;
        $article->description = $request->description;
        $article->save();

        return redirect()->route('home');
    }


}
