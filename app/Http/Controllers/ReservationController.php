<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservations = Reservation::with(['room', 'user'])
            ->latest()
            ->orderBy('name', 'ASC')
            ->paginate(5);
        return view('admin.reservations.index', [
            'reservations' => $reservations,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('/reservationForm', [
            'reservation' => new Reservation(),
            'room' => Room::all(),
            'user' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->name = $request->post('name');
        $reservation->arrival = $request->post('arrival');
        $reservation->departure = $request->post('departure');
        $reservation->room_id = $request->post('room_id');
        $reservation->details = $request->post('details');
        $reservation->save();
        return redirect()->back()->with(['success' => 'Reservation Form Submit Successfully']);
    }
    public function show($id)
    {

        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->back()->with('success', 'Reservation Deleted Successfully !');
    }

    public function edit(Request $request, $id)
    {
    
        $reservation  = Reservation::findOrFail($id);

        return view('admin.reservations.edit', [
            'reservation' => $reservation,
             'room' => Room::all(),
        ]);

    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $data = $request->all();
        $reservation->update($data);
      
        return redirect()->back()
        ->with('success', 'Reservation Updated Successfully!');

    }

    public function user()
    {
        $reservations = Reservation::all();
        return view('user.reser', [
            'reservations' => $reservations,
        ]);
    }
    

}
