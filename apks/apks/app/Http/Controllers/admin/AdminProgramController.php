<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Programm;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programs = Programm::all();
        return view('admin.pages.programme.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.pages.programme.create');
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
            $last_id = Programm::insertGetId([
                'program_title' => $request->title,
                'program_slug' => $slug,
                'program_description' => $request->content,
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
                $prp = Programm::find($last_id);
                $prp->program_logo = $imageName;
                $prp->save();
                $request->image->move(public_path('uploads/programmes/'), $imageName);
                return back()->with('success', 'Programme Published successfully');
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

        $program = Programm::find($id);
        if($program == null){
            return abort(404);
        }
        return view('admin.pages.programme.edit', compact('program'));
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
         $program = Programm::find($id);
         if($program == null){
            return abort(404);
        }
         $slug = trim(strtolower(str_replace(' ','-', $request->title)));
           
           
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $program->program_title = $request->title;
                $program->program_slug = $slug;
                $program->program_description = $request->content;
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $program->id.'.'.$extension;
                $program->program_logo = $imageName;
                $program->save();
                $image_path = public_path('uploads/programmes/'.$program->program_logo);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }else{
                    $request->image->move(public_path('uploads/programmes/'), $imageName);
                }
               
                return back()->with('success', 'Programme Updated successfully');
            }else{
                $program->program_title = $request->title;
                $program->program_slug = $slug;
                $program->program_description = $request->content;
                $program->save();
                return back()->with('success', 'Programme Updated successfully');
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
        $find_blog = Programm::find($id);
        if($find_blog == null){
            return abort(404);
        }
        $image_path = public_path('uploads/programmes/'.$find_blog->program_logo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $find_blog->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statuChange($id){
        $program = Programm::find($id);
        if($program == null){
            return abort(404);
        }
        if($program->status == 1){
            $program->status = 0;
            $program->save();
            return back()->with('success','Status Change successfully');
        }else{
            $program->status = 1;
            $program->save();
            return back()->with('success','Status Change successfully');
        }
    }
}
