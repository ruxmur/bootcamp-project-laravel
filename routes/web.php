<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServicesPlanesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return view('welcome');

// });

// Route::get('/contact', function ()  {
//     return view('contact');
//     });
// Route::get('/contact', 'App\Http\Controllers\ContactController@showContact');
// Route::post('/sendContact', 'App\Http\Controllers\ContactController@showContact');




Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/services-planes',[ServicesPlanesController::class, 'services'])->name('services');
Route::get('/booking',[BookingController::class, 'booking'])->name('booking');
Route::get('/team',[TeamController::class, 'team'])->name('team');
Route::get('/about',[AboutController::class, 'about'])->name('about');
Route::get('/contact',[ContactUsController::class, 'contact'])->name('contact');
Route::get('/blog',[BlogController::class, 'blog'])->name('blog');


Route::get('/blog/article/{id}',[ArticleController::class, 'show'])->name('blogArticle');
