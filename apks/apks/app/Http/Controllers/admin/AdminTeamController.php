<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AdminTeamController extends Controller
{
    //

    public function index(){
        $teams = Team::all();
        return view('admin.pages.team.index', compact('teams'));
    }
    public function create(){
        return view('admin.pages.team.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);
        try{
            $last_id = Team::insertGetId([
                'member_name' => $request->name,
                'member_designation' => $request->designation,
                'member_board_access' => $request->type,
                'member_facebook' => $request->fb,
                'member_twitter' => $request->twitter,
                'member_instagram' => $request->instagram,
                'created_at' => Carbon::now(),
            ]);
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $last_id.'.'.$extension;
               
                $prp = Team::find($last_id);
                $prp->member_photo = $imageName;
                $prp->save();
                $request->image->move(public_path('uploads/team/'), $imageName);
                return back()->with('success', 'Member Added successfully');
            }
        }catch(Exception $e){
            return back()->with('error', 'Error Occured while adding slider');
        }

    }
    public function edit($id){
        $member = Team::find($id);
        if($member == null){
            return abort(404);
        }
        return view('admin.pages.team.edit', compact('member'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required',
            'type' => 'required'
        ]);

        try{
         $member = Team::find($id);
         if($member == null){
            return abort(404);
        }
           
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $member->member_name = $request->name;
                $member->member_designation = $request->designation;
                $member->member_board_access = $request->type;
                $member->member_facebook = $request->fb;
                $member->member_twitter = $request->twitter;
                $member->member_instagram = $request->instagram;
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $member->id.'.'.$extension;
                $member->member_photo = $imageName;
                $member->save();
                $image_path = public_path('uploads/team/'.$member->member_photo);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }else{
                    $request->image->move(public_path('uploads/team/'), $imageName);
                }
               
                return back()->with('success', 'Member Updated successfully');
            }else{
                $member->member_name = $request->name;
                $member->member_designation = $request->designation;
                $member->member_board_access = $request->type;
                $member->member_facebook = $request->fb;
                $member->member_twitter = $request->twitter;
                $member->member_instagram = $request->instagram;
                $member->save();
                return back()->with('success', 'Member Updated successfully');
            }
            
        }catch(Exception $e){
            return back()->with('error', 'Error Occured while Updating');
        }
    }
    public function destroy($id)
    {
        $find_team = Team::find($id);
        if($find_team == null){
            return abort(404);
        }
        $image_path = public_path('uploads/team/'.$find_team->member_photo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $find_team->delete();
         return back()->with('success', 'Member Deleted successfully');
    }

    public function statuChange($id){
        $team = Team::find($id);
        if($team == null){
            return abort(404);
        }
        if($team->status == 1){
            $team->status = 0;
            $team->save();
            return back()->with('success','Status Change successfully');
        }else{
            $team->status = 1;
            $team->save();
            return back()->with('success','Status Change successfully');
        }
    }
}
