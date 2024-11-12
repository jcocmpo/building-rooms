<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // Display the admin dashboard
    public function index()
    {
        return view('pages.admindash');
    }

    // Display the room dashboard
    public function showRoomDash()
    {
        $rooms = Room::all();
        return view('pages.roomdash', compact('rooms'));
    }
}
