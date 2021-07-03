<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request)
    {
      $rooms = Room::all();

        return view('index', compact('rooms'));
    }

}
