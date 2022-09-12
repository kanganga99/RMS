<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AgentController extends Controller
{
    public function Index(){
        return view('agent.agent_login');
    }

    public function AgentDashboard(){
        return view('agent.home'); 
    }

    public function AgentLogin(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('agent')->attempt(['email'=> $check['email'] , 'password'=> $check['password']  ])){
            return redirect()->route('agent.dashboard')->with('error','Agent Logged in Successfully');
        }else{
            return back()->with('error','you have inserted invalid credentials try again please');
        }
    }
    public function AgentLogout(){
        Auth::guard('agent')->logout();
        return redirect()->route('agent_login-form')->with('error','Agent Logged out Successfully');
    }
    public function AgentRegister(){
        return view('agent.agent_register');
    }
    public function AgentRegisterCreate(Request $request){
        // dd($request->all());
    $input  = request()->except(['_token','_method']);
    $request->validate([
        
 

            'name' => 'required|max:25',
            'email' => 'required|between:3,64|email|unique:agents',
            // 'phone' => 'required|between:10,15|phone',

            'password' => 'required|min:6|max:20|confirmed',
            'created_at' => Carbon::now(),
        
        ]);
        $input['password'] = bcrypt($input['password']);
        $input['password_confirmation'] = bcrypt($input['password_confirmation']);
        Agent::insert($input);
        return redirect()->route('agent_login-form')->with('success','Agent created Successfully');




    }
}