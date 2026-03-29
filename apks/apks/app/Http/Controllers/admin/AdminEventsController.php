<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class AdminEventsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Events::all();
        return view('admin.pages.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.pages.event.create');
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
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);
        try{
            $slug = trim(strtolower(str_replace(' ','-', $request->title)));
            $last_id = Events::insertGetId([
                'event_title' => $request->title,
                'event_slug' => $slug,
                'event_description' => $request->content,
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
                $prp = Events::find($last_id);
                $prp->event_logo = $imageName;
                $prp->save();
                $request->image->move(public_path('uploads/events/'), $imageName);
                return back()->with('success', 'Event Published successfully');
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

        $event = Events::find($id);
        if($event == null){
            return abort(404);
        }
        return view('admin.pages.event.edit', compact('event'));
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
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        try{
         $event = Events::find($id);
         if($event == null){
            return abort(404);
        }
         $slug = trim(strtolower(str_replace(' ','-', $request->title)));
           
           
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $event->event_title = $request->title;
                $event->event_slug = $slug;
                $event->event_description = $request->content;
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $event->id.'.'.$extension;
                $event->event_logo = $imageName;
                $event->save();
                $image_path = public_path('uploads/events/'.$event->event_logo);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }else{
                    $request->image->move(public_path('uploads/events/'), $imageName);
                }
               
                return back()->with('success', 'Programme Updated successfully');
            }else{
                $event->event_title = $request->title;
                $event->event_slug = $slug;
                $event->event_description = $request->content;
                $event->save();
                return back()->with('success', 'Event Updated successfully');
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
        $find_blog = Events::find($id);
        if($find_blog == null){
            return abort(404);
        }
        $image_path = public_path('uploads/events/'.$find_blog->event_logo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $find_blog->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statuChange($id){
        $event = Events::find($id);
        if($event == null){
            return abort(404);
        }
        if($event->status == 1){
            $event->status = 0;
            $event->save();
            return back()->with('success','Status Change successfully');
        }else{
            $event->status = 1;
            $event->save();
            return back()->with('success','Status Change successfully');
        }
    }
}
