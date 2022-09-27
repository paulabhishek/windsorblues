@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold underline text-center mb-4">Museum page</h1>
<a href="{{ url('/manage/museum/create')}}" class="btn btn-primary text-center">Create new</a>

<div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            @foreach ($museum as $object)
{{--                {{dump($object->id)}}--}}
            <div class="col">
                <div class="card h-100">
                    @php
                        $id =('carouselExampleControls' . $object->id)
                    @endphp
                    <div id="{{$id}}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                @isset($object->image1)
                                    <img class="bd-placeholder-img img-fluid rounded-start d-block w-100" src="{{ asset('storage/' . $object->image1) }}"  width="800" height="400" alt="Card image cap">
                                @endisset
                            </div>
                            <div class="carousel-item active">
                                @isset($object->image2)
                                    <img class="bd-placeholder-img img-fluid rounded-start d-block w-100" src="{{ asset('storage/' . $object->image2) }}"  width="800" height="400" alt="Card image cap">
                                @endisset
{{--                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>--}}
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#{{$id}}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#{{$id}}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$object->artist_name}}</h5>
                        <p class="card-text">{{ $object->p1 }}</p>
                    </div>
                    <form method="POST" action="{{ route('manage.museum.delete', $object->id) }}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <a href="{{ url('/manage/museum/')}}/{{$object->id }}/edit" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <div class="card-footer">
{{--                        <small class="text-muted">Inducted in 2020</small>--}}
                        <small class="text-muted text-center">Inducted In {{ $object->date }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
