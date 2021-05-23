<?php

namespace App\Http\Controllers;

use Illuminate/Http\Request;

class usercontroller extends Controller
{
    function index(request $req ){
        return $req->input();
    }
}
