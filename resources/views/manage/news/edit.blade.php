@extends('layouts.app')
@section('content')
    <h1>Update News</h1>
    <form method="POST" action="{{ route ('manage.news.update', $news->id) }}">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <input name="title" type="text" value="{{$news->title}}"><br>
        <label for="author">Author:</label>
        <input name="author" type="text" value="{{$news->author}}"><br>
        <label for="p1">P1:</label>
        <input name="p1" type="text" value="{{$news->p1}}"><br>
        <label for="p2">P2:</label>
        <input name="p2" type="text" value="{{$news->p2}}"><br>
        <label for="p3">P3:</label>
        <input name="p3" type="text" value="{{$news->p3}}"><br>
        <label for="p4">P4:</label>
        <input name="p4" type="text" value="{{$news->p4}}"><br>
        <label for=p5">P5:</label>
        <input name="p5" type="text" value="{{$news->p5}}"><br>

        <label for="img_banner">Image_banner:</label>
        <input name="img_banner" type="text" value="{{$news->img_banner}}"><br>

        <label for="img_highlight1">Image_banner1:</label>
        <input name="img_highlight1" type="text" value="{{$news->img_highlight1}}"><br>
        <label for="img_highlight2">Image_banner2:</label>
        <input name="img_highlight2" type="text" value="{{$news->img_highlight2}}"><br>
        <label for="img_highlight3">Image_banner3:</label>
        <input name="img_highlight3" type="text" value="{{$news->img_highlight3}}"><br>
        <label for="img_highlight4">Image_banner4:</label>
        <input name="img_highlight4" type="text" value="{{$news->img_highlight4}}"><br>
        <label for="img_highlight5">Image_banner5:</label>
        <input name="img_highlight5" type="text" value="{{$news->img_highlight5}}"><br>
        <label for="date">News Date</label>
        <input name="date" type="date" value="{{$news->date}}"><br>

        <input type="submit" value="Update"><br>
    </form>
@endsection

