<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BannerSlider;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class BannerSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = BannerSlider::all();
        return view('admin.pages.banner.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'heading' => 'required|string',
            'image' => 'required'
        ]);

        try{
            $last_id = BannerSlider::insertGetId([
                'sub_heading' => $request->sub_heading,
                'heading' => $request->heading,
                'created_at' => Carbon::now(),
            ]);
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $last_id.'.'.$extension;
                // $image_path = public_path('uploads/properties/'.$properties_id->property_thumbnail);
                // if (file_exists($image_path)) {
                //     unlink($image_path);
                // }
                $prp = BannerSlider::find($last_id);
                $prp->image = $imageName;
                $prp->save();
                $request->image->move(public_path('uploads/banner/sliders/'), $imageName);
                return back()->with('success', 'Slider Published successfully');
            }
        }catch(Exception $e){
            return back()->with('error', 'Error Occured while adding slider');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getSlider = BannerSlider::find($id);
        if($getSlider == null){
            return abort(404);
        }
        return view('admin.pages.banner.edit', compact('getSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'heading' => 'required|string',
        ]);

        try{
         $slider = BannerSlider::find($id);
         if($slider == null){
            return abort(404);
        }
           
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $slider->sub_heading = $request->sub_heading;
                $slider->heading = $request->heading;
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $slider->id.'.'.$extension;
                $slider->image = $imageName;
                $slider->save();
                $image_path = public_path('uploads/banner/sliders/'.$slider->image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }else{
                    $request->image->move(public_path('uploads/banner/sliders/'), $imageName);
                }
               
                return back()->with('success', 'Slider Updated successfully');
            }else{
                $slider->sub_heading = $request->sub_heading;
                $slider->heading = $request->heading;
                $slider->save();
                return back()->with('success', 'Slider Updated successfully');
            }
            
        }catch(Exception $e){
            return back()->with('error', 'Error Occured while Updating');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find_blog = BannerSlider::find($id);
        if($find_blog == null){
            return abort(404);
        }
        $image_path = public_path('uploads/banner/sliders/'.$find_blog->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $find_blog->delete();
         return back()->with('success', 'Slider Deleted successfully');
    }

    public function changeStatus($id){
        $slider = BannerSlider::find($id);
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
}
