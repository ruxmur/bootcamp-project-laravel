<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');

});

// Route::get('/contact', function ()  {
//     return view('contact');
//     });

Route::get('/contact', 'App\Http\Controllers\ContactController@showContact');

Route::post('/sendContact', 'App\Http\Controllers\ContactController@showContact');




Route::get('/',[HomeController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
