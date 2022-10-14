<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\category;
use App\Models\post;


class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $agents = Agent::all();
        return  view('admin.agent.show',compact('agents'));
    }
    public function create()
    {
        $categories = category::all();
        $posts = post::all();
       return view('admin.agent.create', compact('categories','posts'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => 'required|numeric',

        ]);
        $request['password'] = bcrypt($request->password);
        $agent = new agent;
        $agent =Agent::create($request->all());
        $agent->save(); 
        $agent ->categories()->sync($request->categories);
        $agent ->posts()->sync($request->post);
        session()->flash('success','Added successfully');
        return redirect(route('agent.index'));
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $agent=Agent::find($id);
        $categories = category::all();
        $posts = post::all();
        return view('admin.agent.edit',compact('categories','agent','posts'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required|numeric',
        ]);
        $request->status? : $request['status']=0;
        $agent = agent::where('id',$id)->update($request->except('_token','_method','category','post'));
        Agent::find($id)->categories()->sync($request->category);
        Agent::find($id)->posts()->sync($request->post);
        return redirect(route('agent.index'))->with('message','agent updated');
    }
    public function destroy($id)
    {
        Agent::where('id',$id)->delete();
        return redirect()->back()->with('message','agent deleted successfully');
    }
}
