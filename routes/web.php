<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;


Route::get('/', function () {
    return view('welcome');

});

// Route::get('/contact', function ()  {
//     return view('contact');
//     });

Route::get('/contact', 'App\Http\Controllers\ContactController@showContact');

Route::post('/sendContact', 'App\Http\Controllers\ContactController@showContact');




Route::get('clients',[clientController::class,'getData']);
Route::get('about_clients',[aboutClientController::class,'getData']);