<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return view ('tenants.index')->with('tenants',$tenants);
    }

    public function create()
    {
        return view('tenants.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tenant::create($input);
        return redirect('tenants')->with('flash_message', 'Tenant Added successfully!');
    }

    public function show($id)
    {
        $tenant = Tenant::find($id);
        return view('tenants.show')->with('tenants',$tenant);
    }

    public function edit($id)
    {
        $tenant = Tenant::find($id);
        return view('tenants.edit')->with('tenants', $tenant);
    }

    public function update(Request $request, $id)
    {
        $tenant = Tenant::find($id);
        $input = $request->all();
        $tenant->update($input);
        return redirect('tenants')->with('flash message', 'tenant Updated!');
    }

    public function destroy($id)
    {
        Tenant::destroy($id);
        return redirect('tenants')->with('flash message', 'tenant deleted!');
    }
}

