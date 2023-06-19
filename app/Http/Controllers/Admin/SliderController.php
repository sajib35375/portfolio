<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function sliderView(){
        $all_slider = Slider::all();
        return view('admin.slider.slider',compact('all_slider'));
    }
    public function sliderStore(SliderStoreRequest $request){

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/'.$unique_name);
        }

         Slider::insert([
             'title' => $request->title,'short_text' => $request->short_text, 'photo' => $unique_name,
         ]);
        $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function EditSlider($id){
      $edit_data = Slider::findOrFail($id);
      return view('admin.slider.edit_slider',compact('edit_data'));
    }
    public function UpdateSlider(Request $request,$id){
        $update_data = Slider::findOrFail($id);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/'.$unique_name);
            @unlink('admin/images/'.$request->old_photo);
        }else{
            $unique_name =$request->old_photo;
        }

        $update_data->title = $request->title;
        $update_data->short_text = $request->short_text;
        $update_data->photo = $unique_name;
        $update_data->update();

        $notification = array(
            'message' => 'Slider Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.view')->with($notification);
    }
    public function DeleteSlider($id){
        $delete_data = Slider::findOrFail($id);
        $delete_data->delete();
        @unlink('admin/images/'.$delete_data->photo);
        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}
