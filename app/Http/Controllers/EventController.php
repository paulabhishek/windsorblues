<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
    public function store(){

    }
    public function destory(){

    }
    public function update(){

    }
}
