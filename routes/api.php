<?php

use App\Models\Programmer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProgrammerController;

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
//Hello Developer This is API For Basic Crud Operation.

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(CarController::class)->prefix('car')->group(function(){
    Route::get('show/{id?}','ShowCarDetails');//make id as optional parameter
    Route::get('showname/{Name?}','ShowCarDetailsbyname');
    Route::post('insert','InsertCarDetails');
    Route::put('update','UpdateCarDetails');
    Route::delete('delete/{id}','DeleteCarDetails');
    Route::get('showcar/{id}','ShowCarDetailsbyOwnerid');

});

Route::controller(OwnerController::class)->prefix('owner')->group(function(){
    Route::post('insert','InsertOwnerDetails');
    Route::get('showowner/{id}','ShowOwnerDetailsbyCarid');
});

Route::controller(ProgrammerController::class)->prefix('programmer')->group(function(){
    Route::post('insert','InsertProgrammer');
    Route::get('showclient/{id}','ShowClient');
    Route::get('showproject/{id}','ShowProject');

});


Route::controller(ProjectController::class)->prefix('project')->group(function(){
    Route::post('insert','InsertProject');
    Route::get('showprogrammer/{id}','ShowProgrammer');
    Route::get('showclient/{id}','ShowClient');
});


Route::controller(ClientController::class)->prefix('client')->group(function(){
    Route::post('insert','InsertClient');
    Route::get('showprogrammer/{id}','ShowProgrammer');
});
