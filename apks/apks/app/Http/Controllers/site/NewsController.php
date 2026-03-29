<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function index(){
        $newsData = News::orderBy('created_at','DESC')->where('status',1)->paginate(15);
        return view('news', compact('newsData'));
    }
}
