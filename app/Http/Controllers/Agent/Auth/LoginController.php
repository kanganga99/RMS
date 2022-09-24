<?php

namespace App\Http\Controllers\Agent\Auth;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
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
    protected $redirectTo = 'agent/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('agent.agent_login');
    }


    public function login(Request $request){
        // dd($request->all());

        
        $check = $request->all();
        if(Auth::guard('agent')->attempt(['email'=> $check['email'] , 'password'=> $check['password']  ])){
            $id = DB::table('agents')->where('email', $request->email)->first()->post_id;
                
            session(['post_id'=> $id]);
            // dd($id);
            return redirect()->route('agent.dashboard')->with('error','Agent Logged in Successfully');
        }else{
            return back()->with('error','you have inserted invalid credentials try again please');
        }
      
        // $data = DB::table('agent')->select('id','email')->where('email', $check['email'] )->limit(1)->get();
        
        // if(Session::has('category_id')){
        //     $data=Category::where('id','=', Session::get('id'))->first();
        // }
        // Session::put('email');
        
        
    }

    
    protected function credentials(Request $request)
    {
       
        $agent = Agent::where('email',$request->email)->first();
        // $agent = Category::where('category_id',$request->category_id)->first();

        if (count((array)$agent)) {

            if($agent->status == 0){
                // $request->Session()->put('category_id',$agent->id);
                return ['email'=>'inactive', 'password'=>'you are not activated please contact admin'];
            }else{
                 return ['email'=>$request->email, 'password'=>$request->password,'status'=>1];
            }
          
        }
        return $request->only($this->username(), 'password');
       
    }


    public function __construct()
    {
        $this->middleware('guest:agent')->except('logout');
    }

    
    protected function guard()
    {
        return Auth::guard('agent');
    }

}
