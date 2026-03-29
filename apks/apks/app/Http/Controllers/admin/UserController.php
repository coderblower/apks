<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function profile(){
        return view('admin.pages.profile.index');
    }

    public function profileUpdate(Request $request, $id){
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|max:255',
        ]);


        $user = User::find($id);
        if($user == null){
            return abort(404);
        }
        if($request->current_password){
            if(Hash::check($request->current_password, $user->password)){
                if($request->new_password != $request->con_password){
                    return back()->with('both_pass_not_macth','Both Password not matching');
                }else{
                    $user->password = Hash::make($request->new_password);
                    $user->save();

                    return back()->with('pass_changed','Password has been changed');
                }
            }else{
                return back()->with('current_password_not_match','Your Current Password not matching');
            }
    
        }else{

            // dd($user);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return back()->with('updated','Save Changed');
        }
    }
}
