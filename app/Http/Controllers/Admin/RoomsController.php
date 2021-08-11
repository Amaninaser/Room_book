<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use GMP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\SmartPunct\PunctuationParser;
use Illuminate\Support\Str;


class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Room::class);

        $rooms = Room::when($request->room_name, function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('room_name', 'LIKE', "%$value%")
                    ->orWhere('rooms.room_type', 'LIKE', "%{$value}%");
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
        $this->authorize('create', Room::class);

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
        $this->authorize('create', Room::class);

        $request->validate(Room::validateRoles());
        $request->merge([
            'slug' => Str::slug($request->post('room_name')),
        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/image', [
                'disk' => 'uploads'
            ]);
        }


        $room = Room::create($data);

        //Gallery
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $image_path = $file->store('/image', [
                    'disk' => 'uploads'
                ]);

                $room->images()->create([
                    'image_path' => $image_path,
                ]);
            }
        }

        return redirect()->route('admin.rooms.index')
            ->with(
                'success',
                "Room ($room->room_name) added Sccessufly!"
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
        $this->authorize('view',$room);

        return view('/admin/rooms/show', compact('room'));
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
        $this->authorize('update', $room);

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
        if ($room == null) {
            abort(404);
        }
        $this->authorize('update', $room);

        $request->validate(Room::validateRoles());

        //image
        $data = $request->all();
        $previous = false;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/image', [
                'disk' => 'uploads'
            ]);
            $previous = $room->image;
        }

        $room->update($data);
        if ($previous) {
            Storage::disk('uploads')->delete($previous);
        }

        //Gallery
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $image_path = $file->store('/image', [
                    'disk' => 'uploads'
                ]);

                $room->images()->create([
                    'image_path' => $image_path,
                ]);
            }
        }

        return redirect()->route('admin.rooms.index')
            ->with(
                'success',
                "Room ($room->room_name) Updated Sccessufly!"
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

        

        return redirect()->route('admin.rooms.index')
            ->with('success', "Room ($room->room_name) Deleted Sccessufly!");
    }
}
