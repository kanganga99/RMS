<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VacantRoom;


class AdminVacantRoomController extends Controller
{
    public function index()
    {
        $vacantrooms = VacantRoom::all();
        return view('admin.vacantrooms.index')->with('vacantrooms', $vacantrooms);
    }

    public function create()
    {
        return view('admin.vacantrooms.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        VacantRoom::create($input);
        session()->flash('success', 'Added successfully');
        return redirect('admin/vacantrooms');
    }

    public function edit($id)
    {
        $vacantroom = VacantRoom::find($id);
        return view('admin.vacantrooms.edit')->with('vacantrooms', $vacantroom);
    }

    public function update(Request $request, $id)
    {
        $vacantroom = VacantRoom::find($id);
        $input = $request->all();
        $vacantroom->update($input);
        return redirect('admin/vacantrooms')->with('flash message', 'vacant room Updated!');
    }
    public function destroy($id)
    {
        VacantRoom::destroy($id);
        return redirect('admin/vacantrooms')->with('flash message', 'Vacant Room deleted');
    }
}

