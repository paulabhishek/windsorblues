@extends('layouts.app')
@section('content')
ID:   {{ $event->id }}<br>
Name:   {{ $event->name }}<br>
Location: {{ $event->location }}<br>
des: {{ $event->description }}<br>
artist: {{ $event->artist }}<br>
user_id: {{ $event->user_id }}<br>
yt_url: {{ $event->yt_url }}<br><br><br>
@endsection
