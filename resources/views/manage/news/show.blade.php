@extends('layouts.app')
@section('content')

    ID: {{ $news->id }}<br>
    Title: {{ $news->title }}<br>
    author: {{ $news->author }}<br>
    p1: {{ $news->p1 }}<br>
    p2: {{ $news->p2 }}<br>
    p3: {{ $news->p3 }}<br>
    p4: {{ $news->p4 }}<br>
    p5:  {{ $news->p5 }}<br>
    image_banner: {{ $news->image_banner }}<br>
    img_highlight1: {{ $news->img_highlight1 }}<br>
    img_highlight2: {{ $news->img_highlight2 }}<br>
    img_highlight3: {{ $news->img_highlight3 }}<br>
    img_highlight4: {{ $news->img_highlight4 }}<br>
    img_highlight5: {{ $news->img_highlight5 }}<br>
    user_id: {{ $news->user_id }}<br>
@endsection

