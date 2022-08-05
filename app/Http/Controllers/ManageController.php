<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\User;
//use http\Env\Response;
use Illuminate\Auth\Access\Events\GateEvaluated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class ManageController extends Controller
{
    public function index(){
        return view('manage.index');
    }
//ADMIN
    public function adminIndex(){
        $admin = User::get();

        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.admin.index', compact("admin"));
//        dd($admin);
    }

    public function adminShow($admin){
        $admin = User::find($admin);
        return view('manage.admin.show', compact("admin"));
    }


//EVENTS
    public function eventIndex(){
        $events = Event::get();
        return view('manage.events.index', compact("events"));
//        dd($events);
    }

    public function eventShow($event){
        $event = Event::find($event);
        return view('manage.events.show', compact("event"));
    }
    public function eventCreate(){
        $users = User::all()->pluck('id');
        return view('manage.events.create', compact("users"));
    }
    public function eventStore(Request $request){
        $user = User::findorFail($request->user_id);
        $event = new Event($request->all());
        $user->events()->save($event);

        return redirect('manage/event');
    }
    public function eventDestroy(Event $id){
        $id->delete();
        return redirect('manage/event');
    }
    public function eventEdit($event){
        $event = Event::findorFail($event);
        return view('manage.events.edit', compact("event"));
    }
    public function eventUpdate(Request $request, $event){
        $formdata = $request->all();
        $event = Event::findorfail($event);
        $event->update($formdata);
        return redirect('manage/event');
    }

//MEMBER
    public function memberIndex(){
        $members = Member::get();
        return view('manage.member.index', compact("members"));
//        dd($members);
    }
    public function memberDestroy(Member $id){
        $id->delete();
        return redirect('manage/member');
    }

    public function memberCreate(){
        $users = User::all()->pluck('id');
        return view('manage.member.create', compact("users"));
    }
    public function memberShow($member){
        $member = Member::find($member);
        return view('manage.member.show', compact("member"));
    }


    public function memberStore(Request $request){
        $user = User::findorFail($request->user_id);
        $member = new member($request->all());
        $user->members()->save($member);

        return redirect('manage/member');
    }

    public function memberEdit($member){
        $member = Member::findorFail($member);
        return view('manage.member.edit', compact("member"));
    }
    public function memberUpdate(Request $request, $member){
        $formdata = $request->all();
        $member = Member::findorfail($member);
        $member->update($formdata);
        return redirect('manage/member');
    }
}
