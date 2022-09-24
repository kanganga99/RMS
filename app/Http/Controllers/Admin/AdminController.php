<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

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
            return redirect()->route('admin.dashboard')->with('error','Admin Logged in Successfully');
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
        return redirect()->route('admin.login')->with('error','Admin Logged out Successfully');
    }

    public function AdminRegister(){
        return view('admin.admin_register');
    }



    // public function AdminRegisterCreate(Request $request){
    //     // dd($request->all());

        
    //     Admin::insert([
    //     // 'name' => ['required', 'string', 'max:255'],

    //         'name' => $request->name,

    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'created_at' => Carbon::now(),
        
    //     ]);
    //     return redirect()->route('login-form')->with('error','Admin created Successfully');

    


    // }
    public function AdminRegisterCreate(Request $request)
{
    // dd($request->all());
    $input  = request()->except(['_token','_method']);
    $request->validate([
        // 'name' => ['required', 'string', 'max:255'],

        // 'name' => $request->validate->name,

        // 'email' => $request->validate->email,

        // 'password' => Hash::make($request->validate->password),
        // 'created_at' => Carbon::now(),
        'name' => 'required|max:25',
        // 'phone' => 'required|between:10,15|phone',

        // 'email' => 'required|email|max:15|unique',
        'email' => 'required|between:3,64|email|unique:admins',
        'password' => 'required|min:6|max:20|confirmed',
        'created_at' => Carbon::now(),

    ]);

    $input['password'] = bcrypt($input['password']);
    $input['password_confirmation'] = bcrypt($input['password_confirmation']);

    Admin::insert($input);

    return redirect()->route('admin.login')->with('success', 'Admin created Successfully');
}
}
