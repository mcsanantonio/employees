<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'EmployeeController@index');
Route::get('/{id}', 'EmployeeController@edit');
Route::get('/create', 'EmployeeController@create');
Route::post('/store', 'EmployeeController@store');
Route::patch('/update/{id}', ['as' => 'updateEmployee', 'uses' => 'EmployeeController@update']);
Route::get('/delete/{id}', 'EmployeeController@destroy');