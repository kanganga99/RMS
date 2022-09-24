<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\category;

class AgentController extends Controller
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

        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all(); 
        return  view('admin.agent.show',compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();

        // $roles = role::all(); return $roles;
        // $roles = role::all();
       return view('admin.agent.create', compact('categories'));
    //    ,compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],

            'phone' => 'required|numeric',

        ]);

        $request['password'] = bcrypt($request->password);
        $agent = new agent;

        $agent =Agent::create($request->all());
        $agent->save(); 

        // $agent->roles()->sync($request->role);
        $agent ->categories()->sync($request->categories);

        return redirect(route('agent.index'));
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent=Agent::find($id);
        // $agent = agent::with ('categories')->where('id',$id)->first();
        // $category = category::find($category_id);

        // $roles = role::all();
        $categories = category::all();

        return view('admin.agent.edit',compact('categories','agent'));
        // ,'roles'));
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => 'required|numeric',

        ]);


        $request->status? : $request['status']=0;
        $agent = agent::where('id',$id)->update($request->except('_token','_method','category'));
        // $user->categories()->sync($request->categories);
        Agent::find($id)->categories()->sync($request->category);
        return redirect(route('agent.index'))->with('message','agent updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agent::where('id',$id)->delete();
        return redirect()->back()->with('message','agent deleted successfully');
    }
}
