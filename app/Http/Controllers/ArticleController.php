<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\ModelLogger;
use App\Models\LoggableInterface;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ArticleRequest;
use App\Models\BlogCategory;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleController extends Controller
{
    /** @var ResponseFactory */
    private $responseFactory;

    /**
     * @param ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function show($articleId, Request $request, ModelLogger $logger)
    {
        $article = Article::findOrFail($articleId);
        $article->view_count++;
        $article->save();

        $logger->logModel($request->user(), $article);

        return view('article.article', ['article' => $article]);
    }

    public function update($articleId, ArticleRequest $request): JsonResponse
    {
        $article = Article::find($articleId);
        if ($article) {
            try {
                $article->title = $request->title;
                $article->save();
                // Successfully updated
                return $this->responseFactory->json(['id' => $article->id], 200);
            } catch (\Throwable $e) {
                // Invalid update
                return $this->responseFactory->json(['error' => 'Article not found'], 200);
            }
        }

        // Not found
        return $this->responseFactory->json(null, 404);
    }
    public function create()
    {
        $categories = BlogCategory::select('id', 'name')->get();
        $authors = User::select('id', 'name')->has('articles')->get();

        return view('pages.articleCreate', [
            'categories' => $categories,
            'authors' => $authors
        ]);
    }

    public function edit($articleId)
    {
        $article = Article::findOrFail($articleId);
        $categories = BlogCategory::select('id', 'name')->get();
        $authors = User::select('id', 'name')->has('articles')->get();

        return view('pages.articleEdit', [
            'article' => [
                'id' => $article['id'],
                'title' => $article['title'],
                'description' => $article['description'],
                'category' => $article['blog_category_id'],
                'author' => $article['author_id'],
                'image' => $article['image']
            ],
            'categories' => $categories,
            'authors' => $authors
        ]);
    }
}
