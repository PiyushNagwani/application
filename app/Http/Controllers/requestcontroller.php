<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class requestcontroller extends Controller
{
    //
    function testrequest(request $req)
    {
        return $req->input();
    }
}
//for show the input data on the page we use this request class with input method 