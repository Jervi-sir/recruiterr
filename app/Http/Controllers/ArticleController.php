<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addPost() {

        return view('articles.add');
    }


    public function publishPost(Request $request) {
        $user = Auth()->user();

        $article = new Article();
        $article->user_id = $user->id;
        $article->title = $request->title;
        $article->link = $request->link;
        $article->images = $request->image;
        $article->description = $request->description;
        $article->save();

        return view('articles.add');
    }


}
