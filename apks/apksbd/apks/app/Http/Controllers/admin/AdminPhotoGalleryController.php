<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class AdminPhotoGalleryController extends Controller
{
    //
    public function index(){
        $photos = PhotoGallery::orderBy('created_at','DESC')->paginate(15);
        return view('admin.pages.gallery.photo.index', compact('photos'));
    }

    public function store(Request $request){
       
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $extension = $request->image->getClientOriginalExtension();
        $imageName = 'photo_gallery_'.date('ydms').'.'.$extension;
        // $image_path = public_path('uploads/properties/'.$properties_id->property_thumbnail);
        // if (file_exists($image_path)) {
        //     unlink($image_path);
        // }
        $add = PhotoGallery::create([
            'photo' => $imageName,
        ]);
        if($add){
            $request->image->move(public_path('uploads/gallery/photo/'), $imageName);
            return back()->with('success', 'Photo Added');
        }else{
            return back()->with('error', 'Error');
        }
       
    }
    public function delete($id)
    {
        $gallery = PhotoGallery::find($id);
        if($gallery == null){
            return abort(404);
        }
        $image_path = public_path('uploads/gallery/photo/'.$gallery->photo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $gallery->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statusChange($id){
        $gallery = PhotoGallery::find($id);
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
