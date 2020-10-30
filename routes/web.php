<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;


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
    return view('/from.index');
});

Route::get('/temporal', function () {
    return view('/apis.fiatcripto');
});



Route::get('/employee', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/index', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/list', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/form', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/edit/{num}', 'App\Http\Controllers\EmployeeController@index');

Route::get("/ejemplo1", [PruebaController::class, 'ejemplo1']);
Route::get("/ejemplo2", [PruebaController::class, 'ejemplo2']);



