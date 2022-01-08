<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmail;

class MessageController extends Controller
{
    public function sendMessage(){

        request()->validate([
            'body' => 'required'
        ]);

       $to = 'jmason176@gmail.com';
        Mail::to($to)->send(new UserEmail());

        if (Mail::failures()) {
            session()->flash('error','There was an issue with sending your email');
        } else{
            session()->flash('success','Your message has been sent');
        }

        return redirect('/');
    }
    public function index(){
        return view('email.send');
     }


}
