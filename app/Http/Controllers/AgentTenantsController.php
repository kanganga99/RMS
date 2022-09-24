<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;


class AgentTenantsController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return view('agent.tenants.index')->with('tenants',$tenants);
    }

    public function create()
    {
        return view('agent.tenants.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tenant::create($input);
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
