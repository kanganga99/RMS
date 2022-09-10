<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.admin_login');
    
    }
  
    public function Dashboard(){
        return view('admin.home');
        
    }

    public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email'=> $check['email'] , 'password'=> $check['password']  ])){
            return redirect()->route('admin.dashboard')->with('error','Admin Login Successfully');
        }else{
            return back()->with('error','invalid credentials');
        }
              // if(Auth::guard('admin')->attempt(['email'=> $request->username , 'password'=> $request->password  ])){
        //     return redirect()->route('admin.dashboard')->with('error','Admin Login Successfully');
        // }else{
        //     return back()->with('error','invalid credentials');
        // }sql and excel
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login-form')->with('error','Admin Logged out Successfully');
    }
}
 