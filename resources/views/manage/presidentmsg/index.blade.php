@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold underline text-center mb-4">presidentmsg</h1>
<a href="{{ url('/manage/presidentmsg/create')}}" class="btn btn-primary text-center">Create MSG</a>
@foreach ($presidentmsg as $object)
    <div class="container">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text">message:{{ $object->message }}</p>
                    <p class="card-text">User ID: {{ $object->user_id }}</p>
                    <a href="{{ url('/manage/presidentmsg/')}}/{{$object->id }}/edit" class="btn btn-primary">Update</a>

{{--                    <form method="POST" action="{{ route('manage.presidentmsg.delete', $object->id) }}">--}}
{{--                        {{method_field('DELETE')}}--}}
{{--                        {{csrf_field()}}--}}
{{--                        <a href="{{ url('/manage/presidentmsg/')}}/{{$object->id }}/edit" class="btn btn-primary">Edit</a>--}}
{{--                        <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
