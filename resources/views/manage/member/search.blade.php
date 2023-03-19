@extends('layouts.app')
@section('content')

    <div class="container">
        <form class="d-flex" role="search" accept-charset="utf-8" method="GET" action=" {{route('manage.member.search')}}">
            <input class="form-control me-2" name="search" type="search" placeholder="search by name, phone, email" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <h2 class="text-3xl font-bold ">search result for "{{$get_name}}"</h2>
        @if($member->isEmpty())
            <h5 class="text-danger">no records match</h5>
        @endif
        <a href="{{ url('/manage/member')}}" class="btn btn-primary mb-2">Go back</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($member as $object)
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
                        {{--                <div class="card-footer">--}}
                        {{--                    <small class="text-muted">Last updated 3 mins ago</small>--}}
                        {{--                </div>--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


