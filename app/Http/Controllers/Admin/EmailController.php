<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appiontment;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function ContactMail(){
        $contactMail = ContactUs::latest()->get();
        return view('admin.contact.contact_us',compact('contactMail'));
    }
    public function AppointMail(){
        $appointMail = Appiontment::latest()->get();
        return view('admin.appointment.appoint',compact('appointMail'));
    }
}
