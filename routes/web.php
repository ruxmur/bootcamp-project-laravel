<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});

// Route::get('/contact', function ()  {
//     return view('contact');
//     });

Route::get('/contact', 'App\Http\Controllers\ContactController@showContact');

Route::post('/sendContact', 'App\Http\Controllers\ContactController@showContact');
