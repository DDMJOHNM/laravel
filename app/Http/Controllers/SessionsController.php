<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use JsonSchema\Exception\ValidationException;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success','Goodbye!');
    }

    public function create(){

        return view('sessions.create');
    }

    public function store(){

       $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success','Welcome Back');
        }

        throw ValidationValidationException::withMessages([
            'email' => 'Your credentials could not be verified'
        ]);
    }
}
