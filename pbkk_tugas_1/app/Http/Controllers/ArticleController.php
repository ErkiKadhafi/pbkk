<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "title" => 'Lists of Articles',
            "articles" => Article::all()
        ]);
    }

    public function content(Article $article){
        return view('content', [
            "article" => $article
        ]);
    }
}