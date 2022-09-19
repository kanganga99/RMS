<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DamagedRoomController extends Controller
{
    public function indec(){
        return view('damagedrooms.index');
    }
}
