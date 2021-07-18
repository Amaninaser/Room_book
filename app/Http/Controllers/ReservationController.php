<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservations = Reservation::with('room','user')
            ->latest()
            ->orderBy('arrival', 'ASC')
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
        $reservation = new Reservation($request->all());
        $reservation->save();
        $request->merge([
            'room_id' => $request->post('room_id'),
        ]);
        return redirect()->route('/reservationForm')->with('success','Reservation Added Sccessufly!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect('/admin/reservations/index')
            ->with('success', 'Successfully deleted your reservation!');
    }
}
