@extends('layouts.app')
@section('content')

    Message: {{ $presidentmsg->message }}<br>
    id: {{ $presidentmsg->id }}<br>
    user_id: {{ $presidentmsg->user_id }}<br>
@endsection

