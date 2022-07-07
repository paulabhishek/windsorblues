<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Mail\ContactMail;

class MemberController extends Controller
{
    public function index(){
        $members = Member::get();
        return view('members.index', compact("members"));
        dd($members);
    }

    public function emailForm(Request $request){
        $data = ['first_name' =>$request->first_name ,
                 'last_name'=>$request->last_name,
                 'phone'=>$request->phone,
                  'email'=>$request->email
        ];

        Mail::to('1998vabhishekpaul@gmail.com');
    }
}
