<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    //
    public function index(){
        $photos = PhotoGallery::where('status', 1)->paginate(12);
        return view('gallery', compact('photos'));
    }
}
