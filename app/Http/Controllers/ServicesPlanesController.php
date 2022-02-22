<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Services\ModelLogger;


class ServicesPlanesController extends Controller
{
    public function showService(/*$membershipId,*/ Request $request/*, ModelLogger $logger*/)
    {
    }


    // public function showList(/*$membershipId,*/ Request $request/*, ModelLogger $logger*/)
    // {
    //     $services = Membership::with('name', 'type', 'duration')->get();
        
    //     $service = $services::findOrFail($membershipId);
      
    //     // $logger->logModel($request->user(), $service); 
   
    //     return view('home.services', ['services' => $services]);
    // }
    

}