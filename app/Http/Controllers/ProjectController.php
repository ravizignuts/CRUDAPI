<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function InsertProject(Request $request)
    {
        $programmer = Programmer::find($request->programmer_id);
        $res=$programmer->project()->create([
            'title' => $request->title,
        ]);

        if ($res) {
            return ["Result" => "Programmer Inserted Successfully"];
        } else {
            return ["Result" => "Programmer is Not Inserted"];
        }
    }
    public function ShowProgrammer($id){
        $project = Project::find($id)->programmer;
        return $project;
    }
    public function ShowClient($id){
        $client = Project::find($id)->client;
        return $client;
    }


}
