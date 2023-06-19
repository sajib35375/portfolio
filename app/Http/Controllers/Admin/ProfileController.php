<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class ProfileController extends Controller
{
    public function profileView(){
        $user_data = User::find(Auth::id());
        return view('admin.profile.profile',compact('user_data'));
    }
    public function profileEdit(){
        $user_edit = User::find(Auth::id());
        return view('admin.profile.profile_edit',compact('user_edit'));
    }
    public function profileUpdate(Request $request){
        $user_update = User::find(Auth::id());
        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(280,280)->save('admin/images/profile/'.$unique_name);
            @unlink('admin/images/profile/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }
        $user_update->name = $request->name;
        $user_update->email = $request->email;
        $user_update->profile_photo_path = $unique_name;
        $user_update->update();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('profile.view')->with($notification);
    }
    public function changePassword(){
        return view('admin.profile.change_pass');
    }
    public function changePassUpdate(Request $request){
        $user =  Auth::user();
        if(Hash::check($request -> old_password, $user->password) == false){
            $notification = array(
                'message' => 'Password not Match',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }else{
            $user -> password = bcrypt($request->password);
            $user -> update();
            $notification = array(
                'message' => 'Password Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
