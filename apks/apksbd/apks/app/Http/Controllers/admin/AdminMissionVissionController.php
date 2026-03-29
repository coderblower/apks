<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MissionVission;
use Exception;
use Illuminate\Http\Request;

class AdminMissionVissionController extends Controller
{
    //

    public function index(){
        $getContent = MissionVission::first();
        if($getContent == null){
            return abort(404);
        }
        return view('admin.pages.mv.index', compact('getContent'));
    }

    public function store(Request $request, $id){
      
        $request->validate([
            'article' => 'required' 
        ]);

        try{
            $mission = MissionVission::find($id);
            if($mission == null){
                return abort(404);
            }
              
              
               if($request->image){
                   $request->validate([
                       'image' => 'mimes:jpg,png,jpeg'
                   ]);
                   $mission->page_heading = $request->heading;
                   $mission->mv_content = $request->article;
                   $extension = $request->image->getClientOriginalExtension();
                   $imageName = $mission->id.'.'.$extension;
                   $mission->mv_image = $imageName;
                   $mission->save();
                   $image_path = public_path('uploads/mv/'.$mission->mv_image);
                   if (file_exists($image_path)) {
                       unlink($image_path);
                   }else{
                       $request->image->move(public_path('uploads/mv/'), $imageName);
                   }
                  
                   return back()->with('success', 'Updated successfully');
               }else{
                   $mission->page_heading = $request->heading;
                   $mission->mv_content = $request->article;
                   $mission->save();
                   return back()->with('success', 'Updated successfully');
               }
               
           }catch(Exception $e){
               return back()->with('error', 'Error Occured while Updating');
           }
    }
}
