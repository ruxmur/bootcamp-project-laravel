<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServicesPlanesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\CommentController;


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesPlanesController::class, 'showService'])
->name('services');
Route::get('/team',[TeamController::class, 'team'])->name('team');
Route::get('/about',[AboutController::class, 'about'])->name('about');

Route::get('/contacts',[ContactUsController::class, 'contact'])->name('contacts');
Route::post('/contactUs',[ContactUsController::class, 'send'])->name('contactUs.send')
->middleware('log.activity:sendContactUs');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/blog',[BlogController::class, 'blog'])->name('blog');
Route::get('/blog/article/create',[ArticleController::class, 'create']);
Route::get('/blog/article/{id}',[ArticleController::class, 'show'])->name('article');
Route::get('/blog/article/edit/{articleId}', [ArticleController::class, 'edit']);
//Route::post('/blog/article/{id}',[ArticleController::class, 'show'])->name('article');

Route::get('/api/articles/most-popular',[ArticleApiController::class, 'readMostPopularArticles']);
Route::get('/api/articles',[ArticleApiController::class, 'readAll']);
Route::get('/api/articles/{id}',[ArticleApiController::class, 'readOne']);
Route::delete('/api/articles/{id}',[ArticleApiController::class, 'deleteArticle']);
Route::post('/api/articles',[ArticleApiController::class, 'createArticle']);
Route::post('/api/articles/{articleId}', [ArticleApiController::class, 'editArticle']);
Route::post('/commentSend/{commentId}', [CommentController::class, 'send'])->name('comment.send');
