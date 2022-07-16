@extends('welcome')
<h1 class="text-3xl font-bold underline">Member page</h1>
@foreach ($members as $object)
    Name:   {{ $object->name }}<br>
    Email: {{ $object->email }}<br>
    phone: {{ $object->phone }}<br>
    newsletter: {{ $object->newsletter }}<br>
    Admin ID: {{ $object->user_id }}<br>
    <form method="POST" action="{{ route('manage.member.delete', $object->id) }}">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <input type="submit" value="Delete"></form>
    </form> <br><br>
@endforeach



