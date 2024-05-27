<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles=Article::All();
        return view('articles.index',compact('articles'));
    }

    public function show(Request $request, $articleId){
        $article= Article::find($articleId);
        if (!$article) {
            abort(404);
        }

        return view('articles.show', compact('article'));        
    }
}
