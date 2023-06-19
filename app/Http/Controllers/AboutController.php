<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutTestimonialRequest;
use App\Models\About;
use App\Models\AboutTestimonial;
use App\Models\AboutUsContent;
use App\Models\Exp;
use App\Models\Map;
use App\Models\Network;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    //frontend load
    public function aboutUs(){
        $about = About::find(1);
        $testimonial = AboutTestimonial::all();
        $net = Network::find(1);
        $exp = Exp::find(1);
        $team = Team::all();
        $map_link = Map::find(1);
        return view('frontend.pages.about.about_us',compact('about','testimonial','net','exp','team','map_link'));
    }
    //backend load
    public function aboutView(){
        $edit_data = About::find(1);
        return view('admin.about.about_us',compact('edit_data'));
    }
    public function aboutUpdate(Request $request){
        $update_data = About::find(1);
        if ($request->hasFile('banner_img')){
            $img = $request->file('banner_img');
            $unique_one = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/about/'.$unique_one);
            @unlink('admin/images/about/'.$request->old_banner);
        }else{
            $unique_one = $request->old_banner;
        }

        if ($request->hasFile('exp_img_one')){
            $img = $request->file('exp_img_one');
            $unique_two = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(361,481)->save('admin/images/about/'.$unique_two);
            @unlink('admin/images/about/'.$request->old_exp_one);
        }else{
            $unique_two = $request->old_exp_one;
        }

        if ($request->hasFile('exp_img_two')){
            $img = $request->file('exp_img_two');
            $unique_three = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(361,481)->save('admin/images/about/'.$unique_three);
            @unlink('admin/images/about/'.$request->old_exp_two);
        }else{
            $unique_three = $request->old_exp_two;
        }

        if ($request->hasFile('exp_bgc_img')){
            $img = $request->file('exp_bgc_img');
            $unique_four = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(960,760)->save('admin/images/about/'.$unique_four);
            @unlink('admin/images/about/'.$request->old_exp_bgc);
        }else{
            $unique_four = $request->old_exp_bgc;
        }


        if ($request->hasFile('testimonial_img')){
            $img = $request->file('testimonial_img');
            $unique_five = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/about/'.$unique_five);
            @unlink('admin/images/about/'.$request->old_testimonial_img);
        }else{
            $unique_five = $request->old_testimonial_img;
        }

        $update_data->banner_img = $unique_one;
        $update_data->exp_img_one = $unique_two;
        $update_data->exp_img_two = $unique_three;
        $update_data->exp_bgc_img = $unique_four;
        $update_data->testimonial_img = $unique_five;
        $update_data->title = $request->title;
        $update_data->short_text = $request->short_text;
        $update_data->quote = $request->quote;
        $update_data->update();

        $notification = array(
            'message' => 'About Info Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('about.view')->with($notification);
    }
    public function aboutTestimonial(){
        $all_data = AboutTestimonial::all();
        return view('admin.about.about_testimonial',compact('all_data'));
    }
    public function aboutTestimonialStore(AboutTestimonialRequest $request){

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(90,90)->save('admin/images/about/'.$unique_name);
        }


        AboutTestimonial::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'quote' => $request->quote,
            'photo' => $unique_name,
        ]);
        $notification = array(
            'message' => 'About Testimonial Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('about.testimonials')->with($notification);
    }
    public function aboutTestimonialEdit($id){
        $edit_data = AboutTestimonial::find($id);
        return view('admin.about.about_testimonial_edit',compact('edit_data'));
    }
    public function aboutTestimonialUpdate(Request $request,$id){
        $update_data = AboutTestimonial::find($id);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(90,90)->save('admin/images/about/'.$unique_name);
            @unlink('admin/images/about/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_data->name = $request->name;
        $update_data->designation = $request->designation;
        $update_data->quote = $request->quote;
        $update_data->photo = $unique_name;
        $update_data->created_at = Carbon::now();
        $update_data->update();
        $notification = array(
            'message' => 'About Testimonial Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('about.testimonials')->with($notification);
    }

}
