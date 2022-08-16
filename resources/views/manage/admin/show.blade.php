@extends('layouts.app')
@section('content')
ID:   {{ $id->id }}<br>
Name:   {{ $id->name }}<br>
Level: {{ $id->level }}<br>
created_at: {{ $id->created_at }}<br>
email: {{ $id->email }}<br>
email_verified_at: {{ $id->email_verified_at }}<br><br><br><br>
@endsection
