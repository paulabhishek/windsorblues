@extends('layouts.app')
@section('content')
    <h1>Update Museum</h1>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action="{{ route ('manage.museum.update', $museum->id) }}" enctype="multipart/form-data">
                    {{method_field('PATCH')}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="author" class="form-label">Author:</label>
                        <input class="form-control" name="author" type="text" value="{{$museum->artist_name}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="video_url1" class="form-label">video_url1:</label>
                        <input class="form-control" name="video_url1" type="text" value="{{$museum->video_url1}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="video_url2" class="form-label">video_url2:</label>
                        <input class="form-control" name="video_url2" type="text" value="{{$museum->video_url2}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="p1" class="form-label">P1:</label>
                        <textarea class="form-control" name="p1" type="text" rows="5" required>{{$museum->p1}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="p2" class="form-label">P2:</label>
                        <textarea class="form-control" name="p2" type="text" rows="5" required>{{$museum->p2}}</textarea>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="p5" class="form-label">Paragraph 5</label>--}}
{{--                        <textarea class="form-control" name="p5" type="text" rows="5"></textarea>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="p3" class="form-label">P3:</label>
                        <textarea class="form-control" name="p3" type="text" rows="5" required>{{$museum->p3}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image1" class="form-label">Image1:</label>
                        <a href="http://windsorblues.ca/storage/{{$museum->image1}}"target="_blank" class="link-primary">Current image</a>
                        <input class="form-control" name="image1" type="file" accept="/image*" />
                    </div>


                    <div class="form-group">
                        <label for="image2" class="form-label">Image2:</label>
                        <a href="http://windsorblues.ca/storage/{{$museum->image2}}"target="_blank" class="link-primary">Current image</a>
                        <input class="form-control" name="image2" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-label">Date:</label>
                        <input class="form-control" name="date" type="date" value="{{$museum->date}}" required/>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

