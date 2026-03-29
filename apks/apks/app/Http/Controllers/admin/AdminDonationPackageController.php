<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DonationPackage;
use Illuminate\Http\Request;

class AdminDonationPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = DonationPackage::all();
        return view('admin.pages.donate.index', compact('packages'));
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
            'package' => 'required'
        ]);

        $insert = DonationPackage::create([
            'packages' => $request->package,
        ]);
        if($insert){
            return back()->with('success', 'Package Added');
        }else{

            return back()->with('error', 'Error Occured');
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
        $getPackage = DonationPackage::find($id);
        if($getPackage == null){
            return abort(404);
        }
        $packages = DonationPackage::all();
        return view('admin.pages.donate.index', compact('getPackage','packages'));
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
        $find = DonationPackage::find($id);
        if($find == null){
            return abort(404);
        }
        $find->packages = $request->package;
        $save = $find->save();
        if($save){
            return redirect(route('admin.package.index'))->with('success','Updated');
        }else{
            return redirect(route('admin.package.index'))->with('error','Error');
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
        $package = DonationPackage::find($id);
        if($package == null){
            return abort(404);
        }
        $package->delete();
         return back()->with('success', 'Deleted successfully');
    }

    public function statuChange($id){
        $package = DonationPackage::find($id);
        if($package == null){
            return abort(404);
        }
        if($package->status == 1){
            $package->status = 0;
            $package->save();
            return back()->with('success','Status Change successfully');
        }else{
            $package->status = 1;
            $package->save();
            return back()->with('success','Status Change successfully');
        }
    }
}
