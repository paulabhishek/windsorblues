@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold underline text-center mb-4">News page</h1>
<a href="{{ url('/manage/news/create')}}" class="btn btn-primary text-center">Create news</a>
@foreach ($news as $object)
    <div class="container card my-5">
            <div class="row g-0">
            <div class="col-md-4">
{{--                <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>--}}
                    @isset($object->img_banner)
{{--                        @dump(asset('storage/' . $object->img_banner))--}}
                        <img class="bd-placeholder-img img-fluid rounded-start" src="{{ asset('storage/' . $object->img_banner) }}"  height="200px" alt="Card image cap">
                    @endisset
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">title: {{$object->title}}</h5>
                    <h5 class="card-title">author: {{$object->author}}</h5>
                    <p class="card-text">p1:{!! $object->p1 !!}</p>
                    <p class="card-text">p2:{{ $object->p2 }}</p>
                    <p class="card-text">p3:{{ $object->p3 }}</p>
                    <p class="card-text">p4:{{ $object->p4 }}</p>
                    <p class="card-text">p5:{!! $object->p5 !!}</p>
                    <p class="card-text">image_banner: {{$object->image_banner }}</p>
                    <p class="card-text">img_highlight1: {{ $object->img_highlight1 }}</p>
                    <p class="card-text">img_highlight2:{{ $object->img_highlight2 }}</p>
                    <p class="card-text">img_highlight3:{{ $object->img_highlight3 }}</p>
                    <p class="card-text">img_highlight4:{{ $object->img_highlight4 }}</p>
                    <p class="card-text">img_highlight5:{{ $object->img_highlight5 }}</p>
                    <p class="card-text">User ID: {{ $object->user_id }}</p>
                    <form method="POST" action="{{ route('manage.news.delete', $object->id) }}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <a href="{{ url('/manage/news/')}}/{{$object->id }}/edit" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
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
