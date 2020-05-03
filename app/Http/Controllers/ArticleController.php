<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        $data = [
            'articles' => $articles
        ];
        return view('customer.article.index',$data);
    }
    public function getDetailArticle($id)
    {
        $articles = Article::where('id','<>',$id)->limit(5)->get();
        $article = Article::find($id);
        $data = [
            'article' => $article,
            'articles' => $articles
        ];
        return view('customer.article.detail',$data);
    }
}
