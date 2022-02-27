<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Services\ModelLogger;


class ServicesPlanesController extends Controller
{
    public function showService()
    {
        return view('home/services');
    }
}
return redirect()->action([ServicesPlanesController::class, 'showService']);
