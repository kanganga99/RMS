<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;
// use App\Models\User;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\DB;
use App\Models\category_user;
use \Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function userHome()
    // {
    //     return view('home',["msg"=>"am user role"]);
    // }
    // public function agentHome()
    // {
    //     return view('home',["msg"=>"am agent role"]);
    // }
    // public function adminHome()
    // {
    //     return view('home',["msg"=>"am admin role"]);
    // }
    public function index()
    {
        // $data = DB::table('categories')->select('id','name')->where('name', '=','$name')->limit(1)->get();
        
        // if(Session::has('category_id')){
        //     $data=Category::where('id','=', Session::get('id'))->first();
        // }
    //     $users = 
    //   DB::table('users')->where('users.id','all')
    // ->join('categories', 'categories.id', '=', 'users.id');

        $categories = category_user::all();

        return view('/home',compact('categories'));
    }
    // // public function post()
    // // {
    // //     $posts = post::where('status',3)->orderBy('created_at','DESC')->paginate(5);
    // //     return view('user/home',compact('posts'));
    // // }
    // public function category(category $category)
    // {
    //     $posts = $category->posts();
    //     return view('/home',compact('posts'));
    // }















    // {
        // $users = User::where('status',3);
        // $users = $category->users();
        // $users = category::all();
        // return view('/home',compact('users'));
    // }
    // public function category(category $category)
    // {
    //     $users = $category->users();
    //     return view('home',compact('users'));
    // }
    //     public function index(category $category)
    // {
    //     $users = $category->users();
    //     return view('/home',compact('users'));
    // }






//     public function index()
// {
//     $posts = post::where('status',3)->orderBy('created_at','DESC')->paginate(5);
//     return view('user/home',compact('posts'));
// }

// public function user()
// {
//     $users = user::where('status',3)->orderBy('created_at','DESC')->paginate(5);
//     return view('user/home',compact('posts'));
// }

// public function category(category $category)
// {
//     $posts = $category->posts();
//     return view('user/home',compact('posts'));
// }
}

