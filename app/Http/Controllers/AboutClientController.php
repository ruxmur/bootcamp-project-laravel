<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutClient;

class AboutClientController extends Controller
{
    function getData()
    {
        return AboutClient::all();
    }
}
