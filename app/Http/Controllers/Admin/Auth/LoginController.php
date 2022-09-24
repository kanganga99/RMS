<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('admin.admin_login');
    }


      public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email'=> $check['email'] , 'password'=> $check['password']  ])){
            return redirect()->route('admin.dashboard')->with('error','Admin Logged in Successfully');
        }else{
            return back()->with('error','invalid credentials');
        }
    }
    protected function credentials(Request $request)
    {
       
        $admin = admin::where('email',$request->email)->first();
        if (count((array)$admin)) {

            if($admin->status == 1){
                return ['email'=>'inactive', 'password'=>'you are not activated please contact admin'];
            }else{
                 return ['email'=>$request->email, 'password'=>$request->password,'status'=>0];
            }

        }
        return $request->only($this->username(), 'password');
       
    }


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    
    protected function guard()
    {
        return Auth::guard('admin');
    }

}
