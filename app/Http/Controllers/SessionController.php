<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    public function create()
    {

        return view('sessions.create');
    }

    public function store()
    {
       $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/home');
        }

        throw ValidationException::withMessages([
            'email' => 'Nombre de usuario incorrecto'
        ]);


    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
