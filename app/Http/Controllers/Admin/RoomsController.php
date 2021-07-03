<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rooms = Room::when($request->room_name, function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('room_name', 'LIKE', "%$value%");
            });
        })
            ->when($request->id, function ($query, $value) {
                $query->where('id', '=', $value);
            })
            ->latest('room_name')
            ->paginate(3);
        $room_search = Room::orderBy('room_name')->get();
        return view('admin.rooms.index', compact('rooms', 'room_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $title = 'Add Room';
        return view('admin.rooms.create', [
            'room' => new Room(),
            'title' =>   $title,
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
        $request->validate(Room::validateRoles());

        $room = new Room($request->all());
        $room->save();
        return redirect()->route('admin.rooms.index')->with(
            'success',
            'Romm ($room->room_name) added Sccessufly!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function show($id)
    {
        $room = Room::findOrFail($id);
        if ($room == null) {
            abort(404);
        }
        return view('admin.rooms.show', compact('room'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $room = Room::findOrFail($id);
        if ($room == null) {
            abort(404);
        }
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $request->validate(Room::validateRoles());
        $room->update($request->all());

        return redirect()->route('admin.rooms.index')->with(
            'success',
            'Romm ($room->room_name) Updated Sccessufly!'
        );
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('admin.rooms.index')->with(
            'success',
            'Romm ($room->room_name) Deleted Sccessufly!'
        );
    }
}
