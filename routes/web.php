<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\OwnerController;

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

Route::get('insert',function(){
    // $car = Car::insert([
    //             ["Name"=>"Verna","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //             ["Name"=>"Swifti20","BodyStyle"=>"Sport","Color"=>"White","Manufacturer"=>"MarutiSuzuki","Price"=>"900000"],
    //             ["Name"=>"Swifti10","BodyStyle"=>"Sport","Color"=>"White","Manufacturer"=>"MarutiSuzuki","Price"=>"800000"],
    //             ["Name"=>"Thar","BodyStyle"=>"Monster","Color"=>"Black","Manufacturer"=>"Mahindra","Price"=>"1500000"],
    //             ["Name"=>"VernaA","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //             ["Name"=>"VernaB","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    // ]);
    // return $car;

});
