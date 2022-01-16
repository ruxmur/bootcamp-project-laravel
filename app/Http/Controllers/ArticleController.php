<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($articleId)
    {
        $article = Article::findOrFail($articleId);
        return view('article.article', ['article' => $article]);
    }
}
