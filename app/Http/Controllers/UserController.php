<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\Contact;

class UserController extends Controller
{
    public function services()
    {
        return view('services');
    }
    public function partners()
    {
        return view('partners');
    }
    public function contactus()
    {
        return view('contactus');
    }
   
public function mail(Request $request){
  $this->validate($request,[
        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required',
     ]);
  Mail::to('info@shprofessional.ca')->cc('saiful.hafizur.pc@gmail.com')->send(new Contact($request));
    
     return redirect()->back()->with('success','Your message has been submitted. We will get back to you soon');
  
}

     public function shprofessional()
    {
        return view('shprofessional');
    }
}
