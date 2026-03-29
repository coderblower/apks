<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    //

    public function index(){
        $videos = VideoGallery::where('status',1)->orderBy('created_at','DESC')->paginate(15);
        return view('video', compact('videos'));
    }
}
