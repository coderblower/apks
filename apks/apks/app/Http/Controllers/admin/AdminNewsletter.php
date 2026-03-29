<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterEmail;
use Illuminate\Http\Request;

class AdminNewsletter extends Controller
{
    //

    public function index(){
        $getEmails = NewsletterEmail::all();
        return view('admin.pages.newsletter.index',compact('getEmails'));
    }
}
