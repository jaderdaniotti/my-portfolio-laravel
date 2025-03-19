<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class JadersWebController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function sendemail(Request $request){

        $request->validate([
            'email' => ['required','email'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string', 'max:255'],
        ]);
        $mail = [
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'message' => $request->message,
        ];
        Mail::to($mail['email'])->send(new ContactMail($mail));
        return redirect('/contact')->with('success', 'Email inviato con successo');
    }
    public function about(){
        return view('about');
    }
    public function skills(){
        return view('skills');
    }
}
