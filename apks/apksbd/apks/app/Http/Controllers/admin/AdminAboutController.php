<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use Exception;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    //

    public function index(){
        $getContent = AboutPage::first();
        if($getContent == null){
            return abort(404);
        }
        return view('admin.pages.about.index', compact('getContent'));
    }

    public function store(Request $request, $id){
      
        $request->validate([
            'article' => 'required' 
        ]);

        try{
            $slider = AboutPage::find($id);
            if($slider == null){
                return abort(404);
            }
              
               if($request->image){
                   $request->validate([
                       'image' => 'mimes:jpg,png,jpeg'
                   ]);
                   $slider->page_heading = $request->heading;
                   $slider->about_content = $request->article;
                   $extension = $request->image->getClientOriginalExtension();
                   $imageName = $slider->id.'.'.$extension;
                   $slider->about_image = $imageName;
                   $slider->save();
                   $image_path = public_path('uploads/about/'.$slider->about_image);
                   if (file_exists($image_path)) {
                       unlink($image_path);
                   }else{
                       $request->image->move(public_path('uploads/about/'), $imageName);
                   }
                  
                   return back()->with('success', 'Updated successfully');
               }else{
                   $slider->page_heading = $request->heading;
                   $slider->about_content = $request->article;
                   $slider->save();
                   return back()->with('success', 'Updated successfully');
               }
               
           }catch(Exception $e){
               return back()->with('error', 'Error Occured while Updating');
           }
    }
}
