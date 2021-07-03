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
        $guests = Guest::all();
        return view('admin.guests.index',compact('guests'));
    }

    public function edit(Request $request, $id)
    {
    
        $guest  = Guest::findOrFail($id);
        $city   = City::all();
        if($guest == null){
            abort(404);
        }
        return view('admin.guests.edit', compact('guest','city'));

    }

    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);
       // $request->validate(Guest::validateRoles());
        $data = $request->all();
        $guest->update($data);
      
        return redirect()->route('admin.guests.index')
        ->with('success', 'guest Updated!');

    }

    public function destroy($id)
    {
        $guests = Guest::findOrFail($id);
        $guests->delete(); 
      
        return redirect()->route('admin.guests.index')
            ->with('success', 'Successfully deleted your guest!');
    }
}
