<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CounterSection;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CounterSectionController extends Controller
{
    //
    public function index(){
        $numbers = CounterSection::all();
        return view('admin.pages.counter.index', compact('numbers'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'number' => 'required',
        ]);
        $a = CounterSection::create([
            'counter_number' => $request->number,
            'title' => $request->title,
        ]);

        if($a){
            return back()->with('success', 'Added successfully');
        }else{
            return back()->with('error', 'Something Wrong');
        }
    }

    public function edit($id){
        $getCounter = CounterSection::find($id);
        if($getCounter == null){
            return abort(404);
        }
        $numbers = CounterSection::all();
        return view('admin.pages.counter.index', compact('getCounter','numbers'));
    }
    public function update(Request $request, $id)
    {
        //
        $find = CounterSection::find($id);
        if($find == null){
            return abort(404);
        }
        $find->title = $request->title;
        $find->counter_number = $request->number;
        $save = $find->save();
        if($save){
            return redirect(route('admin.counter'))->with('success','Updated');
        }else{
            return redirect(route('admin.counter'))->with('error','Error');
        }
    }

    public function delete($id){
        $package = CounterSection::find($id);
        if($package == null){
            return abort(404);
        }
        $package->delete();
         return back()->with('success', 'Deleted successfully');
    }
}
