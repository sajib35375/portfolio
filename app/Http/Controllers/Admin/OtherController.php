<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Network;
use Illuminate\Http\Request;
use Image;

class OtherController extends Controller
{
    public function GlobalNet(){
        $edit_net = Network::find(1);
        return view('admin.global_net.network',compact('edit_net'));
    }
    public function GlobalNetUpdate(Request $request){
        $update_net = Network::find(1);
        if ($request->hasFile('map')){
            $img = $request->file('map');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(648,381)->save('admin/images/map/'.$unique_name);
            @unlink('admin/images/map/'.$request->old_map);
        }else{
            $unique_name = $request->old_map;
        }
        $update_net->title = $request->title;
        $update_net->short_text = $request->short_text;
        $update_net->map = $unique_name;
        $update_net->update();
        $notification = array(
            'message' => 'Global Network Content Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
