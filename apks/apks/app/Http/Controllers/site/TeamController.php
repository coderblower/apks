<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //

    public function advisoryMember(){
        $getAdvisor = Team::where('member_board_access','advisor')->paginate(6);
        return view('advisory_board', compact('getAdvisor'));
    }
    public function executiveMember(){
        $getexecutor = Team::where('member_board_access','executive')->paginate(6);
        return view('executive_board', compact('getexecutor'));
    }
    public function officalMember(){
        $getofficials = Team::where('member_board_access','official')->paginate(6);
        return view('official', compact('getofficials'));
    }
}
