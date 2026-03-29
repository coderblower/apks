<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\ReportCategory;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AdminReportController extends Controller
{
    //


    public function index(){
        $getCats = ReportCategory::all();
        $reports = Report::all();
        return view('admin.pages.report.index', compact('getCats','reports'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'cat_name' => 'required',
            'report_file' => 'required',
        ]);
        try{
           
            $last_id = Report::insertGetId([
                'title' => $request->title,
                'report_category' => $request->cat_name,
                'created_at' => Carbon::now(),
            ]);
           
            if($request->report_file){
                $request->validate([
                    'report_file' => 'mimes:jpg,png,jpeg,pdf,docx'
                ]);
                $extension = $request->report_file->getClientOriginalExtension();
                $imageName = $last_id.'.'.$extension;
               
                $prp = Report::find($last_id);
                $prp->file_name = $imageName;
                $prp->save();
                $request->report_file->move(public_path('uploads/reports/'), $imageName);
                return back()->with('success', 'Report Added successfully');
            }
        }catch(Exception $e){
            return back()->with('error', 'Error Occured while adding Reports');
        }
    }

    public function delete($id)
    {
        $report = Report::find($id);
        if($report == null){
            return abort(404);
        }
        $image_path = public_path('uploads/reports/'.$report->file_name);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $report->delete();
         return back()->with('success', 'Report Deleted successfully');
    }
    public function status($id){
        $slider = Report::find($id);
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
        $cats = ReportCategory::all();
        return view('admin.pages.report.category', compact('cats'));
    }
    // public function Categoryedit($id)
    // {
    //     //
    //     $getReportCat = ReportCategory::find($id);
    //     if($getReportCat == null){
    //         return abort(404);
    //     }
    //     $cats = ReportCategory::all();
    //     return view('admin.pages.report.category', compact('getReportCat','cats'));
    // }

    public function categoryStore(Request $request){
        $request->validate([
            'cat_name' => 'required|string'
        ]);

        $slug = trim(strtolower(str_replace(' ','-', $request->cat_name)));
        $a = ReportCategory::create([
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
        $d = ReportCategory::find($id);
        if($d == null){
            return abort(404);
        }
        $d->delete();
        return back()->with('success', 'Deleted successfully');
    }
}
