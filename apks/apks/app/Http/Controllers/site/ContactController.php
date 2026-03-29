<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index(){

        $contactData =  SiteInfo::first();
        return view('contact', compact('contactData'));
    }

    public function contactMessage(Request $request){
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|string',
            'phone' => 'required|string',
            'message' => 'required'
        ]);

        $a = ContactMessage::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if($a){
            return back()->with('success', 'Message has been sended');
        }else{
            return back()->with('error', 'Something Happned Wrong');

        }
    }
}
