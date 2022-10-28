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
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
        ]);
        Mail::mailer('contact')->to('abhishek@windsorblues.ca')->send(new ContactMail($validatedData['name'], $validatedData['email'], $validatedData['message'] ));

        Mail::mailer('contact')->to('contact@windsorblues.ca')->send(new ContactMail($validatedData['name'], $validatedData['email'], $validatedData['message'] ));
       return view('contact.index')->with('success');
    }

}
