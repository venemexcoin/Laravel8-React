<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\Recursos\CodigonepalController;
use App\Http\Controllers\Recursos\OnlinetutorialController;


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

Route::get('/api1', function () {
    return view('/apis.fiatcripto');
});



Route::get('/employee', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/index', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/list', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/form', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/edit/{num}', 'App\Http\Controllers\EmployeeController@index');

Route::get("/ejemplo1", [PruebaController::class, 'ejemplo1']);
Route::get("/ejemplo2", [PruebaController::class, 'ejemplo2']);

/*Codigo Nepal Rutas */

Route::get("/codigonepal", [CodigonepalController::class, 'codigonepal']);



/*Onile Tutoriales Rutas */

Route::get("/onlinetutorial", [OnlinetutorialController::class, 'onlinetutorial']);
Route::get("/panel", [OnlinetutorialController::class, 'panel']);
Route::get("/panel1", [OnlinetutorialController::class, 'panel1']);
Route::get("/panel2", [OnlinetutorialController::class, 'panel2']);

Route::get("/onlinetutorial/ejercicio1", [OnlinetutorialController::class, 'ejercicio1']);