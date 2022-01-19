<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function blog()
  {
    $request = request()->all();
    $sort = $request['sort'] ?? 'ASC';

    $categories = BlogCategory::all();
    $category = $request['category'] ?? $categories->first();

    $articles = Article::orderby('created_at', $sort)->paginate(7);
    $articles->appends(['sort' => $sort]);

    
    // $articles = Article::orderby('created_at', 'DESC')->get()->all();
    return view('blog.blog', [
      'articles' => $articles,
      'categories' => $categories,
      'filter' => [
        'sort' => $sort,
      'category' => (int)$category,
      ]
    ]);
  }
}
