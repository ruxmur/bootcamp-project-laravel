<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\contact;
use App\Http\Controllers\ContactController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/sendContact', function () {
//     return redirect('/showContact');
// });

// Route::get('/contact', [ContactController::class, 'send']);
// Route::post('/contact', [ContactController::class, 'show']);


Route::get('/contact', function () {
    return showContact::all();
});

Route::post('/contact', function () {
    request()->validate;


return post::create([
        'contact' => request('showContact')]
    );
});