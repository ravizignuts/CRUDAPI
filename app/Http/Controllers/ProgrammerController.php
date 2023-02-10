<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    public function InsertProgrammer(Request $request)
    {
        $project = Programmer::create([
            'name' => $request->name,
        ]);
        if ($project) {
            return ["Result" => "Programmer Inserted Successfully"];
        } else {
            return ["Result" => "Programmer is Not Inserted"];
        }
    }
    public function ShowClient($id){
        $client = Programmer::findOrFail($id)->client;
        return $client;
    }
    public function ShowProject($id){
        $project = Programmer::find($id)->project;
        return $project;
    }
}
