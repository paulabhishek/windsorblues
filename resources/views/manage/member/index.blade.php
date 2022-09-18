@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-3xl font-bold underline">Sync members to MailChimp</h1>
    <a class="btn btn-primary" href="{{route('manage.mailchimp.sync')}}">Sync now</a>
    <a class="btn btn-primary" href="{{route('manage.mailchimp.update')}}">Update now</a>
    <h1 class="text-3xl font-bold underline">Member page</h1>
    <a href="{{ url('/manage/member/create')}}" class="btn btn-primary">Add new member</a>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($members as $object)
        <div class="col">
            <div class="card h-100">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>

                <div class="card-body">

                    <h5 class="card-title">Name:   {{ $object->name }}</h5>
                    <p class="card-text"> Email: {{ $object->email }}</p>
                    <p class="card-text"> phone: {{ $object->phone }}<br></p>
                    <h5 class="card-text">member ID:   {{ $object->id }}</h5>
                    <p class="card-text"> Date: {{ $object->date }}</p>
                    <p class="card-text"> newsletter: {{ $object->newsletter }}</p>
                    <p class="card-text"> terms: {{ $object->terms }}<br></p>
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


