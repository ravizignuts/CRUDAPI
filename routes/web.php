<?php

use App\Http\Controllers\CRUDController;
use App\Models\Car;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('insert',function(){
    // $cars = [
    //             ["Name"=>"Verna","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //             ["Name"=>"Swifti20","BodyStyle"=>"Sport","Color"=>"White","Manufacturer"=>"MarutiSuzuki","Price"=>"900000"],
    //             ["Name"=>"Swifti20","BodyStyle"=>"Sport","Color"=>"White","Manufacturer"=>"MarutiSuzuki","Price"=>"800000"],
    //             ["Name"=>"Thar","BodyStyle"=>"Monster","Color"=>"Black","Manufacturer"=>"Mahindra","Price"=>"1500000"],
    //             ["Name"=>"VernaA","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //             ["Name"=>"VernaB","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //         ];
    // $car = Car::insert([
    //             ["Name"=>"Verna","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //             ["Name"=>"Swifti20","BodyStyle"=>"Sport","Color"=>"White","Manufacturer"=>"MarutiSuzuki","Price"=>"900000"],
    //             ["Name"=>"Swifti20","BodyStyle"=>"Sport","Color"=>"White","Manufacturer"=>"MarutiSuzuki","Price"=>"800000"],
    //             ["Name"=>"Thar","BodyStyle"=>"Monster","Color"=>"Black","Manufacturer"=>"Mahindra","Price"=>"1500000"],
    //             ["Name"=>"VernaA","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    //             ["Name"=>"VernaB","BodyStyle"=>"Sedan","Color"=>"Black","Manufacturer"=>"Hundai","Price"=>"1000000"],
    // ]);
    // return $car;

});
