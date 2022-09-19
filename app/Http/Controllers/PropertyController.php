<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PropertyController extends Controller
{
    public function post(post $post){
        // $post=post::get()->all();
        // dd($post);
        // return $post;

        return view('post',compact('post'));

    }
}