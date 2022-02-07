<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bannerimage;
use App\Models\Phone;

class HomeController extends Controller
{
    public function redirect()
    {
        
        if(Auth::id()){
            if(Auth::user()->usertype=='0')
            {
                $data=phone::all();
                $bannerimage=bannerimage::all();
                return view('user.home',compact('bannerimage','data'));

            }
            else
            {
                return view('admin.home');

            }

        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        $data=phone::all();
        $bannerimage=bannerimage::all();
        return view('user.home',compact('bannerimage','data'));
    }
    public function indexx(){
        $data=phone::all();
        return view('user.anindex',compact('data'));
    }
    public function about(){
        $data=phone::all();
        return view('user.about',compact('data'));
    }
    public function career(){
        $data=phone::all();
        return view('user.career',compact('data'));
    }
    public function services(){
        $data=phone::all();
        return view('user.services',compact('data'));
    }
    public function servicedetails(){
        $data=phone::all();
        return view('user.servicedetails',compact('data'));
    }
    public function faq(){
        $data=phone::all();
        return view('user.faq',compact('data'));
    }
    public function team(){
        $data=phone::all();
        return view('user.team',compact('data'));
    }
    public function teamdetails(){
        $data=phone::all();
        return view('user.teamdetails',compact('data'));
    }
    public function whychoose(){
        $data=phone::all();
        return view('user.whychoose',compact('data'));
    }
    public function portfolio(){
        $data=phone::all();
        return view('user.portfolio',compact('data'));
    }
    public function portfoliodetails(){
        $data=phone::all();
        return view('user.portfoliodetails',compact('data'));
    }
    public function news(){
        $data=phone::all();
        return view('user.news',compact('data'));
    }
    public function newsdetails(){
        $data=phone::all();
        return view('user.newsdetails',compact('data'));
    }
    public function ttindex(){
        $data=phone::all();
        return view('user.ttindex',compact('data'));
    }

}
