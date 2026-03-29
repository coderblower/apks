<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $categories = ProjectCategory::withCount('projects')->orderBy('category_name')->get();

        return view('admin.pages.project.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:project_categories,category_name',
            'description' => 'nullable|string',
        ]);

        try {
            ProjectCategory::create([
                'category_name' => $request->name,
                'category_slug' => Str::slug($request->name),
                'category_description' => $request->description,
                'status' => 1,
            ]);

            return back()->with('success', 'Category created successfully');
        } catch (Exception $e) {
            return back()->with('error', 'Error occurred while creating category');
        }
    }

    public function delete($id)
    {
        $category = ProjectCategory::find($id);
        if ($category == null) {
            return abort(404);
        }

        if ($category->projects()->exists()) {
            return back()->with('error', 'This category is assigned to projects and cannot be deleted');
        }

        $category->delete();

        return back()->with('success', 'Category deleted successfully');
    }
}
