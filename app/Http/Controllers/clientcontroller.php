<?php

namespace App\Http\Controllers;

//connecting database with the help of model

use Illuminate\Http\Request;
use App\Models\client;

class clientcontroller extends Controller
{
    function getdata()
    {
        return client::all();
    }
    //
}
