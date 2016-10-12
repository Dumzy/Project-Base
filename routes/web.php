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
Route::post('save-employee', 'Employee\EmployeeController@store');
Route::get('edit-employee/{id}', 'Employee\EmployeeController@edit');
Route::post('update-employee', 'Employee\EmployeeController@update');
Route::post('update-employee-details', 'Employee\EmployeeDetailsController@update');
Route::get('delete-employee/{id}', 'Employee\EmployeeController@destroy');






//primarydata
Route::get('view-school', 'Primarydata\SchoolController@index');
Route::get('create-school', 'Primarydata\SchoolController@create');
Route::post('save-school', 'Primarydata\SchoolController@store');
Route::get('edit-school/{id}', 'Primarydata\SchoolController@edit');
Route::post('update-school', 'Primarydata\SchoolController@update');
Route::get('delete-school/{id}', 'Primarydata\SchoolController@destroy');

Route::get('view-city', 'Primarydata\CityController@index');
Route::get('create-city', 'Primarydata\CityController@create');
Route::post('save-city', 'Primarydata\CityController@store');
Route::get('edit-city/{id}', 'Primarydata\CityController@edit');
Route::post('update-city', 'Primarydata\CityController@update');
Route::get('delete-city/{id}', 'Primarydata\CityController@destroy');

Route::get('view-country', 'Primarydata\CountryController@index');
Route::get('create-country', 'Primarydata\CountryController@create');
Route::post('save-country', 'Primarydata\CountryController@store');
Route::get('edit-country/{id}', 'Primarydata\CountryController@edit');
Route::post('update-country', 'Primarydata\CountryController@update');
Route::get('delete-country/{id}', 'Primarydata\CountryController@destroy');

Route::get('view-designation', 'Primarydata\DesignationController@index');
Route::get('create-designation', 'Primarydata\DesignationController@create');
Route::post('save-designation', 'Primarydata\DesignationController@store');
Route::get('edit-designation/{id}', 'Primarydata\DesignationController@edit');
Route::post('update-designation', 'Primarydata\DesignationController@update');
Route::get('delete-designation/{id}', 'Primarydata\DesignationController@destroy');

Route::get('view-grade', 'Primarydata\GradeController@index');
Route::get('create-grade', 'Primarydata\GradeController@create');
Route::post('save-grade', 'Primarydata\GradeController@store');
Route::get('edit-grade/{id}', 'Primarydata\GradeController@edit');
Route::post('update-grade', 'Primarydata\GradeController@update');
Route::get('delete-grade/{id}', 'Primarydata\GradeController@destroy');

Route::get('view-medium', 'Primarydata\MediumController@index');
Route::get('create-medium', 'Primarydata\MediumController@create');
Route::post('save-medium', 'Primarydata\MediumController@store');
Route::get('edit-medium/{id}', 'Primarydata\MediumController@edit');
Route::post('update-medium', 'Primarydata\MediumController@update');
Route::get('delete-medium/{id}', 'Primarydata\MediumController@destroy');

Route::get('view-province', 'Primarydata\ProvinceController@index');
Route::get('create-province', 'Primarydata\ProvinceController@create');
Route::post('save-province', 'Primarydata\ProvinceController@store');
Route::get('edit-province/{id}', 'Primarydata\ProvinceController@edit');
Route::post('update-province', 'Primarydata\ProvinceController@update');
Route::get('delete-province/{id}', 'Primarydata\ProvinceController@destroy');

Route::get('view-stream', 'Primarydata\StreamController@index');
Route::get('create-stream', 'Primarydata\StreamController@create');
Route::post('save-stream', 'Primarydata\StreamController@store');
Route::get('edit-stream/{id}', 'Primarydata\StreamController@edit');
Route::post('update-stream', 'Primarydata\StreamController@update');
Route::get('delete-stream/{id}', 'Primarydata\StreamController@destroy');
