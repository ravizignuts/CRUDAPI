<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
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
        $owner = Owner::find($request->owner_id);
        // $car = Car::insert([
        //     'Name' => $request->Name,
        //     'BodyStyle'=>$request->BodyStyle,
        //     'Color'=>$request->Color,
        //     'Manufacturer'=>$request->Manufacturer,
        //     'Price'=>$request->Price,

        // ]);
        $car = new Car();
        $car->Name = $request->Name;
        $car->BodyStyle=$request->BodyStyle;
        $car->Color=$request->Color;
        $car->Manufacturer=$request->Manufacturer;
        $car->Price=$request->Price;
        $res = $owner->car()->save($car);
        // $car->store()->attach($owner->id);
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
    public function ShowCarDetailsbyOwnerid($id){
        $car = Owner::findorFail($id)->car;
        return $car;
    }
    public function ShowOwnerDetailsbyCarid($id){
        $owner = Car::find($id)->owner;
        return $owner;
    }
}
