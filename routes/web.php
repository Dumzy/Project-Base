<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('system/template/blank');
});

Route::get('/table', function () {
    return view('system/template/table');
});

Route::get('/form', function () {
    return view('system/template/form');
});

//student









//employee








//primarydata