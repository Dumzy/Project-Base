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

//student
Route::get('view-student', 'Student\StudentController@index');
Route::get('create-student', 'Student\StudentController@create');








//employee
Route::get('view-employee', 'Employee\EmployeeController@index');
Route::get('create-employee', 'Employee\EmployeeController@create');







//primarydata