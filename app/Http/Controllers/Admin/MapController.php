<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function mapView(){
        $map = Map::find(1);
        return view('admin.map.map',compact('map'));
    }
    public function mapUpdate(Request $request){
        $map_update = Map::find(1);
        $map_update->map = $request->map;
        $map_update->update();
        $notification = array(
            'message' => 'Map Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
