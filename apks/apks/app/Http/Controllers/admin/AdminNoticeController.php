<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\NoticeCategory;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class AdminNoticeController extends Controller
{
    //
    public function index(){
        $getCats = NoticeCategory::all();
        $notices = Notice::all();
        return view('admin.pages.notice.index', compact('getCats','notices'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'cat_name' => 'required',
            'notice_file' => 'required',
        ]);
        try{
           
            $last_id = Notice::insertGetId([
                'title' => $request->title,
                'notice_category' => $request->cat_name,
                'created_at' => Carbon::now(),
            ]);
           
            if($request->notice_file){
                $request->validate([
                    'notice_file' => 'mimes:jpg,png,jpeg,pdf,docx'
                ]);
                $extension = $request->notice_file->getClientOriginalExtension();
                $imageName = $last_id.'.'.$extension;
               
                $prp = Notice::find($last_id);
                $prp->file_name = $imageName;
                $prp->save();
                $request->notice_file->move(public_path('uploads/notices/'), $imageName);
                return back()->with('success', 'Notice Added successfully');
            }
        }catch(Exception $e){
            return back()->with('error', 'Error Occured while adding Reports');
        }
    }

    public function delete($id)
    {
        $report = Notice::find($id);
        if($report == null){
            return abort(404);
        }
        $image_path = public_path('uploads/notices/'.$report->file_name);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $report->delete();
         return back()->with('success', 'Report Deleted successfully');
    }
    public function status($id){
        $slider = Notice::find($id);
        if($slider == null){
            return abort(404);
        }
        if($slider->status == 1){
            $slider->status = 0;
            $slider->save();
            return back()->with('success','Status Change successfully');
        }else{
            $slider->status = 1;
            $slider->save();
            return back()->with('success','Status Change successfully');
        }

    }

    public function categoryPage(){
        $cats = NoticeCategory::all();
        return view('admin.pages.notice.category', compact('cats'));
    }
    // public function Categoryedit($id)
    // {
    //     //
    //     $getReportCat = NoticeCategory::find($id);
    //     if($getReportCat == null){
    //         return abort(404);
    //     }
    //     $cats = NoticeCategory::all();
    //     return view('admin.pages.report.category', compact('getReportCat','cats'));
    // }

    public function categoryStore(Request $request){
        $request->validate([
            'cat_name' => 'required|string'
        ]);

        $slug = trim(strtolower(str_replace(' ','-', $request->cat_name)));
        $a = NoticeCategory::create([
            'cat_name' => $request->cat_name,
            'cat_slug' => $slug,
        ]);
        if($a){
            return back()->with('success','Added success');
        }else{
            return back()->with('error','Error');
        }
    }

    public function categoryDelete($id){
        $d = NoticeCategory::find($id);
        if($d == null){
            return abort(404);
        }
        $d->delete();
        return back()->with('success', 'Deleted successfully');
    }
}
