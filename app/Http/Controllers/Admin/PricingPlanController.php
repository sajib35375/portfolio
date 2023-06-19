<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PricingPlanRequest;
use App\Models\PriceService;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function pricingProduct(){
        return view('admin.pricing.product.pricing_product');
    }
    public function pricingProductStore(PricingPlanRequest $request){
        PricingPlan::insert([
            'category' => $request->category,'price'=> $request->price,'lineOne' => $request->lineOne, 'lineTwo' => $request->lineTwo, 'lineThree' => $request->lineThree, 'lineFour' => $request->lineFour,'lineFive' => $request->lineFive,'type' => $request->type,
        ]);
        $notification = array(
            'message' => 'Pricing Plan Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('pricing.product.show')->with($notification);
    }
    public function pricingProductShow(){
        $all_price = PricingPlan::all();
        return view('admin.pricing.product.show_product',compact('all_price'));
    }
    public function EditPricingProduct($id){
        $edit_data = PricingPlan::find($id);
        return view('admin.pricing.product.edit_pricing_product',compact('edit_data'));
    }
    public function UpdatePricingProduct(Request $request,$id){
        $update_data = PricingPlan::find($id);
        $update_data->category = $request->category;
        $update_data->price = $request->price;
        $update_data->type = $request->type;
        $update_data->lineOne = $request->lineOne;
        $update_data->lineTwo = $request->lineTwo;
        $update_data->lineThree = $request->lineThree;
        $update_data->lineFour = $request->lineFour;
        $update_data->lineFive = $request->lineFive;
        $update_data->update();
        $notification = array(
            'message' => 'Pricing Plan Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('pricing.product.show')->with($notification);
    }
    public function DeletePricingProduct($id){
        $delete_data = PricingPlan::find($id);
        $delete_data->delete();
        $notification = array(
            'message' => 'Pricing Plan Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

   //////////////////////// for services  ////////////////////
    public function serviceShow(){
        $all_price = PriceService::all();
        return view('admin.pricing.services.show_pricing_service',compact('all_price'));
    }
    public function serviceAdd(){
        return view('admin.pricing.services.add_pricing_service');
    }
    public function serviceStore(Request $request){
        PriceService::insert([
            'category' => $request->category,'price'=> $request->price,'lineOne' => $request->lineOne, 'lineTwo' => $request->lineTwo, 'lineThree' => $request->lineThree, 'lineFour' => $request->lineFour,'lineFive' => $request->lineFive,'type' => $request->type,
        ]);
        $notification = array(
            'message' => 'Service Plan Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('service.show')->with($notification);
    }
    public function serviceEdit($id){
        $edit_price = PriceService::find($id);
        return view('admin.pricing.services.edit_pricing',compact('edit_price'));
    }
    public function serviceUpdate(Request $request,$id){
        $update_price = PriceService::find($id);
        $update_price->category = $request->category;
        $update_price->price = $request->price;
        $update_price->type = $request->type;
        $update_price->lineOne = $request->lineOne;
        $update_price->lineTwo = $request->lineTwo;
        $update_price->lineThree = $request->lineThree;
        $update_price->lineFour = $request->lineFour;
        $update_price->lineFive = $request->lineFive;
        $update_price->update();
        $notification = array(
            'message' => 'Service Plan Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('service.show')->with($notification);
    }
    public function serviceDelete($id){
        $delete_price = PriceService::find($id);
        $delete_price->delete();
        $notification = array(
            'message' => 'Service Plan Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}
