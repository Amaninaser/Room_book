<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestsController extends Controller
{
    public function index(Request $request)
    {
        $guests = Guest::latest('first_name')
        ->paginate(3)
        ->all();
        return view('admin.guests.index',compact('guests'));
    }

    public function edit(Request $request, $id)
    {
    
        $guest  = Guest::findOrFail($id);

        return view('admin.guests.edit', [
            'guest' => $guest,
             'city' => City::all(),
        ]);

    }

    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);
        $data = $request->all();
        $guest->update($data);
      
        return redirect('/admin/guests')
        ->with('success', 'guest Updated!');

    }

    public function destroy($id)
    {
        $guests = Guest::findOrFail($id);
        $guests->delete(); 
      
        return redirect('/admin/guests')
            ->with('success', 'Successfully deleted your guest!');
    }
}
