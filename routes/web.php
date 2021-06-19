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
use App\Http\Livewire\OnlineTutorial\Css3DComponent;
use App\Http\Livewire\OnlineTutorial\DarkmodoComponent;
use App\Http\Livewire\OnlineTutorial\MenutoggleComponent;
use App\Http\Livewire\OnlineTutorial\LoadingbarComponent;
use App\Http\Livewire\OnlineTutorial\ResponnavComponent;
use App\Http\Livewire\OnlineTutorial\FloatingactionComponent;
use App\Http\Livewire\OnlineTutorial\PrefilComponent;
use App\Http\Livewire\OnlineTutorial\OxygenComponent;
use App\Http\Livewire\OnlineTutorial\PaginacionComponent;
use App\Http\Livewire\OnlineTutorial\ResposivecontactComponent;
use App\Http\Livewire\OnlineTutorial\cssanimationComponent;
use App\Http\Livewire\OnlineTutorial\StarskillsComponent;
use App\Http\Livewire\OnlineTutorial\TimelineComponent;
use App\Http\Livewire\OnlineTutorial\OnlyimageComponent;
use App\Http\Livewire\OnlineTutorial\StackedcardsComponent;
use App\Http\Livewire\OnlineTutorial\StackedcardsAddComponent;
use App\Http\Livewire\OnlineTutorial\MakegoogleComponent;
use App\Http\Livewire\OnlineTutorial\StackedAddComponent;
use App\Http\Livewire\OnlineTutorial\EcomerComponent; 


use App\Http\Livewire\Codinglab\WorkingComponent;
use App\Http\Livewire\Codinglab\Textclipboard;


use App\Http\Livewire\Javascript\HomeComponent;

use App\Http\Livewire\Varios\CalculadotaTrading1;
use App\Http\Livewire\Varios\VentaComponet;
use App\Http\Livewire\Varios\FilterGaleryComponet;


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

Route::get("/onlinetutorial", [OnlinetutorialController::class, 'onlinetutorial'])->name('online.index');
Route::get("/panel", [OnlinetutorialController::class, 'panel']);
Route::get("/panel1", [OnlinetutorialController::class, 'panel1']);
Route::get("/panel2", [OnlinetutorialController::class, 'panel2']);
Route::get("/panel3", [OnlinetutorialController::class, 'panel3'])->name('onlinetutorial.panel3');
Route::get("/panel3pagina1", [OnlinetutorialController::class, 'panel3pagina1'])->name('panel3pagina1');
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
Route::get("/onlineTutorial/Css3D", Css3DComponent::class)->name('online.css3d');
Route::get("/onlineTutorial/darkmodo", DarkmodoComponent::class)->name('online.darkmodo');
Route::get("/onlineTutorial/menutoggle", MenutoggleComponent::class)->name('online.menutoggle');
Route::get("/onlineTutorial/loadingbar", LoadingbarComponent::class)->name('online.loadingbar');
Route::get("/onlineTutorial/responav", ResponnavComponent::class)->name('online.responav');
Route::get('/onlineTutorial/menufload',FloatingactionComponent::class)->name('online.menufload');
Route::get('/onlineTutorial/prefil',PrefilComponent::class)->name('online.prefil');
Route::get('/onlineTutorial/oxygen',OxygenComponent::class)->name('online.oxygen');
Route::get('/onlineTutorial/paginacion',PaginacionComponent::class)->name('online.paginacion');
Route::get('/onlineTutorial/contact', ResposivecontactComponent::class)->name('online.contact');
Route::get('/onlineTutorial/cssanimation',cssanimationComponent::class)->name('online.cssanimation');
Route::get('/onlineTutorial/starskills', StarskillsComponent::class)->name('online.starskills');
Route::get('/onlineTutorial/timeline', TimelineComponent::class)->name('online.timeline');
Route::get('/onlineTutorial/onlyimage', OnlyimageComponent::class)->name('online.onlyimage');
Route::get('/onlineTutorial/stacked', StackedcardsComponent::class)->name('online.stacked');
Route::get('/onlineTutorial/admin', StackedcardsAddComponent::class)->name('online.admin');
Route::get('/onlineTutorial/google', MakegoogleComponent::class)->name('online.google');
Route::get('/onlineTutorial/ecomer', EcomerComponent::class)->name('online.ecomer');

/* Nueva Administaracion */
Route::get('onlineTutorial/stacked-add',StackedAddComponent::class)->name('online.stackedAdd');


/*Codigo CodingLab */

Route::get("/codinglab", [CodingLabController::class, 'codinglab'])->name('index.codinglab');
Route::get("/panelcodelab", [CodingLabController::class, 'panelcodelab'])->name('codelab.uno');
Route::get("/panelcodelab1", [CodingLabController::class, 'panelcodelab1']);
Route::get("/panelcodelab2", [CodingLabController::class, 'panelcodelab2']);
Route::get("/panelcodelab3", [CodingLabController::class, 'panelcodelab3']);

Route::get("/codinglab/ejercicio1", [CodingLabController::class, 'ejercicio1']);
Route::get("/codinglab/ejercicio2", [CodingLabController::class, 'ejercicio2']);
Route::get("/Codinglab/working", WorkingComponent::class)->name('codinglab.working');
Route::get("/codinglab/textclipboard",Textclipboard::class)->name('codinglab.textclipboard');




/*--- Bluuweb ----*/

Route::get("/bluuweb", [BluuwebController::class, 'bluuweb']);

Route::get("/bluuweb/ejercicio1", [BluuwebController::class, 'ejercicio1']);
Route::get("/bluuweb/ejercicio2", [BluuwebController::class, 'ejercicio2']);

/*--- AlexCG ----*/

Route::get("/alexCG", [AlexCGController::class, 'alexCG']);


/*---- varios ---*/
Route::get('/varios',[VariosController::class, 'varios'])->name('varios.index');

Route::get("/varios/ejercicio1", [VariosController::class, 'ejercicio1']);
Route::get("/varios/ejercicio2", [VariosController::class, 'ejercicio2']);
Route::get("/varios/ejercicio3", [VariosController::class, 'ejercicio3']);
Route::get("/varios/ejercicio4", [VariosController::class, 'ejercicio4']);
Route::get("/varios/ejercicio5", [VariosController::class, 'ejercicio5']);
Route::get("/varios/ejercicio6", [VariosController::class, 'ejercicio6']);
Route::get("/varios/ejercicio7", [VariosController::class, 'ejercicio7'])->name('cliente_path');
Route::get("/varios/trading1",CalculadotaTrading1::class)->name("varios.trading");
Route::get("/varios/ventas",VentaComponet::class)->name('varios.venta');
Route::get("/varios/filtergalery", FilterGaleryComponet::class)->name('varios.filtergalery'); 

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


/*--------Pacticas de javascript todo -------*/

Route::get('/javascript/home',HomeComponent::class)->name('javascript.home');

