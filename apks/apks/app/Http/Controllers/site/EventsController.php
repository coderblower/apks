<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //

    public function index(){
        $events = Events::where('status',1)->orderBy('created_at','DESC')->paginate(9);
        return  view('event', compact('events'));
    }

    public function show($slug){
        $event = Events::where('event_slug', $slug)->first();
        if($event == null){
            return abort(404);
        }
        return view('event_details', compact('event'));
    }
}
