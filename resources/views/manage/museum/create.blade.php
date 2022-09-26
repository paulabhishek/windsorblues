@extends('layouts.app')
@section('content')
    <h1>Create</h1>

    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action=" {{ route ('manage.museum.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="artist_name" class="form-label">artist_name:</label>
                        <input class="form-control" name="artist_name" type="text" id="validationTextarea3" required/>
                    </div>
                    <div class="form-group">
                        <label for="video_url1" class="form-label">video_url1:</label>
                        <input class="form-control" name="video_url1" type="text" id="validationTextarea2" required/>
                    </div>
                    <div class="form-group">
                        <label for="video_url2" class="form-label">video_url2:</label>
                        <input class="form-control" name="video_url2" type="text" id="validationTextarea2" required/>
                    </div>
                    <div class="form-group">
                        <label for="p1" class="form-label">Paragraph 1</label>
                        <textarea class="form-control" name="p1" type="text" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="p2" class="form-label">Paragraph 2</label>
                        <textarea class="form-control" name="p2" type="text" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="p3" class="form-label">Paragraph 3</label>
                        <textarea class="form-control" name="p3" type="text" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image1" class="form-label">image1</label>
                        <input class="form-control" name="image1" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="image2" class="form-label">image2</label>
                        <input class="form-control" name="image2" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-label">Date:</label>
                        <input class="form-control" name="date" type="date" id="validationTextarea" required/>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
