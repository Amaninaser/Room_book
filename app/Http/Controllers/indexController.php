<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::all();
        return view('index', compact('rooms'));
    }
    public function room(Request $request)
    {
        $rooms = Room::all();
        return view('room', compact('rooms'));
    }
}
