<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::get();
        return view('events.index', compact("events"));
        dd($events);
    }

    public function show($event){
        $event = Event::find($event);
        return view('events.show', compact("event"));
    }
    public function create(){
        $users = User::all()->pluck('id');
        return view('events.create', compact("users"));
    }
    public function store(Request $request){
        $user = User::findorFail($request->user_id);
        $event = new Event($request->all());
        $user->events()->save($event);

        return redirect('event');
    }
    public function destroy(Event $id){
        $id->delete();
        return redirect('event');

    }
    public function edit($event){
        $event = Event::findorFail($event);
        return view('events.edit', compact("event"));
    }
    public function update(Request $request, $event){
        $formdata = $request->all();
        $event = Event::findorfail($event);
        $event->update($formdata);
        return redirect('event');


    }
}
