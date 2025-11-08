<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function get_all_article(){
        $article = Articles::with('author', 'category')->get();
        // dd($article);
        return view("main.home", ["article" => $article]);
    }

    public function getPopularArticle(){
        $popular = Articles::with('Category','author')->paginate(3);
        return view('main.popular', ['article' => $popular]);
    }
    public function getArticlebyID($id){
        $articlee = Articles::with('Category','author')->find($id);
        return view('main.read_more',['article'=>$articlee]);
    }
}
