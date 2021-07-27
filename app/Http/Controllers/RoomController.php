<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  
  public function show($slug)
  {
    $rooms = Room::all(); 
    $room = Room::where('slug', $slug)->firstOrFail();
    return view('rooms.show', [
      'room' => $room,
      'image' => $room->images,
      'rooms' => $rooms,
    ]);
  }
}
