@extends('layouts.app')
@section('content')
<h1>Create events</h1>
    @if(\Illuminate\Support\Facades\Auth::user())
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-1">
                    <form class="mt-4 mt-md-0" method="POST" action=" {{route('manage.event.store')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="form-label">Event title:</label>
                            <input class="form-control" name="name" type="text" id="validationTextarea3" required/>
                        </div>
                        <div class="form-group">
                            <label for="location" class="form-label">address</label>
                            <input class="form-control" name="location" type="text" id="validationTextarea2" required/>
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <input class="form-control" name="description" type="text" id="validationTextarea" required/>
                        </div>
                        <div class="form-group">
                            <label for="artist" class="form-label">Artist</label>
                            <input class="form-control" name="artist" type="text" id="validationTextarea" required/>
                        </div>
                        <div class="form-group">
                            <label for="yt_url" class="form-label">YT URL</label>
                            <input class="form-control" name="yt_url" type="text" id="validationTextarea" required/>
                        </div>
                        <div class="form-group">
                            <label for="date" class="form-label">date</label>
                            <input class="form-control" name="date" type="date" id="validationTextarea" required/>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
@endsection

