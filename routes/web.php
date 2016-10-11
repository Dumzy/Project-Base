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
Route::get('view-school', 'Primarydata\SchoolController@index');
Route::get('create-school', 'Primarydata\SchoolController@create');

Route::get('view-city', 'Primarydata\CityController@index');
Route::get('create-city', 'Primarydata\CityController@create');

Route::get('view-country', 'Primarydata\CountryController@index');
Route::get('create-country', 'Primarydata\CountryController@create');

Route::get('view-designation', 'Primarydata\DesignationController@index');
Route::get('create-designation', 'Primarydata\DesignationController@create');

Route::get('view-grade', 'Primarydata\GradeController@index');
Route::get('create-grade', 'Primarydata\GradeController@create');

Route::get('view-medium', 'Primarydata\MediumController@index');
Route::get('create-medium', 'Primarydata\MediumController@create');

Route::get('view-province', 'Primarydata\ProvinceController@index');
Route::get('create-province', 'Primarydata\ProvinceController@create');

Route::get('view-stream', 'Primarydata\StreamController@index');
Route::get('create-stream', 'Primarydata\StreamController@create');
