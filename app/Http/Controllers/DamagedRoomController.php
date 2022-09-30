<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DamagedRoom;


class DamagedRoomController extends Controller
{
   
    public function index()
    {
        $damagedrooms = DamagedRoom::all();
        return view('damagedrooms.index')->with('damagedrooms', $damagedrooms);
    }

    public function create()
    {
        return view('damagedrooms.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        DamagedRoom::create($input);
        return redirect('damagedrooms')->with('flash_message', 'Vacant Room Added successfully!');
    }

    public function edit($id)
    {
        $damagedrooms = DamagedRoom::find($id);
        return view('damagedrooms.edit')->with('damagedrooms', $damagedrooms);
    }

    public function update(Request $request, $id)
    {
        $damagedroom = DamagedRoom::find($id);
        $input = $request->all();
        $damagedroom->update($input);
        return redirect('damagedrooms')->with('flash message', 'damaged room Updated!');
    }
    public function destroy($id)
    {
        DamagedRoom::destroy($id);
        return redirect('damagedrooms')->with('flash message', 'damaged Room deleted');
    }
}
