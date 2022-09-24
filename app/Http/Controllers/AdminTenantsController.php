<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tenant;

class AdminTenantsController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return view('admin.tenants.index')->with('tenants',$tenants);
    }

    public function create()
    {
        return view('admin.tenants.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tenant::create($input);
        session()->flash('success', 'Added successfully');
        return redirect('admin/tenants');
    }

    public function show($id)
    {
        $tenant = Tenant::find($id);
        return view('admin.tenants.show')->with('tenants',$tenant);
    }

    public function edit($id)
    {
        $tenant = Tenant::find($id);
        return view('admin.tenants.edit')->with('tenants', $tenant);
    }

    public function update(Request $request, $id)
    {
        $tenant = Tenant::find($id);
        $input = $request->all();
        $tenant->update($input);
        return redirect('admin/tenants')->with('flash message', 'tenant Updated!');
    }

    public function destroy($id)
    {
        Tenant::destroy($id);
        return redirect('admin/tenants')->with('flash message', 'tenant deleted!');
    }
}

