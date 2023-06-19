<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStudyRequest;
use App\Models\CaseStudy;
use App\Models\CaseStudyBanner;
use App\Models\HeaderCase;
use Illuminate\Http\Request;
use Image;

class CaseStudiesController extends Controller
{
    public function caseStudy(){
        $all_case = CaseStudy::all();
        return view('admin.case_study.case_study_view',compact('all_case'));
    }
    public function caseStudyStore(CaseStudyRequest $request){

        if ($request->hasFile('image')){
            $img = $request->file('image');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(285,264)->save('admin/images/case/'.$unique_name);
        }
        CaseStudy::insert([
            'image' => $unique_name,'overView' => $request->overView,'result' => $request->result,'category' => $request->category,'title' => $request->title, 'budget' => $request->budget,'duration' => $request->duration,'clients'=>$request->clients,
        ]);
        $notification = array(
            'message' => 'CaseStudy Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('case.study')->with($notification);
    }
    public function AddCaseStudy(){
        return view('admin.case_study.add_case_study');
    }
    public function caseStudyEdit($id){
        $edit_case = CaseStudy::find($id);
        return view('admin.case_study.case_study_edit',compact('edit_case'));
    }
    public function caseStudyUpdate(Request $request,$id){
        $update_case = CaseStudy::find($id);

        if ($request->hasFile('image')){
            $img = $request->file('image');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(751,545)->save('admin/images/case/'.$unique_name);
            @unlink('admin/images/case/'.$request->old_image);
        }else{
            $unique_name = $request->old_image;
        }

        $update_case->image = $unique_name;
        $update_case->overView = $request->overView;
        $update_case->result = $request->result;
        $update_case->category = $request->category;
        $update_case->title = $request->title;
        $update_case->budget = $request->budget;
        $update_case->duration = $request->duration;
        $update_case->clients = $request->clients;
        $update_case->update();
        $notification = array(
            'message' => 'CaseStudy Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('case.study')->with($notification);
    }
    public function caseStudyDelete($id){
        $delete_case = CaseStudy::find($id);
        $delete_case->delete();
        $notification = array(
            'message' => 'CaseStudy Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
    public function caseStudyImage(){
        $header = HeaderCase::find(1);
        return view('admin.case_study.header_img',compact('header'));
    }
    public function caseStudyImageUpdate(Request $request){
        $header = HeaderCase::find(1);
        if ($request->hasFile('header_case')){
            $img = $request->file('header_case');
            $photo = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(751,545)->save('admin/images/case/'.$photo);
            @unlink('admin/images/case/'.$request->old_header);
        }else{
            $photo = $request->old_header;
        }

        $header->image = $photo;
        $header->update();
        $notification = array(
            'message' => 'Header Image updated Successfully for CaseStudy',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function headerImageView(){
        $edit_case = CaseStudyBanner::find(1);
        return view('admin.case_study.case_study_banner',compact('edit_case'));
    }
    public function headerImage(Request $request){
        $header_img = CaseStudyBanner::find(1);
        if ($request->hasFile('banner_image')){
            $img = $request->file('banner_image');
            $photo = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/case/'.$photo);
            @unlink('admin/images/case/'.$request->old_banner);
        }else{
            $photo = $request->old_banner;
        }
        $header_img->banner_image = $photo;
        $header_img->update();
        $notification = array(
            'message' => 'Header Image updated Successfully for CaseStudy',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
