<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutTestimonial;
use App\Models\CaseStudy;
use App\Models\CaseStudyBanner;
use App\Models\Exp;
use App\Models\HeaderCase;
use App\Models\Map;
use App\Models\Network;
use App\Models\PriceService;
use App\Models\PricingPlan;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\ToDo;
use App\Models\ToDoHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cache;

class HomeController extends Controller
{
    public function homeView(){
        $all_slider = Slider::select(['photo','title','short_text'])->get();

        $all_todo = ToDo::select(['photo','icon_class','title_one','long_text_one','id'])->get();

        $net = Network::find(1);
        $exp = Exp::find(1);

        $testimonial = Testimonial::latest()->get();

        $prices = PricingPlan::all();

        $services = PriceService::all();

        $cases = CaseStudy::select(['category','image','id'])->get();
        $team = Team::all();
        $map_link = Map::find(1);

        $header_case = CaseStudyBanner::find(1);

        return view('frontend.index',compact('all_slider','all_todo','net','exp','testimonial','prices','services','cases','team','map_link','header_case'));
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
    public function caseStudySingle($id){
        $single_case = CaseStudy::find($id);
        $single_header = HeaderCase::find(1);
        $team = Team::all();
        $map_link = Map::find(1);
        $testimonial = Testimonial::latest()->get();
        $prices = PricingPlan::all();
        $services = PriceService::all();
        $about = About::find(1);
        return view('frontend.pages.single_case.single_case',compact('single_case','single_header','team','map_link','testimonial','prices','services','about'));
    }
    public function caseStudyPage(){
        $cases = CaseStudy::all();
        $header = HeaderCase::find(1);
        $prices = PricingPlan::all();
        $services = PriceService::all();
        $testimonial = Testimonial::latest()->get();
        $about = About::select(['testimonial_img'])->find(1);
        $team = Team::all();
        $map_link = Map::find(1);
        return view('frontend.pages.caseStudyPage.case_study_page',compact('cases','header','prices','services','testimonial','about','team','map_link'));
    }
    public function todoServices(){
        $header = ToDoHeader::find(1);
        $all_todo = ToDo::all();
        $prices = PricingPlan::all();
        $services = PriceService::all();
        $about = About::select(['testimonial_img'])->find(1);
        $testimonial = AboutTestimonial::all();
        $team = Team::all();
        $map_link = Map::find(1);
        return view('frontend.pages.todo.todo',compact('header','all_todo','prices','services','about','testimonial','team','map_link'));
    }
    public function todoServicesSingle($id){
        $todoSingle = ToDo::find($id);
        $header = ToDoHeader::find(1);
        $prices = PricingPlan::all();
        $services = PriceService::all();
        $testimonial = AboutTestimonial::all();
        $about = About::find(1);
        $team = Team::all();
        $map_link = Map::find(1);
        return view('frontend.pages.todo.todo_single',compact('todoSingle','header','prices','services','testimonial','about','team','map_link'));
    }
}
