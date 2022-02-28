<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\CreateArticleRequest;
use App\Models\Article;
use App\Services\ModelLogger;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Str;

class ArticleApiController extends Controller
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

    /**
     * Returns list of most popular articles
     *
     * @param ModelLogger $logger
     *
     * @return JsonResponse
     */
    public function readMostPopularArticles(ModelLogger $logger): JsonResponse
    {
        $mostPopularArticles = Article::all()
            ->sortByDesc('view_count')
            ->take($itemCount = 5);

        $articlesArray = [];
        foreach ($mostPopularArticles as $article) {
            $articlesArray[] = [
                'id' => $article->id,
                'title' => $article->title,
                'excerpt' => $article->excerpt,
                'image' => $article->image,
                'view_count' => $article->view_count,
                'image_url' => $article->image_url,
            ];
        }

        return $this->responseFactory->json($articlesArray);
    }

    /**
     * Read list of all articles
     *
     * @return JsonResponse
     */
    public function readAllArticles(): JsonResponse
    {
        $allArticles = Article::all()
            ->sortByDesc('id');

        $articlesArray = [];
        foreach ($allArticles as $article) {
            $articlesArray[] = [
                'id' => $article->id,
                'title' => $article->title,
                'description' => $article->desription,
                'view_count' => $article->view_count,
            ];
        }

        return $this->responseFactory->json($articlesArray);
    }


    /**
     * Reads one articles from provided article id.
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function readOneArticle($id): JsonResponse
    {
        $article = Article::find($id);

        if ($article) {
            return $this->responseFactory->json($article);
        }

        return $this->responseFactory->json(null, 404);
    }

    /**
     * Creates new article from provided data
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function createArticle(Request $request): JsonResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'min:10'],
            'description' => ['required', 'string', 'min:50'],
            'category' => 'required|numeric',
            'author' => 'required|numeric',
            'image' => 'image'
        ]);

        $article = Article::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author_id' => $request->input('author'),
            'image' => $request->file('image')->store('/', 'public'),
            'excerpt' => Str::limit($request->input('description')),
            'blog_category_id' => $request->input('category'),
            'seo_title' => $request->input('title'),
            'seo_description' => Str::limit($request->input('description'), 200),
        ]);

        return $this->responseFactory->json(['id' => $article->id], 201);
    }

    /**
     * Edit an existing article using provided data
     *
     * @param $articleId
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function editArticle($articleId, Request $request): JsonResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'min:10'],
            'description' => ['required', 'string', 'min:50'],
            'category' => 'required|numeric',
            'author' => 'required|numeric',
        ]);

        $article = Article::find($articleId);

        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->author_id = $request->input('author');
        if ($request->file('image')) {
            $article->image = $request->file('image')->store('/', 'public');
        }
        $article->excerpt = Str::limit($request->input('description'));
        $article->blog_category_id = $request->input('category');
        $article->seo_title = $request->input('title');
        $article->seo_description = Str::limit($request->input('description'), 200);

        $article->save();

        return $this->responseFactory->json(['id' => $articleId], 201);
    }

    /**
     * Deletes article resource from provided id
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function deleteArticle($id): JsonResponse
    {
        $article = Article::find($id);

        if ($article) {
            $article->delete();

            return $this->responseFactory->json(null, 204);
        }

        return $this->responseFactory->json(null, 404);
    }
}
