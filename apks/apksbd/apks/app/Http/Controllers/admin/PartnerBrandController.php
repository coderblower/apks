<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerBrand;
use Illuminate\Http\Request;

class PartnerBrandController extends Controller
{
    //
    public function index(){
        $brands = PartnerBrand::orderBy('created_at','DESC')->paginate(15);
        return view('admin.pages.partner.index', compact('brands'));
    }
    public function store(Request $request){
       
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $extension = $request->image->getClientOriginalExtension();
        $imageName = 'brand_'.date('ydms').'.'.$extension;
        // $image_path = public_path('uploads/properties/'.$properties_id->property_thumbnail);
        // if (file_exists($image_path)) {
        //     unlink($image_path);
        // }
        $add = PartnerBrand::create([
            'brand_image' => $imageName,
        ]);
        if($add){
            $request->image->move(public_path('uploads/brands/'), $imageName);
            return back()->with('success', 'Brand Added');
        }else{
            return back()->with('error', 'Error');
        }
       
    }
    public function delete($id)
    {
        $gallery = PartnerBrand::find($id);
        if($gallery == null){
            return abort(404);
        }
        $image_path = public_path('uploads/brands/'.$gallery->brand_image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $gallery->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statusChange($id){
        $gallery = PartnerBrand::find($id);
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
