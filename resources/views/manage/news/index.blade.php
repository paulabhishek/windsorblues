@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold underline text-center mb-4">News page</h1>
        @foreach ($news as $object)
            Title: {{ $object->title }}<br>
            author: {{ $object->author }}<br>
            p1: {{ $object->p1 }}<br>
            p2: {{ $object->p2 }}<br>
            p3: {{ $object->p3 }}<br>
            p4: {{ $object->p4 }}<br>
            p5:  {{ $object->p5 }}<br>
            image_banner: {{ $object->image_banner }}<br>
            img_highlight1: {{ $object->img_highlight1 }}<br>
            img_highlight2: {{ $object->img_highlight2 }}<br>
            img_highlight3: {{ $object->img_highlight3 }}<br>
            img_highlight4: {{ $object->img_highlight4 }}<br>
            img_highlight5: {{ $object->img_highlight5 }}<br>
            user_id: {{ $object->user_id }}<br>
            <form method="POST" action="{{ route('manage.news.delete', $object->id) }}">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                <input type="submit" value="Delete"></form>
            </form><br><br>
@endforeach
@endsection




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
