<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(CarController::class)->group(function(){
    Route::get('show/{id?}','ShowCarDetails');//make id as optional parameter
    Route::get('showname/{Name?}','ShowCarDetailsbyname');
    Route::post('insert','InsertCarDetails');
    Route::put('update','UpdateCarDetails');
    Route::delete('delete/{id}','DeleteCarDetails');
});
