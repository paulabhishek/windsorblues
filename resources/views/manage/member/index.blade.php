@extends('layouts.app')
@section('content')

<div class="container">
    <form class="d-flex" role="search" accept-charset="utf-8" method="GET" action=" {{route('manage.member.search')}}">
                    <input class="form-control " name="search" type="search" placeholder="search by name, phone, email" aria-label="Search" required>
                    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <h1 class="text-3xl font-bold underline">Sync members to MailChimp</h1>
    <form method="post" action="{{route('manage.mailchimp.update')}}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">update</button>
    </form>
        <a class="btn btn-primary mt-2" href="{{route('manage.mailchimp.sync')}}">Sync</a>



    {{--    <a class="btn btn-primary" >Sync</a>--}}

    {{--        <a class="btn btn-primary" href="{{route('manage.mailchimp.update')}}">Update</a>--}}

    <h1 class="text-3xl font-bold underline">Member page</h1>
    <div class="dropdown pb-3">
        <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filter here
        </a>
        <ul class="dropdown-menu">
            @php
                function tgPanel(){
                    dump('Hello');
                }
            @endphp
{{--            {{route ('manage.member.update', $member->id)}}--}}
            <li><a class="dropdown-item" href="{{ route('manage.member.index', 'active') }}">Active members</a></li>
            <li><a class="dropdown-item" href="{{ route('manage.member.index', 'expired') }}">Expired members</a></li>
            <li><a class="dropdown-item" href="{{ route('manage.member.index', 'newsletter') }}">Members receiving newsletter</a></li>
            <li><a class="dropdown-item" href="{{ route('manage.member.index', 'website') }}">Members opted for newsletter via website</a></li>
            <li><a class="dropdown-item" href="{{ route('manage.member.index', 'admin') }}">Members added by Admins</a></li>
        </ul>
{{--        {{\App\Http\Controllers\ManageController::dateDiffInDays($object->date)}}--}}
    </div>

{{--    <p class="small-text">(sorting function work in progress  )</p>--}}


    <a href="{{ url('/manage/member/create')}}" class="btn btn-primary mb-3">Add new member</a>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($members as $object)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
{{--                <h5 class="card-title">Name:   {{ $object->name }}</h5>--}}
                    <p class="card-text"> Name: {{ $object->name }}</p>
                    <p class="card-text"> Email: {{ $object->email }}</p>
                    <p class="card-text"> Phone: {{ $object->phone }}<br></p>
                    <p class="card-text">Member ID:   {{ $object->id }}</p>
                    <p class="card-text">Membership end day:   {{ $object->date }}</p>
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
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</a>

                        <div class="modal fade" id="exampleModalCenter" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalCenterTitle">Removing membership </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you SURE?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">cancel</button>
                                        <button class="btn btn-danger" type="submit">Yes, Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


