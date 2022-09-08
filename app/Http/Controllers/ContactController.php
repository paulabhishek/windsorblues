<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');

    }

    public function submit(Request $request)
    {
        Mail::mailer('contact')->to('abhishek@windsorblues.ca')->send(new ContactMail($request->name, $request->email, $request->message ));

        Mail::mailer('contact')->to('contact@windsorblues.ca')->send(new ContactMail($request->name, $request->email, $request->message ));
       return redirect('/');
    }

}
