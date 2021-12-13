<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_client;

class AboutClientController extends Controller
{
    function getData()
    {
        return about_client::all();
    }
}
