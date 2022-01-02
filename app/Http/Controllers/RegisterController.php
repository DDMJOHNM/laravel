<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create (){
       return view('register.create');
   }

   public function store (){
       //Laravel validation
       $attributes = request()->validate([
            'name' => 'required',
            'username' =>'required|max:255|min:3',
            'email' =>'required|email|max:255',
            'password' => 'required|min:7',
        ]);

        User::create($attributes);

        return redirect('/?page=1');
   }
}
