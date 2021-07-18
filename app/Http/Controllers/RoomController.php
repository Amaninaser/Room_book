<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function room(Request $request)
  {
    $room = Room::all();
    return view('rooms.show', compact('room'));
  }
  
  public function show($slug)
  {
    $room = Room::where('slug', $slug)->firstOrFail();
    return view('rooms.show', [
      'room' => $room,
      'image' => $room->images,
    ]);
  }
}
