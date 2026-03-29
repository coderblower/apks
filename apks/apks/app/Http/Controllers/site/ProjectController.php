<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        $getProjects = Project::with('category')
            ->where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('project', compact('getProjects'));
    }

    public function categories()
    {
        $categories = ProjectCategory::where('status', 1)
            ->whereHas('projects', function ($query) {
                $query->where('status', 1);
            })
            ->withCount(['projects' => function ($query) {
                $query->where('status', 1);
            }])
            ->orderBy('category_name')
            ->get();

        return view('project_categories', compact('categories'));
    }

    public function category($slug)
    {
        $category = ProjectCategory::where('category_slug', $slug)
            ->where('status', 1)
            ->first();

        if ($category == null) {
            return abort(404);
        }

        $getProjects = Project::with('category')
            ->where('status', 1)
            ->where('project_category_id', $category->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('project_category', compact('category', 'getProjects'));
    }

    public function show($slug){
        $project = Project::with('category')->where('project_slug', $slug)->first();
        if($project == null){
            return abort(404);
        }
        return view('project_details', compact('project'));
    }
}
