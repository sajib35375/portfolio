<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exp;
use Illuminate\Http\Request;
use Image;

class ExpController extends Controller
{
    public function expView(){
        $data = Exp::find(1);
        return view('admin.experience.exp',compact('data'));
    }
    public function UpdateExpView(){
        $edit_data = Exp::find(1);
        return view('admin.experience.update_exp',compact('edit_data'));
    }
    public function UpdateExpStore(Request $request){
        $update_exp = Exp::find(1);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(960,760)->save('uploads/experience/'.$unique_name);
            @unlink('uploads/experience/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_exp->title = $request->title;
        $update_exp->short_text = $request->short_text;
        $update_exp->quote = $request->quote;
        $update_exp->video = $request->video;
        $update_exp->photo = $unique_name;
        $update_exp->update();
        $notification = array(
            'message' => 'Experience Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('exp.view')->with($notification);

    }
}
