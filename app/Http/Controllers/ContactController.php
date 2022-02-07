<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
use App\Models\Detail;
use App\Models\Phone;

class ContactController extends Controller
{
    public function contact(){
        $data=phone::all();
        return view('user.contactus',compact('data'));
    }
    public function sendEmail(Request $request){
        $detail=new Detail();

       $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone'=>'required',
            'subject' => 'required|max:100',
            'message' => 'required|max:255',
            
            
        ]);
        $detail->name=request('name');
        $detail->email=request('email');
        $detail->phone=request('phone');
        $detail->subject=request('subject');
        $detail->message=request('message');
        $detail->save();
        
        
    

    Mail::to('marketing@systemdecoder.com')->send(new ContactMail($detail));
         

    return back()->with('message_sent','Your message has been sent successfully!');
    }
    
    
}
