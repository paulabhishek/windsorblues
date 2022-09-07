<?php

namespace App\Http\Controllers;

use App\Mail\MembershipMail;
use App\Models\Member;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MemberController extends Controller
{
    public function index(){
        $members = Member::get();
        return view('member.index', compact("members"));
        dd($members);
    }


    public function submit(Request $request){
//        dd($request);
        Mail::to('membership@windsorblues.ca')->send(new MembershipMail($request->first_name, $request->last_name, $request->phone, $request->email, $request->newsletter,$request->terms  ));

        Mail::to('abhishek@windsorblues.ca')->send(new MembershipMail($request->first_name, $request->last_name, $request->phone, $request->email, $request->newsletter,$request->terms  ));
        return redirect('membership');
    }


    public function showForm(){
        return view('membership.index');
    }
//    public function destroy(Member $id){
//        $id->delete();
//        return redirect('member');
//    }
//
//    public function create(){
//        $users = User::all()->pluck('id');
//        return view('member.create', compact("users"));
//    }
//    public function show($member){
//        $member = Member::find($member);
//        return view('member.show', compact("member"));
//    }
//
//    public function store(Request $request){
//        $user = User::findorFail($request->user_id);
//        $member = new member($request->all());
//        $user->members()->save($member);
//
//        return redirect('member');
//    }
//
//    public function edit($member){
//        $member = Member::findorFail($member);
//        return view('member.edit', compact("member"));
//    }
//    public function update(Request $request, $member){
//        $formdata = $request->all();
//        $member = Member::findorfail($member);
//        $member->update($formdata);
//        return redirect('member');
//    }


}
