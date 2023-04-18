<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contacts(){
        return view('contacts');
    }

    public function sendMessage(Request $request){
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $content = $request->input('content');

        $contactMail = new ContactMail($name, $surname, $email, $content);

        //comando per inviare la mail con Laravel
        Mail::to('info@bello.it')->send($contactMail);

        return redirect()->route('homepage.cards')->with('message', 'Email Sent Success');
    }
}
