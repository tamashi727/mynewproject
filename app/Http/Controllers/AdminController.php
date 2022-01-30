<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bannerimage;
use App\Models\Detail;
use App\Models\Phone;

class AdminController extends Controller
{
    public function addbannerimage(){
        return view('layouts.addbannerimage');
    }

    public function uploadimage(Request $request){
        $bannerimage=new bannerimage;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('bannerimages',$imagename);
        $bannerimage->image=$imagename;
        $bannerimage->save();

        return redirect()->back()->with('message','Image added successfully');
    }


    public function showimage(){
        $bannerimage=bannerimage::all();
        return view('layouts.showimage',compact('bannerimage'));
        
    }
    public function deleteimage($id){
        $bannerimage=bannerimage::find($id);
        $bannerimage->delete();
        return redirect()->back();
        
        
    }

    
    public function showmessage(){
        $data=detail::all();
        
        return view('layouts.showmessage',compact('data'));
        
    }
    
    public function deletemessage($id){
        $data=detail::find($id);
        $data->delete();
        return redirect()->back()->with('message','Message deleted successfully');
        
        
    }

    
    public function changephone(){
        return view('layouts.changephone');
    }
    public function uploadphone(Request $request){
        $data=new phone;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->save();
        return redirect()->back()->with('message','Phone Email Added successfully');
    }

    
    public function showphone(){
        $data=phone::all();
        
        return view('layouts.showphone',compact('data'));
        
    }
    public function deletephone($id){
        $data=phone::find($id);
        $data->delete();
        return redirect()->back()->with('message','phone,email and address deleted successfully');
        
        
    }
}
