@extends('layouts.app')
@section('content')
@foreach ($admin as $object)
    Name:   {{ $object->name }}<br>
    Email: {{ $object->email }}<br>
    Level: {{ $object->level }}<br>
    user_id: {{ $object->id }}<br>
    <form method="POST" action="{{ route('manage.admin.delete', $object->id) }}">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <input type="submit" value="Delete"></form>
    </form> <br><br>
@endforeach
@endsection
