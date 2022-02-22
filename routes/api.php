<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/contact', 'App\Http\Controllers\ContactController@sendContact')->name('sendContact');
Route::put('/articles/{articleId}', [ArticleController::class, 'update'])->name('articles.put');