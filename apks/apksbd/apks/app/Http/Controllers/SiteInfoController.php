<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Exception;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    //

    public function index(){
        $infos = SiteInfo::first();
        return view('admin.pages.setting.index', compact('infos'));
    }

    public function store(Request $request, $id){

        try{
            $mission = SiteInfo::find($id);
            if($mission == null){
                return abort(404);
            }
              
               if($request->image){
                   $request->validate([
                       'image' => 'mimes:jpg,png,jpeg'
                   ]);
                   $mission->site_description = $request->description;
                   $mission->site_keywords = $request->keywords;
                   $mission->phone = $request->phone;
                   $mission->second_phone = $request->second_phone;
                   $mission->email = $request->email;
                   $mission->second_email = $request->second_email;
                   $mission->opening_hrs = $request->opening_hrs;
                   $mission->address = $request->address;
                   $mission->address_map = $request->address_map;
                   $mission->social_facebook = $request->facebook;
                   $mission->social_twitter = $request->twitter;
                   $mission->social_instagram = $request->instagram;
                   $mission->social_youtube = $request->youtube;
                   $mission->social_behance = $request->behance;
                   $extension = $request->image->getClientOriginalExtension();
                   $imageName = $mission->id.'.'.$extension;
                   $mission->site_logo = $imageName;
                   $mission->save();
                   $image_path = public_path('uploads/logo/'.$mission->site_logo);
                   if (file_exists($image_path)) {
                       unlink($image_path);
                   }else{
                       $request->image->move(public_path('uploads/logo/'), $imageName);
                   }
                  
                   return back()->with('success', 'Updated successfully');
               }else{
                $mission->site_description = $request->description;
                $mission->site_keywords = $request->keywords;
                $mission->phone = $request->phone;
                $mission->second_phone = $request->second_phone;
                $mission->email = $request->email;
                $mission->second_email = $request->second_email;
                $mission->opening_hrs = $request->opening_hrs;
                $mission->address = $request->address;
                $mission->address_map = $request->address_map;
                $mission->social_facebook = $request->facebook;
                $mission->social_twitter = $request->twitter;
                $mission->social_instagram = $request->instagram;
                $mission->social_youtube = $request->youtube;
                $mission->social_behance = $request->behance;
                   $mission->save();
                   return back()->with('success', 'Updated successfully');
               }
               
           }catch(Exception $e){
               return back()->with('error', 'Error Occured while Updating');
           }
    }
}
