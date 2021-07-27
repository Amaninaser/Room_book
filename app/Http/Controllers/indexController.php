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
        $rooms = Room::when($request->room_type, function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('room_price', 'LIKE', "%$value%")
                    ->orWhere('rooms.room_type', 'LIKE', "%{$value}%");
            });
        })
            ->when($request->id, function ($query, $value) {
                $query->where('id', '=', $value);
            })
            ->latest('room_type')
            ->paginate(3);
       
        return view('room', compact('rooms'));
    }
}
