<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


use App\Models\Agent;
use App\Models\Category;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AgentController extends Controller
{
    public function Index(){

        return view('agent.login');
    }
    public function AgentDashboard(){
//     Session::put('name', 'John');
// if(Session::has('name')){
//     dd('name exists');
// }else{
//     dd('name does not exist');
// }
        // $users = User::all(); 
        // return view('agent.home',compact('users'));

        // $data =array();
        // $data = DB::table('category_agents')->select('category_id','agent_id')->where('agent_id', '=','$agent_id')->limit(1)->get();
        // $data = DB::table('categories')->select('id','name')->where('name', '=','$name')->limit(1)->get();
        
        // if(Session::has('category_id')){
        //     $data=Category::where('id','=', Session::get('id'))->first();
        // }
        
        $users = User::whereHas('categories', function($query) {
            $query->where('name', 'categories');
        })->get(['name', 'id']);
            return  view('agent.home',compact('users'));
            // ,'data'));
    }

    // public function AgentLogin(Request $request){
    //     // dd($request->all());
    //     $check = $request->all();
    //     if(Auth::guard('agent')->attempt(['email'=> $check['email'] , 'password'=> $check['password']  ])){
    //         return redirect()->route('agent.dashboard')->with('error','Agent Logged in Successfully');
    //     }else{
    //         return back()->with('error','you have inserted invalid credentials try again please');
    //     }
        
    // }
    
    public function AgentLogout(){
        Auth::guard('agent')->logout();
        return redirect()->route('agent.login')->with('error','Agent Logged out Successfully');
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
            'phone' => 'required|between:10,15|phone',

            'password' => 'required|min:6|max:20|confirmed',
            'created_at' => Carbon::now(),
        
        ]);
        $input['password'] = bcrypt($input['password']);
        $input['password_confirmation'] = bcrypt($input['password_confirmation']);
        Agent::insert($input);
        return redirect()->route('agent.login')->with('success','Agent created Successfully');

    }
    // public function users(Request $request){
    //     // dd($request->all());
    //     $users = User::all(); 
    //     return  view('agent.home',compact('users'));
 


}
// }