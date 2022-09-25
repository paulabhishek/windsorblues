@extends('layouts.app')
@section('content')

    <h1 class="text-3xl font-bold underline text-center">Events page</h1>
    <div class="container">
        <a href="{{ url('/manage/event/create')}}" class="btn btn-primary">Create</a>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($events as $object)
                <div class="col">
                    <div class="card h-100">
                        @isset($object->file)
                            <img class="card-img-top" src="{{ asset('storage/' . $object->file) }}"  height="200px" alt="Card image cap">
                        @endisset
                        {{--                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $object->name }}</h5>
                            <p class="card-text">{{ $object->description }}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <p style="display:inline" class="card-text px-1 ">{{ $object->artist }}</p><br><br>
                            <p style="display:inline" class="card-text px-1 ">{{ $object->yt_url }}</p><br><br>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            <p style="display:inline" class="card-text px-1 ">{{ $object->date }}</p><br><br>
                            <form method="POST" action="{{ route('manage.event.delete', $object->id) }}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{ url('/manage/event/')}}/{{$object->id }}/edit" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form> <br><br>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



