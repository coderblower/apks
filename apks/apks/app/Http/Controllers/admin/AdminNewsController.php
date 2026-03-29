<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allnews = News::orderBy('created_at','DESC')->paginate(15);
        return view('admin.pages.gallery.news.index', compact('allnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required',
            'publishing_date' => 'required',
            'newspaper' => 'required',
            'portal_link' => 'required'
        ]);
        $add = News::create([
            'publishing_date' => $request->publishing_date,
            'news_url' => $request->portal_link,
            'name_of_newspaper' => $request->newspaper,
            'title' => $request->title
        ]);

        if($add){
            return back()->with('success','News addedd');
        }else{
            return back()->with('error','Error');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $gallery = News::find($id);
        if($gallery == null){
            return abort(404);
        }
        // $image_path = public_path('uploads/gallery/photo/'.$gallery->photo);
        // if (file_exists($image_path)) {
        //     unlink($image_path);
        // }else{
        //     // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        // }
        $gallery->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statusChange($id){
        $gallery = News::find($id);
        if($gallery == null){
            return abort(404);
        }
        if($gallery->status == 1){
            $gallery->status = 0;
            $gallery->save();
            return back()->with('success','Status Change successfully');
        }else{
            $gallery->status = 1;
            $gallery->save();
            return back()->with('success','Status Change successfully');
        }
    }
}
