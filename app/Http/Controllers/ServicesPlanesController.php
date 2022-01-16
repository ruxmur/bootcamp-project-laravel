<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesPlanesController extends Controller
{
    public function services()
    {
        return view('home.services');
    }
}