<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class apiProjectController extends Controller
{
    public function index(){

        $projects = Project::with('technologies')->paginate(10);
        // $projects = Project::all();
        return response()->json(
            [
                'status'=> true,
                'result'=> $projects,
            ]
        );
    }

    public function show(string $slug){

        $project = Project::where('slug', $slug)->first();
        return response()->json($project);
    }
}
