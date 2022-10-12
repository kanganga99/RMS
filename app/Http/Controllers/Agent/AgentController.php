<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Models\Agent;
use App\Models\Category;
use App\Models\DamagedRoom;
use App\Models\VacantRoom;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('agent');
    }

    public function Index(){

        return view('agent.login');
    }

    public function AgentDashboard(){      
        $agents = Agent::where('post_id', session('post_id')); 
        
        $users = User::whereHas('categories', function($query) {
            $query->where('name', 'categories');
        })->get(['name', 'id']);

        $tenants = Tenant::count();
        $damagedrooms = DamagedRoom::count();
        $vacantrooms = VacantRoom::count();

            return  view('agent.home',compact('agents','tenants','damagedrooms','vacantrooms'));
        }
        
    public function AgentLogout(){
        Session::flush();
        Auth::guard('agent')->logout();
        
        return redirect()->route('agent.login')->with('error','Agent Logged out Successfully');
    }
}