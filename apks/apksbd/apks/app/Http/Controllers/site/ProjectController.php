<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        $getProjects = Project::where('status', 1)->orderBy('created_at','DESC')->paginate(9);
        return view('project', compact('getProjects'));
    }

    public function show($slug){
        $project = Project::where('project_slug', $slug)->first();
        if($project == null){
            return abort(404);
        }
        return view('project_details', compact('project'));
    }
}
