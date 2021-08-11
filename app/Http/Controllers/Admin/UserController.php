<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {    
        $admin = User::all();
        return view('admin.users.show', [
            'admin' => $admin,
        ]);
    }

    public function index(Request $request)
    {
        $users = User::when($request->name, function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('name', 'LIKE', "%$value%")
                    ->orWhere('name', 'LIKE', "%{$value}%");
            });
        })
            ->when($request->id, function ($query, $value) {
                $query->where('id', '=', $value);
            })
            ->latest('name')
            ->paginate(3);
        $user_search = User::orderBy('name')->get();
      
        return view('admin.users.index',compact('users','user_search'));
    }

    public function edit(Request $request, $id)
    {
    
        $user  = User::findOrFail($id);

        return view('admin.users.edit', [
            'user' => $user,
        ]);

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->update($data);
      
        return redirect('/admin/show')
        ->with('success', 'Admin Updated!');

    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete(); 
      
        return redirect('/admin/users')
            ->with('success', 'Successfully deleted your user!');
    }

   

    public function user(Request $request)
    {    
        $user = User::all();
        return view('user.show', [
            'user' => $user,
        ]);
    }

   
}
