<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index(){
        $blogs = Blog::where('status',1)->orderBy('created_at', 'DESC')->paginate(9);
        return view('blog-grid', compact('blogs'));
    }

    public function show($slug){
        $blog =  Blog::where('slug', $slug)->first();
        if($blog == null){
            return abort(404);
        }
        return view('blog-single', compact('blog'));
    }
}
