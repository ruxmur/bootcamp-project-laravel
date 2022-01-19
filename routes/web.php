<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServicesPlanesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ArticleController;



Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/services',[ServicesPlanesController::class, 'services'])->name('services')
->middleware('log.activity:services');
Route::get('/team',[TeamController::class, 'team'])->name('team');
Route::get('/about',[AboutController::class, 'about'])->name('about');

Route::get('/contacts',[ContactUsController::class, 'contact'])->name('contacts');
Route::post('/contactUs',[ContactUsController::class, 'send'])->name('contactUs.send')
->middleware('log.activity:sendContactUs');

Route::get('/blog',[BlogController::class, 'blog'])->name('blog');
Route::get('/blog/article/{id}',[ArticleController::class, 'show'])->name('blogArticle');
