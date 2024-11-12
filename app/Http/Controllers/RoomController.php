<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Display a listing of the rooms
    public function index()
    {
        $rooms = Room::all();
        return view('roomdash', compact('rooms'));
    }

    // Show the form for creating a new room
    public function create()
    {
        return view('rooms.create');
    }

    // Store a newly created room in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url',
        ]);

        Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('roomdash')->with('success', 'Room created successfully.');
    }

    // Show the form for editing the specified room
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.update', compact('room'));
    }

    // Update the specified room in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url',
        ]);

        $room = Room::findOrFail($id);

        $room->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('roomdash')->with('success', 'Room updated successfully.');
    }

    // Remove the specified room from storage
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('roomdash')->with('success', 'Room deleted successfully.');
    }
}
