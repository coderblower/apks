<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Programm;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //

    public function index(){
        $getProgrammes = Programm::where('status', 1)->orderBy('created_at','DESC')->paginate(9);
        return view('program', compact('getProgrammes'));
    }
    public function show($slug){
        $getProgramm = Programm::where('program_slug', $slug)->first();
        if($getProgramm == null){
            return abort(404);
        }
        return view('program_details', compact('getProgramm'));
    }
}
