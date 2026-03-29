<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Volunteer;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use PDO;

class AdminCareerController extends Controller
{
    //

    public function index(){
        $getContent = Career::first();
        if($getContent == null){
            return abort(404);
           
        }
        return view('admin.pages.career.index',compact('getContent'));
    }

    public function store(Request $request, $id){
      
        try{
            $mission = Career::find($id);
            if($mission == null){
                return abort(404);
            }
              
              
               if($request->image){
                   $request->validate([
                       'image' => 'mimes:jpg,png,jpeg'
                   ]);
                   $mission->content = $request->content;
                   $extension = $request->image->getClientOriginalExtension();
                   $imageName = $mission->id.'.'.$extension;
                   $mission->recruit_file = $imageName;
                   $mission->created_at = Carbon::now();
                   $mission->save();
                   $image_path = public_path('uploads/recruite/'.$mission->recruit_file);
                   if (file_exists($image_path)) {
                       unlink($image_path);
                   }else{
                       $request->image->move(public_path('uploads/recruite/'), $imageName);
                   }
                  
                   return back()->with('success', 'Updated successfully');
               }else{
                   
                   $mission->content = $request->content;
                   $mission->save();
                   return back()->with('success', 'Updated successfully');
               }
               
           }catch(Exception $e){
               return back()->with('error', 'Error Occured while Updating');
           }
    }

    public function resumeRequest(){
        $resumes = Career::select('resume_collect','created_at')->where('created_at','!=',null)->where('resume_collect','!=', null)->get();
        // dd($resumes);
        return view('admin.pages.career.resume-request', compact('resumes'));
    }

    public function volunteerRequest(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'reference' => 'required',
            'msg' => 'required',
            'image' => 'required'
            
        ]);
        try{
            $create = Volunteer::insertGetId([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'reference' => $request->reference,
                'message' => $request->msg,
                'created_at' => Carbon::now(),
            ]);
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg,pdf,docx|max:1024'
                ]);
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $create.'.'.$extension;
                
                $prp = Volunteer::find($create);
                $prp->cv = $imageName;
                $prp->save();
                $request->image->move(public_path('uploads/cv/'), $imageName);
                return redirect(url('/#t'))->with('success', 'Request Send successfully');
            }
        }catch(Exception $e){
            return redirect(url('/#t'))->with('error', 'Something Wrong');

        }
    }

    public function volunteerShow(){
        $getVolonteers = Volunteer::orderBy('created_at', 'DESC')->get();
        return view('admin.pages.career.volunteer', compact('getVolonteers'));
    }
}
