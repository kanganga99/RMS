<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VacantRoom;


class VacantRoomController extends Controller
{
    public function index()
    {
        $vacantrooms = VacantRoom::all();
        return view('vacantrooms.index')->with('vacantrooms', $vacantrooms);
    }

    public function create()
    {
        return view('vacantrooms.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        VacantRoom::create($input);
        return redirect('vacantrooms')->with('flash_message', 'Vacant Room Added successfully!');
    }

    public function edit($id)
    {
        $vacantroom = VacantRoom::find($id);
        return view('vacantrooms.edit')->with('vacantrooms', $vacantroom);
    }

    public function update(Request $request, $id)
    {
        $vacantroom = VacantRoom::find($id);
        $input = $request->all();
        $vacantroom->update($input);
        return redirect('vacantrooms')->with('flash message', 'vacant room Updated!');
    }
}
