<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article as ArticleModel;

class ArticleController extends Controller
{
    public function viewAllArc(){
        $articles = ArticleModel::paginate(2);
        return view('article.article', compact('articles'));
    }

    public function showDetails($id){
        $article = ArticleModel::findOrFail($id);
        return view('article.articleDet', compact('article'));
    }
}
