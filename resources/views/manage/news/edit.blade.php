@extends('layouts.app')
@section('content')
    <h1>Update News</h1>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action="{{ route ('manage.news.update', $news->id) }}">
                    {{method_field('PATCH')}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title" class="form-label">Title:</label>
                        <input class="form-control" name="title" type="text" value="{{$news->title}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="author" class="form-label">Author:</label>
                        <input class="form-control" name="author" type="text" value="{{$news->author}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="p1" class="form-label">P1:</label>
                        <input class="form-control" name="p1" type="text" value="{{$news->p1}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="p2" class="form-label">P2:</label>
                        <input class="form-control" name="p2" type="text" value="{{$news->p2}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="p3" class="form-label">P3:</label>
                        <input class="form-control" name="p3" type="text" value="{{$news->p3}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="p4" class="form-label">P4:</label>
                        <input class="form-control" name="p4" type="text" value="{{$news->p4}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="p5" class="form-label">P5:</label>
                        <input class="form-control" name="p5" type="text" value="{{$news->p5}}" required/>
                    </div>

                    <div class="form-group">
                        <label for="img_banner" class="form-label">Image_banner:</label>
                        <input class="form-control" name="img_banner" type="text" value="{{$news->img_banner}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="img_highlight1" class="form-label">Image_highlight1:</label>
                        <input class="form-control" name="img_highlight1" type="text" value="{{$news->img_highlight1}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="img_highlight2" class="form-label">Image_highlight2:</label>
                        <input class="form-control" name="img_highlight2" type="text" value="{{$news->img_highlight2}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="img_highlight3" class="form-label">Image_highlight3:</label>
                        <input class="form-control" name="img_highlight3" type="text" value="{{$news->img_highlight3}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="img_highlight4" class="form-label">Image_highlight4:</label>
                        <input class="form-control" name="img_highlight4" type="text" value="{{$news->img_highlight4}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="img_highlight5" class="form-label">Image_highlight5:</label>
                        <input class="form-control" name="img_highlight5" type="text" value="{{$news->img_highlight5}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-label">Date:</label>
                        <input class="form-control" name="date" type="date" value="{{$news->date}}" required/>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

