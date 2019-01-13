<?php

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

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/counties', 'CountyController@index');
Route::get('/cities', 'CityController@index');
Route::get('/employees', 'EmployeeController@index');
Route::get('/salaries', 'SalaryController@index');
Route::get('/counties/new', 'CountyController@create');
Route::get('/continents', 'ContinentController@index');
Route::post('/counties', 'CountyController@store');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');
Route::get('/employees/new', 'EmployeeController@create');
Route::post('/employees', 'EmployeeController@store');
Route::get('/salaries/new', 'SalaryController@create');
Route::post('/salaries', 'SalaryController@store');
Route::get('/continents/new', 'ContinentController@create');
Route::post('/continents', 'ContinentController@store');
Route::get('/cities/delete/{id}', 'CityController@destroy');
Route::get('/counties/delete/{id}', 'CountyController@destroy');
Route::get('/employees/delete/{id}', 'EmployeeController@destroy');
Route::get('/salaries/delete/{id}', 'SalaryController@destroy');