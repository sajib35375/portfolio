<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\CaseStudyBanner;
use App\Models\Exp;
use App\Models\Network;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\ToDo;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchData(Request $request){
        $searchText = $request->search;
        //return $searchText;die;
        $all_todo = ToDo::where('title_one','LIKE','%'.$searchText.'%')->get();
        $net = Network::where('title','LIKE','%'.$searchText.'%')->first();
        $exp = Exp::where('title','LIKE','%'.$searchText.'%')->first();
        $testimonial = Testimonial::where('quote','LIKE','%'.$searchText.'%')->get();
        $cases = CaseStudy::where('title','LIKE','%'.$searchText.'%')->get();
        $header_case = CaseStudyBanner::find(1);
        $team = Team::where('name','LIKE','%'.$searchText.'%')->get();
        return view('frontend.search',compact('all_todo','net','exp','testimonial','cases','header_case','team'));
    }
}
