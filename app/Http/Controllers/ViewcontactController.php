<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewcontactController extends Controller
{
    protected $fullname;
    function fullname(Request $request)
    {
        $this->fullname = $request->first_name.' '.$request->last_name;
        return view('mycontact', ['result'=>$this->fullname]);
    }
}
