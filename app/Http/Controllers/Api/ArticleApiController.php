<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Services\ModelLogger;
use Illuminate\Http\Request;



class ArticleApiController extends Controller
{
    public function readMostPopular(Request $request, ModelLogger $logger)
    {
        $mostPopularArticles = Article::all()
            ->sortByDesc('view_count')
            ->take(10);

        $articlesArray =  [];
        foreach ($mostPopularArticles as $article) {
            $articlesArray[]  = [
                'id' => $article->id,
                'title' => $article->title,
                'description' => $article->description,
                'view_count' => $article->view_count,

            ];
        }
        echo json_encode($articlesArray);
    }

    public function readAll()
    {
        $allArticles = Article::all()
            ->sortByDesc('id');

        $articlesArray =  [];
        foreach ($allArticles as $article) {
            $articlesArray[]  = [
                'id' => $article->id,
                'title' => $article->title,
                'description' => $article->description,
                'view_count' => $article->view_count,

            ];
        }
        echo json_encode($articlesArray);
    }

    public function readOne($id)
    {
        $article = Article::find($id);

        echo json_encode($article);
    }
}
