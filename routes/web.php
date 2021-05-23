<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\requestcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::POST('login',[usercontroller::class,"index"]);
route::view("login",'login');
route::view("noaccess","noaccess");
route::view("access","access");

route::group(['Middleware' =>['web']],function()
{
    route::view('accessgrp','accessgrp');
});
route::view('routeaccess','routeaccess')->middleware('protectedpage');
route::view('routenoaccess','routenoaccess')->middleware('protectedpage');
route::view('routehome','routehome')->middleware('protectedpage');

route::get('index',[datacontroller::class,"index"]);
route::get('getdata',[clientcontroller::class,'getdata']);

route::put('request',[requestcontroller::class,'testrequest']);
route::view('blade','request');