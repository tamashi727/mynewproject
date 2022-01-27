<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bannerimage;

class HomeController extends Controller
{
    public function redirect()
    {
        
        if(Auth::id()){
            if(Auth::user()->usertype=='0')
            {
                $bannerimage=bannerimage::all();
                return view('user.home',compact('bannerimage'));

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
        $bannerimage=bannerimage::all();
        return view('user.home',compact('bannerimage'));
    }
    public function indexx(){
        $bannerimage=bannerimage::all();
        return view('user.anindex',compact('bannerimage'));
    }
    public function about(){
        $bannerimage=bannerimage::all();
        return view('user.about',compact('bannerimage'));
    }
    public function career(){
        $bannerimage=bannerimage::all();
        return view('user.career',compact('bannerimage'));
    }
    public function services(){
        $bannerimage=bannerimage::all();
        return view('user.services',compact('bannerimage'));
    }
    public function servicedetails(){
        $bannerimage=bannerimage::all();
        return view('user.servicedetails',compact('bannerimage'));
    }
    public function faq(){
        $bannerimage=bannerimage::all();
        return view('user.faq',compact('bannerimage'));
    }
    public function team(){
        $bannerimage=bannerimage::all();
        return view('user.team',compact('bannerimage'));
    }
    public function teamdetails(){
        $bannerimage=bannerimage::all();
        return view('user.teamdetails',compact('bannerimage'));
    }
    public function whychoose(){
        $bannerimage=bannerimage::all();
        return view('user.whychoose',compact('bannerimage'));
    }
    public function portfolio(){
        $bannerimage=bannerimage::all();
        return view('user.portfolio',compact('bannerimage'));
    }
    public function portfoliodetails(){
        $bannerimage=bannerimage::all();
        return view('user.portfoliodetails',compact('bannerimage'));
    }
    public function news(){
        $bannerimage=bannerimage::all();
        return view('user.news',compact('bannerimage'));
    }
    public function newsdetails(){
        $bannerimage=bannerimage::all();
        return view('user.newsdetails',compact('bannerimage'));
    }
    public function ttindex(){
        $bannerimage=bannerimage::all();
        return view('user.ttindex',compact('bannerimage'));
    }

}
