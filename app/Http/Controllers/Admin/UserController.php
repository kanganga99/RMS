<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;


use App\Models\admin\role;




class UserController extends Controller
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
        // $users = 
        // DB::table('users')->where('users.id','all')
        // ->join('categories', 'categories.id', '=', 'users.id');
    
        // $users = DB::table('users')
        // ->select('username')
        // ->join('categories', 'categories.category_id', '=', 'users.id')
        // ->where('countries.country_name', $country)
        // ->get();  
        $users = User::all(); 
        return  view('admin.user.show',compact('users'));
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
       return view('admin.user.create', compact('categories'));
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
            'phone' => 'required|numeric',

        ]);

        $request['password'] = bcrypt($request->password);
        $user = new user;

        $user =User::create($request->all());
        $user->save(); 

        // $user->roles()->sync($request->role);
        $user ->categories()->sync($request->categories);
        //  if (Auth::attempt(['email' => $email, 'password' => $password, 'category_id' => '2'])) {
        //         $user = Auth::User();
        //         Session::put('name', $user->name);
        //     }
       
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
        $user=User::find($id);
        // $user = User::with ('categories')->where('id',$id)->first();
        // $category = category::find($category_id);

        // $roles = role::all();
        $categories = category::all();

        return view('admin.user.edit',compact('categories','user'));
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

        // $user = user::find($id);

        // $request->status? : $request['status']=0;
        // $user=User::find($id);
        // $request->status? : $request['status'] = 3;
        // $user = User::with ('category_id')->update($request->except('_token','_method'));

        // $user = User::where('id',$id)->update($request->except('_token','_method'));
        // $user->status = $request->status;
        // $user = user::find($id);
        // $user->category_id = $data['category_id'];
        // $request->categories;
        // User::find($id)->roles()->sync($request->role);


        // $user->categories()->sync($request->categories);
        // $user->update();

        // return redirect(route('user.index'))->with('message','user updated');



        $request->status? : $request['status']=0;
        $user = user::where('id',$id)->update($request->except('_token','_method','category'));
        // $user->categories()->sync($request->categories);
        User::find($id)->categories()->sync($request->category);
        return redirect(route('user.index'))->with('message','user updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::where('id',$id)->delete();
        return redirect()->back()->with('message','user deleted successfully');
    }
}
