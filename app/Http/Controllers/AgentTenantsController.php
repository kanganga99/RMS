<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;



class AgentTenantsController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('agent');
    }

    public function index()
    {
        // $tenants = Tenant::all();
        // $tenants = Tenant::where('post_id', session('post_id')); 
// $posts = Post::where('user_id','=', Auth::id())->get();
        $tenants  = Tenant::where('post_id','=', Auth::guard('agent')->user)->get();
 
        return view('agent.tenants.index',compact('tenants'));
    }

    public function create()
    {
        return view('agent.tenants.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tenant::create($input);
        $request->post_id = auth()->id();
        session()->flash('success', 'Added successfully');
        return redirect('agent/tenants');
    }

    public function show($id)
    {
        $tenant = Tenant::find($id);
        return view('agent.tenants.show')->with('tenants',$tenant);
    }

    public function edit($id)
    {
        $tenant = Tenant::find($id);
        return view('agent.tenants.edit')->with('tenants', $tenant);
    }

    public function update(Request $request, $id)
    {
        $tenant = Tenant::find($id);
        $input = $request->all();
        $tenant->update($input);
        return redirect('agent/tenants')->with('flash message', 'tenant Updated!');
    }

    public function destroy($id)
    {
        Tenant::destroy($id);
        return redirect('agent/tenants')->with('flash message', 'tenant deleted!');
    }
}
