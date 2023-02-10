<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Programmer;
use App\Models\Project;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function InsertClient(Request $request)
    {
        $project = Project::find($request->project_id);
        $res = $project->client()->create([
            'name' => $request->name,
        ]);
        if ($res) {
            return ["Return" => "Client Inserted Successfuly"];
        } else {
            return ["Return" => "Client is not Inserted"];
        }
    }
    public function ShowProgrammer($id)
    {
        $client = Client::find($id)->project->programmer;
        return $client;
    }
}
