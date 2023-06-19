<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use App\Mail\ContactMail;
use App\Models\Appiontment;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;

class ContactController extends Controller
{
    public function contactUs(Request $request){
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ]);
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];

        Mail::to('bengalsolutions11@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with(['success','Mail Send Successfully']);
    }
    public function updateContactView(){
        $edit_contact = Contact::find(1);
        return view('admin.contact.update_contact',compact('edit_contact'));
    }
    public function updateContactInfo(Request $request){
        $update_contact = Contact::find(1);
        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,939)->save('admin/images/contact/'.$unique_name);
            @unlink('admin/images/contact/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_contact->phone = $request->phone;
        $update_contact->mobile = $request->mobile;
        $update_contact->email = $request->email;
        $update_contact->time = $request->time;
        $update_contact->photo = $unique_name;
        $update_contact->update();

        $notification = array(
            'message' => 'Contact info updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



    public function ContactDelete($id){
       $delete = ContactUs::find($id);
       $delete->delete();

        $notification = array(
            'message' => 'Contact Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }






    //frontend
    public function contactUsPage(){
        $contact = Contact::find(1);
        $map_link = Map::find(1);
        return view('frontend.pages.contact.contact',compact('contact','map_link'));
    }

    // appointment

    public function appointmentPlace(Request $request){

        Appiontment::insert([
            'your_name' => $request->name,
            'your_email' => $request->email,
            'your_phone' => $request->phone,
            'your_message' => $request->message,

        ]);

        $details = [
            'your_name' => $request->name,
            'your_email' => $request->email,
            'your_phone' => $request->phone,
            'your_message' => $request->message,

        ];
        Mail::to('bengalsolutions11@gmail.com')->send(new AppointmentMail($details));

        return redirect()->back()->with('success','Mail Send Successfully');
    }



    public function AppointmentDelete($id){
       $delete = Appiontment::find($id);
       $delete->delete();

        $notification = array(
            'message' => 'Appointment Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }







}
