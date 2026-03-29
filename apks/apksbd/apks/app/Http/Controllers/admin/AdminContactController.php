<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    //

    public function index(){
        $getMessage = ContactMessage::orderBy('id', 'DESC')->get();
        return view('admin.pages.contact.index', compact('getMessage'));
    }
}
