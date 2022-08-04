@extends('layouts.app')
@section('content')
<h1>Create Member</h1>
<form method="POST" action="{{ route ('manage.member.store') }}">
    {{ csrf_field() }}
    <label for="name">Member Name:</label>
    <input name="name" type="text" ><br>
    <label for="email">Member email</label>
    <input name="email" type="email" ><br>
    <label for="phone">Member Phone</label>
    <input name="phone" type="tel" ><br>
    <label for="newsletter">Newsletter</label>
    <input name="newsletter" type="text" ><br>
    <label for="user_id">User</label>
    <select name="user_id">
        @foreach($users as $id )
            <option value="{{$id}}">{{$id}}</option>
        @endforeach
    </select><br>
    <input type="submit" value="Create"><br>
</form>
@endsection
