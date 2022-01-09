<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        
        if(Auth::id()){
            if(Auth::user()->usertype=='0')
            {
                return view('user.home');

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
        return view('user.home');
    }
    public function indexx(){
        return view('user.anindex');
    }
    public function about(){
        return view('user.about');
    }
    public function career(){
        return view('user.career');
    }
    public function services(){
        return view('user.services');
    }
    public function servicedetails(){
        return view('user.servicedetails');
    }
    public function faq(){
        return view('user.faq');
    }
    public function team(){
        return view('user.team');
    }
    public function teamdetails(){
        return view('user.teamdetails');
    }
    public function whychoose(){
        return view('user.whychoose');
    }
    public function portfolio(){
        return view('user.portfolio');
    }
    public function portfoliodetails(){
        return view('user.portfoliodetails');
    }
    public function news(){
        return view('user.news');
    }
    public function newsdetails(){
        return view('user.newsdetails');
    }
    public function ttindex(){
        return view('user.ttindex');
    }

}
