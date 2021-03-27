<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\Recursos\CodigonepalController;
use App\Http\Controllers\Recursos\OnlinetutorialController;
use App\Http\Controllers\Recursos\CodingLabController;
use App\Http\Controllers\Recursos\BluuwebController;
use App\Http\Controllers\Recursos\AlexCGController;
use App\Http\Controllers\Recursos\VariosController;
use App\Http\Controllers\Recursos\ApiController;
use App\Http\Controllers\Service\ClienteController;

use App\Http\Livewire\OnlineTutorial\LiveTrackComponent;


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
Route::get("/panel3", [OnlinetutorialController::class, 'panel3']);
Route::get("/panel4", [OnlinetutorialController::class, 'panel4']);

Route::get("/onlinetutorial/ejercicio1", [OnlinetutorialController::class, 'ejercicio1']);
Route::get("/onlinetutorial/ejercicio2", [OnlinetutorialController::class, 'ejercicio2']);
Route::get("/onlinetutorial/ejercicio3", [OnlinetutorialController::class, 'ejercicio3']);
Route::get("/onlinetutorial/ejercicio4", [OnlinetutorialController::class, 'ejercicio4']);
Route::get("/onlinetutorial/ejercicio5", [OnlinetutorialController::class, 'ejercicio5']);
Route::get("/onlinetutorial/ejercicio6", [OnlinetutorialController::class, 'ejercicio6']);
Route::get("/onlinetutorial/ejercicio7", [OnlinetutorialController::class, 'ejercicio7']);
Route::get("/onlinetutorial/ejercicio8", [OnlinetutorialController::class, 'ejercicio8']);
Route::get("/onlinetutorial/ejercicio9", [OnlinetutorialController::class, 'ejercicio9']);
Route::get("/onlinetutorial/ejercicio10", [OnlinetutorialController::class, 'ejercicio10']);
Route::get("/onlinetutorial/ejercicio11", [OnlinetutorialController::class, 'ejercicio11']);
Route::get("/onlinetutorial/ejercicio12", [OnlinetutorialController::class, 'ejercicio12']);
Route::get("/onlinetutorial/ejercicio13", [OnlinetutorialController::class, 'ejercicio13']);
Route::get("/onlinetutorial/ejercicio14", [OnlinetutorialController::class, 'ejercicio14']);
Route::get("/onlinetutorial/ejercicio15", [OnlinetutorialController::class, 'ejercicio15']);
Route::get("/onlinetutorial/ejercicio16", [OnlinetutorialController::class, 'ejercicio16']);
Route::get("/onlinetutorial/ejercicio17", [OnlinetutorialController::class, 'ejercicio17']);
Route::get("/onlinetutorial/ejercicio18", [OnlinetutorialController::class, 'ejercicio18']);
Route::get("/onlinetutorial/ejercicio19", [OnlinetutorialController::class, 'ejercicio19']);
/* Nueva configuracion */
Route::get("/onlineTutorial/livetrack", LiveTrackComponent::class)->name('online.livetrack'); 

/*Codigo CodingLab */

Route::get("/codinglab", [CodingLabController::class, 'codinglab']);
Route::get("/panelcodelab", [CodingLabController::class, 'panelcodelab']);
Route::get("/panelcodelab1", [CodingLabController::class, 'panelcodelab1']);

Route::get("/codinglab/ejercicio1", [CodingLabController::class, 'ejercicio1']);
Route::get("/codinglab/ejercicio2", [CodingLabController::class, 'ejercicio2']);


/*--- Bluuweb ----*/

Route::get("/bluuweb", [BluuwebController::class, 'bluuweb']);

Route::get("/bluuweb/ejercicio1", [BluuwebController::class, 'ejercicio1']);
Route::get("/bluuweb/ejercicio2", [BluuwebController::class, 'ejercicio2']);

/*--- AlexCG ----*/

Route::get("/alexCG", [AlexCGController::class, 'alexCG']);


/*---- varios ---*/
Route::get('/varios',[VariosController::class, 'varios']);

Route::get("/varios/ejercicio1", [VariosController::class, 'ejercicio1']);
Route::get("/varios/ejercicio2", [VariosController::class, 'ejercicio2']);
Route::get("/varios/ejercicio3", [VariosController::class, 'ejercicio3']);
Route::get("/varios/ejercicio4", [VariosController::class, 'ejercicio4']);
Route::get("/varios/ejercicio5", [VariosController::class, 'ejercicio5']);
Route::get("/varios/ejercicio6", [VariosController::class, 'ejercicio6']);
Route::get("/varios/ejercicio7", [VariosController::class, 'ejercicio7'])->name('cliente_path');

/*----- API -------*/
Route::get('/api1',[ApiController::class, 'api1']);

/*---  ejercicios  ---*/
Route::get("/apis/ejercicio1", [ApiController::class, 'ejercicio1']);
Route::get("/apis/ejercicio2", [ApiController::class, 'ejercicio2']);
Route::get("/apis/ejercicio3", [ApiController::class, 'ejercicio3']);
Route::get("/apis/ejercicio4", [ApiController::class, 'ejercicio4']);


/*---- controlador de cliente -----*/

Route::get("/client/create", [ClienteController::class, 'create'])->name('cliente.create');

Route::post("/client/create", [ClienteController::class, 'storeClient'])->name('clien.store');