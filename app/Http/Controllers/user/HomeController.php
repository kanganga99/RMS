<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

use App\Models\category;


class HomeController extends Controller
{
//     public function index(){
//         return view('user/home');
//     }
// }
public function index()
{
    
    // $users2 = User::join('users','user.id', '=', 'categories.id')
    // ->join('category_users','category_users.user_id', '=', 'user.user_id')
    // ->get(['categories.name','user.username',]);
    $posts = post::where('status',3)->orderBy('created_at','DESC')->paginate(5);
    return view('user/home',compact('posts'));
}

// public function user()
// {
//     $users = user::where('status',3)->orderBy('created_at','DESC')->paginate(5);
//     return view('user/home',compact('posts'));
// }

public function category(category $category)
{
    $posts = $category->posts();
    return view('user/home',compact('posts'));
}
}
