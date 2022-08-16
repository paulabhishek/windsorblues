@extends('layouts.app')
@section('content')
<h1>Create Admin. (Has to have level 2 access)</h1>
@can('isLevelTwo')
    <form method="POST" action="{{ route ('manage.admin.store') }}">
        {{ csrf_field() }}
        <label for="name"> Name:</label>
        <input name="name" type="text" ><br>
        <label for="email">Email</label>
        <input name="email" type="email" ><br>
        <label for="password">Password</label>
        <input name="password" type="password" ><br>
        <label for="level">Level</label>
        <select name="level">
                <option value="1">1</option>
                <option value="2">2</option>
        </select><br>
        <input type="submit" value="Create"><br>
    </form>

@endcan
@endsection

