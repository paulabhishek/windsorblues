@extends('layouts.app')
@section('content')
    <h1>Create News</h1>
    <form method="POST" action="{{ route ('manage.news.store') }}">
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <input name="title" type="text" ><br>
        <label for="author">Author:</label>
        <input name="author" type="text" ><br>
        <label for="p1">P1:</label>
        <input name="p1" type="text" ><br>
        <label for="p2">P2:</label>
        <input name="p2" type="text" ><br>
        <label for="p3">P3:</label>
        <input name="p3" type="text" ><br>
        <label for="p4">P4:</label>
        <input name="p4" type="text" ><br>
        <label for=p5">P5:</label>
        <input name="p5" type="text" ><br>

        <label for="img_banner">Image_banner:</label>
        <input name="img_banner" type="text" ><br>

        <label for="img_highlight1">Image_banner1:</label>
        <input name="img_highlight1" type="text" ><br>
        <label for="img_highlight2">Image_banner2:</label>
        <input name="img_highlight2" type="text" ><br>
        <label for="img_highlight3">Image_banner3:</label>
        <input name="img_highlight3" type="text" ><br>
        <label for="img_highlight4">Image_banner4:</label>
        <input name="img_highlight4" type="text" ><br>
        <label for="img_highlight5">Image_banner5:</label>
        <input name="img_highlight5" type="text" ><br>
        <label for="date">News Date</label>
        <input name="date" type="date" ><br>
        <select name="user_id">
            @foreach($users as $id )
                <option value="{{$id}}">{{$id}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Create"><br>
    </form>
@endsection
