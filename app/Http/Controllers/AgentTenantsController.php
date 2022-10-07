<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Agent;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class AgentTenantsController extends Controller
{

    public function __construct()
    {
        $this->middleware('agent');
    }

    public function index()
    {
  
    $tenants  = Tenant::where('post_id',optional(Auth::guard('agent')->user())->id)->get();

    return view('agent.tenants.index',compact('tenants'));

}
    
    public function create()
    {
        return view('agent.tenants.create');
    }

    public function store(Request $request)
    {
        
        $this->validate($request,[
        'name' => ['required', 'string','max:50'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:agents'],
        'password' =>['required', 'string', 'min:8', 'confirmed'],
        'phoneno' => 'required|umeric',
        'houseno' => ['required', 'string'],
        'idno' => 'required|numeric', 'unique:agents',
        ]);

        $request['password'] = bcrypt($request->password);
        $tenant = new tenant;
        $tenant = tenant::create($request->all());
        $tenant ->save();
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
