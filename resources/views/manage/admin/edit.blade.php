@extends('layouts.app')
@section('content')
<h1>Edit Admin</h1>

<form method="POST" action="{{ route('manage.admin.update', $id->id) }}">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <label for="name">Name:</label>
    <input name="name" type="text" value="{{$id->name}}"><br>
    <label for="email">Email</label>
    <input name="email" type="email" value="{{$id->email}}"><br>
    <label for="password">Password</label>
    <input name="password" type="password" value="{{$id->password}}"><br>
    <label for="level">Level</label>
    <select name="level">
        <option value="1">1</option>
        <option value="2">2</option>
    </select><br>
    <input type="submit" value="update"><br>
</form> <br><br>

@endsection
