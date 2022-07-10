<?php

namespace App\Http\Controllers;

use App\Models\Member;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MemberController extends Controller
{
    public function index(){
        $members = Member::get();
        return view('members.index', compact("members"));
        dd($members);
    }

    public function sendForm(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        $formData = [
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'email'=>$request->email
        ];
        Mail::send('welcome',$formData, function($message)use($formData){
            $message->to('1998vabhishekpaul@gmail.com')
                ->from($formData['email'], $formData['first_name']);
        });
        return redirect()->back()->with('success', 'Email sent');


//        return view('members.memberForm',);
    }
}
