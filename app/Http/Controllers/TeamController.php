<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamMemberRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Image;

class TeamController extends Controller
{
    public function teamView(){
        $all_member = Team::all();
        return view('admin.team.team',compact('all_member'));
    }
    public function teamAdd(TeamMemberRequest $request){
        if ($request->hasFile('image')){
            $img = $request->file('image');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(262,314)->save('admin/images/team/'.$unique_name);
        }
        Team::insert([
            'name' => $request->name,'designation' => $request->designation,'image' => $unique_name
        ]);
        $notification = array(
            'message' => 'Team Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function teamEdit($id){
        $edit_team = Team::find($id);
        return view('admin.team.team_edit',compact('edit_team'));
    }
    public function teamUpdate(Request $request,$id){
        $update_team = Team::find($id);
        if ($request->hasFile('image')){
            $img = $request->file('image');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(262,314)->save('admin/images/team/'.$unique_name);
            @unlink('admin/images/team/'.$request->old_image);
        }else{
            $unique_name = $request->old_image;
        }

        $update_team->name = $request->name;
        $update_team->designation = $request->designation;
        $update_team->image = $unique_name;
        $update_team->update();
        $notification = array(
            'message' => 'team updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('team.view')->with($notification);
    }
    public function teamDelete($id){
        $delete_team = Team::find($id);
        $delete_team->delete();
        @unlink('admin/images/team/'.$delete_team->image);
        $notification = array(
            'message' => 'team updated successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}
