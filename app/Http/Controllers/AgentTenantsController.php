<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;


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
  
    $tenants  = Tenant::where('post_id',optional(Auth::guard('agent')->user())->id)->get();
    // $tenants = Tenant::find('post_id',optional(Auth::user())->id)->get();    

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
        // $tenant->post_id=$request->session()->get('post_id');

        // $request->post_id = auth()->id();
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
