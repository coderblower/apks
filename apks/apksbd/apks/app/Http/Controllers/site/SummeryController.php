<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Summery;
use Illuminate\Http\Request;

class SummeryController extends Controller
{
    //

    public function index(){
        $getSummery = Summery::first();
        return view('summary', compact('getSummery'));
    }
}
