<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DamagedRoom;

class AgentDamagedRoomController extends Controller
{
    public function index()
    {
        $damagedrooms = DamagedRoom::all();
        return view('agent.damagedrooms.index')->with('damagedrooms', $damagedrooms);
    }

    public function create()
    {
        return view('agent.damagedrooms.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        DamagedRoom::create($input);
        session()->flash('success', 'Added successfully');
        return redirect('agent/damagedrooms');
    }

    public function edit($id)
    {
        $damagedrooms = DamagedRoom::find($id);
        return view('agent.damagedrooms.edit')->with('damagedrooms', $damagedrooms);
    }

    public function update(Request $request, $id)
    {
        $damagedroom = DamagedRoom::find($id);
        $input = $request->all();
        $damagedroom->update($input);
        return redirect('agent/damagedrooms')->with('flash message', 'damaged room Updated!');
    }
    public function destroy($id)
    {
        DamagedRoom::destroy($id);
        return redirect('agent/damagedrooms')->with('flash message', 'damaged Room deleted');
    }
}
