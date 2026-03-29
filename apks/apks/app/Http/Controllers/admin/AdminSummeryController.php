<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Summery;
use Exception;
use Illuminate\Http\Request;

class AdminSummeryController extends Controller
{
    //
    public function index(){
        $getContent = Summery::firstOrCreate([], [
            'page_heading' => 'Organization Summary',
            'sm_content' => organizationSummaryDefaultContent(),
        ]);
        return view('admin.pages.sm.index', compact('getContent'));
    }
    public function store(Request $request, $id){
      
        $request->validate([
            'article' => 'required' 
        ]);

        try{
            $mission = Summery::find($id);
            if($mission == null){
                return abort(404);
            }
              
               if($request->image){
                   $request->validate([
                       'image' => 'mimes:jpg,png,jpeg'
                   ]);
                   $mission->page_heading = $request->heading;
                   $mission->sm_content = $request->article;
                   $extension = $request->image->getClientOriginalExtension();
                   $imageName = $mission->id.'.'.$extension;
                   $mission->sm_image = $imageName;
                   $mission->save();
                   $image_path = public_path('uploads/sm/'.$mission->sm_image);
                   if (file_exists($image_path)) {
                       unlink($image_path);
                   }else{
                       $request->image->move(public_path('uploads/sm/'), $imageName);
                   }
                  
                   return back()->with('success', 'Updated successfully');
               }else{
                   $mission->page_heading = $request->heading;
                   $mission->sm_content = $request->article;
                   $mission->save();
                   return back()->with('success', 'Updated successfully');
               }
               
           }catch(Exception $e){
               return back()->with('error', 'Error Occured while Updating');
           }
    }
}
