<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestStoreRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    public function clientTest(){
        $testi = Testimonial::all();
        return view('admin.testimonial.testimonial',compact('testi'));
    }
    public function addNewTest(){
        return view('admin.testimonial.add_new_test');
    }
    public function TestStore(TestStoreRequest $request){
        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(90,90)->save('admin/images/testimonial/'.$unique_name);
        }
        Testimonial::insert([
            'quote' => $request->quote,'name' => $request->name,'designation' => $request->designation,'organization'=>$request->organization,'photo'=>$unique_name
        ]);
        $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('client.test')->with($notification);
    }
    public function TestEdit($id){
        $edit_data = Testimonial::find($id);
        return view('admin.testimonial.testimonial_edit',compact('edit_data'));
    }
    public function TestUpdate(Request $request,$id){
        $update_data = Testimonial::find($id);
        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(90,90)->save('admin/images/testimonial/'.$unique_name);
            @unlink('admin/images/testimonial/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }
        $update_data->quote = $request->quote;
        $update_data->name = $request->name;
        $update_data->designation = $request->designation;
        $update_data->organization = $request->organization;
        $update_data->photo = $unique_name;
        $update_data->update();

        $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('client.test')->with($notification);
    }
    public function TestDelete($id){
        $delete_data = Testimonial::find($id);
        $delete_data->delete();
        @unlink('admin/images/testimonial/'.$delete_data->photo);
        $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}
