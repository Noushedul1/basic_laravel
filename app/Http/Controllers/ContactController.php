<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function mycontact() 
    {
        return view('mycontact');
    }
}
