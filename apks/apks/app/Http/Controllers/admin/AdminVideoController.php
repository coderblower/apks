<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class AdminVideoController extends Controller
{
    //
    public function index(){
        $videos = VideoGallery::orderBy('created_at','DESC')->paginate(15);
        return view('admin.pages.gallery.video.index', compact('videos'));
    }
    public function store(Request $request){
       
        $request->validate([
            'video_link' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $extension = $request->image->getClientOriginalExtension();
        $imageName = 'video_gallery_'.date('ydms').'.'.$extension;
        // $image_path = public_path('uploads/properties/'.$properties_id->property_thumbnail);
        // if (file_exists($image_path)) {
        //     unlink($image_path);
        // }
        $add = VideoGallery::create([
            'video' => $request->video_link,
            'photo' => $imageName,
        ]);
        if($add){
            $request->image->move(public_path('uploads/gallery/video/'), $imageName);
            return back()->with('success', 'Video Added');
        }else{
            return back()->with('error', 'Error');
        }
       
    }
    public function delete($id)
    {
        $gallery = VideoGallery::find($id);
        if($gallery == null){
            return abort(404);
        }
        $image_path = public_path('uploads/gallery/video/'.$gallery->photo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $gallery->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statusChange($id){
        $gallery = VideoGallery::find($id);
        if($gallery == null){
            return abort(404);
        }
        if($gallery->status == 1){
            $gallery->status = 0;
            $gallery->save();
            return back()->with('success','Status Change successfully');
        }else{
            $gallery->status = 1;
            $gallery->save();
            return back()->with('success','Status Change successfully');
        }
    }
}
