<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function ShowCarDetails($id=null){
        //if ide has some value than it we find the id else it will fetch all data from database
        $cars = $id?Car::find($id):Car::all();
        return $cars;
    }
    public function ShowCarDetailsbyname($Name = null){
        $car = $Name?DB::table('cars')->where('Name',$Name)->get():Car::all();
        return $car;
    }
    public function InsertCarDetails(Request $request){
        Car::insert([
            'Name' => $request->Name,
            'BodyStyle'=>$request->BodyStyle,
            'Color'=>$request->Color,
            'Manufacturer'=>$request->Manufacturer,
            'Price'=>$request->Price,

        ]);
        return ["Record"=>"Record Inserted Successfuly"];
    }
    public function UpdateCarDetails(Request $request){
        $car = Car::find($request->id);
        $car->Name = $request->Name;
        $car->BodyStyle = $request->BodyStyle;
        $car->Color = $request->Color;
        $car->Manufacturer = $request->Manufacturer;
        $car->Price = $request->Price;
        $res = $car->save();
        if($res){
            return ["Record"=>"Record Updated Successfuly"];
        }
        else{
            return ["Record"=>"Record is Not Updated"];
        }
    }
    public function DeleteCarDetails($id){
        $car = Car::find($id);
        $res = $car->delete();
        if($res){
            return ["Record"=>"Record Deleted Successfuly"];
        }
        else{
            return ["Record"=>"Record is Not Deleted"];
        }

    }
}
