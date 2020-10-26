<?php

use Illuminate\Support\Facades\Route;

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
use Illuminate\Http\Request;




Route::get('/','EmployeesController@index')->name('adminindex');
Route::get('/create','EmployeesController@create')->name('admincreate');

Route::post('/store','EmployeesController@store')->name('adminstore');

Route::post('/update','EmployeesController@update')->name('adminupdate');

Route::get('/edit/{id}','EmployeesController@edit')->name('adminedit');


