<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\News;
use App\Models\User;
//use http\Env\Response;
use Illuminate\Auth\Access\Events\GateEvaluated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ManageController extends Controller
{
    public function index(){
        return view('manage.index');
    }

//NEWS
    public function newsIndex(){
        $news = NEWS::get();
//        dd($news);
        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.news.index', compact("news"));
    }

    public function newsShow($news){
        $news = News::find($news);
        return view('manage.news.show', compact("news"));
    }

    public function newsCreate(){
        $users = User::all()->pluck('id');
        return view('manage.news.create', compact("users"));
    }


    public function newsStore(Request $request){
        $user = User::findorFail($request->user_id);
        $news = new news($request->all());
        $user->news()->save($news);
        return redirect('manage/news');
    }



    public function newsDestroy(User $id){
        $id->delete();
        return redirect('manage/news');
    }

    public function newsEdit($id){
        $id = News::findorFail($id);
        return view('manage.news.edit', compact("id"));
    }

    public function newsUpdate(Request $request, $news){
        $formdata = $request->all();
        $news = News::findorfail($news);
        $news->update($formdata);
        return redirect('manage/news');
    }


//ADMIN
    public function adminIndex(){
        $admin = User::get();
        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.admin.index', compact("admin"));
        dd($admin);
    }

    public function adminShow($id){
        $id = User::find($id);

        return view('manage.admin.show', compact("id"));
    }

    public function adminCreate(){
        $users = User::all()->pluck('id');
        return view('manage.admin.create', compact("users"));
    }

    public function adminStore(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'level' => ['required', 'integer', 'digits_between:1,2'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level
        ]);
        event(new Registered($user));
        return redirect('manage/admin');
    }

    public function adminDestroy(User $id){
        $id->delete();
        return redirect('manage/admin');
    }

    public function adminEdit($id){
        $id = User::findorFail($id);
        return view('manage.admin.edit', compact("id"));
    }

    public function adminUpdate(Request $request, $id){
        $formdata = $request->all();
        $id = User::findorfail($id);
        $id->update($formdata);
        return redirect('manage/admin');
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
