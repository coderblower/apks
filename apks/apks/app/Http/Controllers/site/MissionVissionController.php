<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\MissionVission;
use Illuminate\Http\Request;

class MissionVissionController extends Controller
{
    //

    public function index(){
        $getData = MissionVission::first();
        return view('mission_vision', compact('getData'));
    }
}
