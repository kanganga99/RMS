<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;



class RoomsController extends Controller
{
   
    public function index()
    {

    $rooms  = Room::where('post_id',optional(Auth::guard('agent')->user())->id)->get();
        return view('agent.rooms.index')->with('rooms', $rooms);
    }

    public function create()
    {
        return view('agent.rooms.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Room::create($input);
        session()->flash('success', 'Added successfully');
        return redirect('agent/rooms');
    }

    public function edit($id)
    {
        $room = Room::find($id);
        return view('agent.rooms.edit')->with('rooms', $room);
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $input = $request->all();
        $room->update($input);
        return redirect('agent/rooms')->with('flash message', 'Room Updated!');
    }
    public function destroy($id)
    {
        Room::destroy($id);
        return redirect('agent/rooms')->with('flash message', 'Room deleted');
    }
}
