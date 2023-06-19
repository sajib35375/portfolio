<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ToDoStoreRequest;
use App\Models\ToDo;
use App\Models\ToDoHeader;
use Illuminate\Http\Request;
use Image;

class ToDoController extends Controller
{
    public function toDoView(){
        $all_data = ToDo::all();
        return view('admin.todo.todo',compact('all_data'));
    }
    public function toDoAdd(){
        return view('admin.todo.todo_add');
    }
    public function toDoStore(ToDoStoreRequest $request){

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $photo = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(751,440)->save('admin/images/todo/'.$photo);
        }

        if ($request->hasFile('image_one')){
            $img = $request->file('image_one');
            $img_one = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(360,222)->save('admin/images/todo/'.$img_one);
        }

        if ($request->hasFile('image_two')){
            $img = $request->file('image_two');
            $img_two = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(360,222)->save('admin/images/todo/'.$img_two);
        }

        ToDo::insert([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'long_text_one' => $request->long_text_one,
            'long_text_two' => $request->long_text_two,
            'image_one' => $img_one,
            'image_two' => $img_two,
            'icon_class' => $request->icon_class,
            'photo' => $photo
        ]);
        $notification = array(
            'message' => 'ToDo Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('todo.view')->with($notification);
    }
    public function toDoEdit($id){
        $edit_data = ToDo::findOrFail($id);
        return view('admin.todo.todo_edit',compact('edit_data'));
    }
    public function toDoUpdate(Request $request,$id){
        $update_data = ToDo::findOrFail($id);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $photo = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(751,440)->save('admin/images/todo/'.$photo);
            @unlink('admin/images/todo/'.$request->old_photo);
        }else{
            $photo = $request->old_photo;
        }

        if ($request->hasFile('image_one')){
            $img = $request->file('image_one');
            $img_one = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(360,222)->save('admin/images/todo/'.$img_one);
            @unlink('admin/images/todo/'.$request->old_image_one);
        }else{
            $img_one = $request->old_image_one;
        }

        if ($request->hasFile('image_two')){
            $img = $request->file('image_two');
            $img_two = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(360,222)->save('admin/images/todo/'.$img_two);
            @unlink('admin/images/todo/'.$request->old_image_two);
        }else{
            $img_two = $request->old_image_two;
        }

        $update_data->title_one = $request->title_one;
        $update_data->title_two = $request->title_two;
        $update_data->long_text_one = $request->long_text_one;
        $update_data->long_text_two = $request->long_text_two;
        $update_data->icon_class = $request->icon_class;
        $update_data->photo = $photo;
        $update_data->image_one = $img_one;
        $update_data->image_two = $img_two;
        $update_data->update();
        $notification = array(
            'message' => 'ToDo Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('todo.view')->with($notification);
    }
    public function toDoDelete($id){
        $delete_data = ToDo::findOrFail($id);
        $delete_data->delete();
        @unlink('admin/images/todo/'.$delete_data->photo);
        @unlink('admin/images/todo/'.$delete_data->image_one);
        @unlink('admin/images/todo/'.$delete_data->image_two);
        $notification = array(
            'message' => 'ToDo Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function toDoHeaderImage(){
        $edit_image = ToDoHeader::find(1);
        return view('admin.todo.toDoHeader',compact('edit_image'));
    }
    public function toDoHeaderImageUpdate(Request $request){
        $update_image = ToDoHeader::find(1);
        if ($request->hasFile('header')){
            $img = $request->file('header');
            $photo = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/todo/'.$photo);
            @unlink('admin/images/todo/'.$request->old_header);
        }else{
            $photo = $request->old_header;
        }

        $update_image->header_image = $photo;
        $update_image->update();
        $notification = array(
            'message' => 'ToDo Header Image Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
