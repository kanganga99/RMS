<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\post;


class AdminTenantsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $tenants = Tenant::all();
        return view('admin.tenants.index')->with('tenants', $tenants);
    }

    public function create()
    {
        $posts = post::all();
        return view('admin.tenants.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phoneno' => 'required|numeric',
            'houseno' => ['required', 'string'],
            'idno' => 'required|numeric', 'unique:admins',

        ]);

        $request['password'] = bcrypt($request->password);
        $tenant = new tenant;
        $tenant = tenant::create($request->all());
        $tenant->save();

        $tenant->posts()->sync($request->posts);
        session()->flash('success', 'Added successfully');
        return redirect('admin/tenants');
    }
    public function show($id)
    {
        $tenant = Tenant::find($id);
        return view('admin.tenants.show')->with('tenants', $tenant);
    }

    public function edit($id)
    {
        $tenant = Tenant::find($id);

        $posts = post::all();

        return view('admin.tenants.edit', compact('tenant', 'posts'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phoneno' => 'required|numeric',
            'houseno' => ['required', 'string'],
            // 'idno' => 'required|numeric','unique:admins',   

        ]);

        $request->status ?: $request['status'] = 0;
        $tenant = Tenant::where('id', $id)->update($request->except('_token', '_method', 'post'));
        // $user->posts()->sync($request->posts);
        Tenant::find($id)->posts()->sync($request->post);
        // return redirect(route('user.index'))->with('message','user updated');
        return redirect('admin/tenants')->with('message', 'tenant Updated!');



        // $tenant = Tenant::find($id);
        // $input = $request->all();
        // $tenant->update($input);
    }

    public function destroy($id)
    {

        // User::where('id',$id)->delete();
        // return redirect()->back()->with('message','user deleted successfully');
        Tenant::where('id', $id)->delete();
        return redirect('admin/tenants')->with('message', 'tenant deleted!');
    }
}
