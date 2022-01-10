<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // public function contact()
    // {
    //     return view('home.contact');
    // }

    public function view(): View
    {
        return view('contacts.contactUs');
    }
    
}