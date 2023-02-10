<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;

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
Route::controller(CarController::class)->group(function(){
    Route::get('showcar/{id?}','ShowCarDetails');//make id as optional parameter
    Route::get('showcarname/{Name?}','ShowCarDetailsbyname');
    Route::post('insertcar','InsertCarDetails');
    Route::put('updatecar','UpdateCarDetails');
    Route::delete('deletecar/{id}','DeleteCarDetails');
    Route::get('showownercar/{id}','ShowCarDetailsbyOwnerid');
    Route::get('showcarowner/{id}','ShowOwnerDetailsbyCarid');
});

Route::controller(OwnerController::class)->group(function(){
    Route::post('insertowner','InsertOwnerDetails');

});
