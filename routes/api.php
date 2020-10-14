<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/employee/role', [EmployeeController::class,'list_role']);

Route::post('/employee/create', [EmployeeController::class,'create']);

Route::get('/employee/list', [EmployeeController::class,'list']);

Route::get('/employee/get/{id}', [EmployeeController::class,'get']);

Route::put('/employee/update/{id}', [EmployeeController::class,'update']);

Route::delete('/employee/delete/{id}', [EmployeeController::class,'delete']);




 
 