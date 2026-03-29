<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return view('admin.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.pages.blog.create');
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
            'image' => 'required',
            'article' => 'required',
        ]);
        try{
            // $slug = trim(strtolower(str_replace(' ','-', $request->title)));
            $last_id = Blog::insertGetId([
                'title' => $request->title,
                'slug' => $this->slugify($request->title),
                'article' => $request->article,
                'author' => Auth::user()->name,
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
                $prp = Blog::find($last_id);
                $prp->thumbnail = $imageName;
                $prp->save();
                $request->image->move(public_path('uploads/blog/thumbnails/'), $imageName);
                return back()->with('success', 'Blog Published successfully');
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
        $blog = Blog::find($id);
        if($blog == null){
            return abort(404);
        }
        return view('admin.pages.blog.edit', compact('blog'));
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
            'title' => 'required',
            'article' => 'required',
        ]);

        try{
         $blog = Blog::find($id);
            if($blog == null){
                return abort(404);
            }
         
            if($request->image){
                $request->validate([
                    'image' => 'mimes:jpg,png,jpeg'
                ]);
                $blog->title = $request->title;
                $blog->slug = $this->slugify($request->title);
                $blog->article = $request->article;
                $extension = $request->image->getClientOriginalExtension();
                $imageName = $blog->id.'.'.$extension;
                $blog->thumbnail = $imageName;
                $blog->save();
                $image_path = public_path('uploads/blog/thumbnails/'.$blog->thumbnail);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }else{
                    $request->image->move(public_path('uploads/blog/thumbnails/'), $imageName);
                }
               
                return back()->with('success', 'Blog Updated successfully');
            }else{
                $blog->title = $request->title;
                $blog->slug = $this->slugify($request->title);
                $blog->article = $request->article;
                $blog->save();
                return back()->with('success', 'Blog Updated successfully');
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
        $find_blog = Blog::find($id);
        if($find_blog == null){
            return abort(404);
        }
        $image_path = public_path('uploads/blog/thumbnails/'.$find_blog->thumbnail);
        if (file_exists($image_path)) {
            unlink($image_path);
        }else{
            // $request->thumbnail->move(public_path('uploads/blog/thumbnails/'), $imageName);
        }
        $find_blog->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statuChange($id){
        $blog = Blog::find($id);
        if($blog == null){
            return abort(404);
        }
        if($blog->status == 1){
            $blog->status = 0;
            $blog->save();
            return back()->with('success','Status Change successfully');
        }else{
            $blog->status = 1;
            $blog->save();
            return back()->with('success','Status Change successfully');
        }
    }

    // Slug Generator Method
    public static function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
