<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LoginResponse as loginResponseInterface;

class LoginResponse implements loginResponseInterface
{

    public function toResponse($request)
    {
        $user = Auth::user();
        if ($user->type === 'admin') {
           return redirect()->route('admin.rooms.index');
        } 
        return redirect('/');       
       
    }

}