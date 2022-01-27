<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bannerimage;

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
}
