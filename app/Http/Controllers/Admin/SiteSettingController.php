<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Image;

class SiteSettingController extends Controller
{
    public function siteSetting(){
        $setting = SiteSetting::find(1);
        return view('admin.site_setting.site_setting',compact('setting'));
    }
    public function siteSettingUpdate(Request $request){
        $update_setting = SiteSetting::find(1);
        if ($request->hasFile('logo')){
            $img = $request->file('logo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(213,37)->save('admin/images/logo/'.$unique_name);
            @unlink('admin/images/logo/'.$request->old_logo);
        }else{
            $unique_name = $request->old_logo;
        }

        $update_setting->logo = $unique_name;
        $update_setting->footer_text = $request->footer_text;
        $update_setting->address = $request->address;
        $update_setting->phone = $request->phone;
        $update_setting->email = $request->email;
        $update_setting->update();

        $notification = array(
            'message' => 'Site Setting Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
