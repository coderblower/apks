<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function index(){
        $about = AboutPage::first();
        return view('about', compact('about'));
    }
}
