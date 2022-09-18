@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-3xl font-bold underline">Sync members to MailChimp</h1>
{{--    <a class="btn btn-primary" href="{{route('manage.mailchimp.sync')}}">Sync now</a>--}}
{{--    <a class="btn btn-primary" href="{{route('manage.mailchimp.update')}}">Update now</a>--}}
    <h1 class="text-3xl font-bold underline">Member page</h1>
    <a href="{{ url('/manage/member/create')}}" class="btn btn-primary">Add new member</a>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($members as $object)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">

{{--                    <h5 class="card-title">Name:   {{ $object->name }}</h5>--}}
                    <p class="card-text"> Name: {{ $object->name }}</p>
                    <p class="card-text"> Email: {{ $object->email }}</p>
                    <p class="card-text"> Phone: {{ $object->phone }}<br></p>
                    <p class="card-text">Member ID:   {{ $object->id }}</p>
{{--                    {{\App\Http\Controllers\WelcomeController::time_elapsed_string($object->date, false)}}--}}
{{--                    {{\App\Http\Controllers\ManageController::dateDiffInDays($object->date)}}--}}
                    <p class="card-text"> Days remaining: {{\App\Http\Controllers\ManageController::dateDiffInDays($object->date)}}</p>
                    <p class="card-text"> Newsletter: {{ $object->newsletter }}</p>
                    <p class="card-text"> Terms: {{ $object->terms }}<br></p>
                    <p class="card-text"> Admin ID: {{ $object->user_id }}</p>


                    <form method="POST" action="{{ route('manage.member.delete', $object->id) }}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <a href="{{ url('/manage/member/')}}/{{$object->id }}/edit" class="btn btn-primary">update</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
{{--                <div class="card-footer">--}}
{{--                    <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                </div>--}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


