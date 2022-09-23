@extends('layouts.app')
@section('content')
<h1>Edit Event</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <form class="mt-4 mt-md-0" method="POST" action="{{ route ('manage.event.update', $event->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label for="name" class="form-label">Event title:</label>
                    <input class="form-control" name="name" type="text" value="{{$event->name}}" required/>
                </div>
                <div class="form-group">
                    <label for="location" class="form-label">Event Location</label>
                    <input class="form-control" name="location" type="text" value="{{$event->location}}" required/>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <input class="form-control" name="description" type="text" value="{{$event->description}}" required/>
                </div>
                <div class="form-group">
                    <label for="artist" class="form-label">Artist</label>
                    <input class="form-control" name="artist" type="text" value="{{$event->artist}}" required/>
                </div>
                <div class="form-group">
                    <label for="yt_url" class="form-label">YT URL</label>
                    <input class="form-control" name="yt_url" type="text" value="{{$event->yt_url}}" required/>
                </div>
                <div class="form-group">
                    <label for="date" class="form-label">date</label>
                    <input class="form-control" name="date" type="date" value="{{$event->date}}" required/>
                </div>
                <div class="form-group">
                    <label for="file" class="form-label">File:</label>
                    <input class="form-control" name="file" type="file" accept="/images*" required/>
{{--                    <input class="form-control" name="oldfile" type="hidden" value="{{$event->file}}" accept="/images*" required/>--}}
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

