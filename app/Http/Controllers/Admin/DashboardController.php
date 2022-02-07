<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Phone;
use App\Models\Detail;
use App\Models\Bannerimage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users(){
        $users=User::all();
        
        return view('admin.users.index',compact('users'));


    }
    public function viewusers($id){
        $users=User::find($id);
        return view('admin.users.view',compact('users'));

    }
    public function deleteusers($id){
        $users=User::find($id);
        $users->delete();
        return redirect()->back()->with('message','User deleted successfully');
        
        
    }
}
