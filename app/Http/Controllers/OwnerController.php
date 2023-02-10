<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
   public function InsertOwnerDetails(Request $request){
    $owner = Owner::create([
        'name' => $request->name,
        'contactno' => $request->contactno,
    ]);
    if($owner){
        return ["Record"=>"Owner Inserted Successfully"];
    }else{
        return ["Record"=>"Owner is Not Inserted"];
    }


}
}
