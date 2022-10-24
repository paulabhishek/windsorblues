@extends('layouts.app')
@section('content')
    <h1>Create News</h1>

    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action=" {{ route ('manage.news.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title" class="form-label">Title:</label>
                        <input class="form-control" name="title" type="text" id="validationTextarea3" required/>
                    </div>
                    <div class="form-group">
                        <label for="author" class="form-label">Author:</label>
                        <input class="form-control" name="author" type="text" id="validationTextarea2" required/>
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
                        <label for="p4" class="form-label">Paragraph 41</label>
                        <textarea class="form-control" name="p4" type="text" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="p5" class="form-label">Paragraph 5</label>
                        <textarea class="form-control" name="p5" type="text" rows="5"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="img_banner" class="form-label link-danger">Image_banner: size(278x140)</label>
                        <input class="form-control" name="img_banner" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="img_highlight1" class="form-label">Image_highlight1:</label>
                        <input class="form-control" name="img_highlight1" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="img_highlight2" class="form-label">Image_highlight2:</label>
                        <input class="form-control" name="img_highlight2" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="img_highlight3" class="form-label">Image_highlight3:</label>
                        <input class="form-control" name="img_highlight3" type="file" accept="/image*" />
                    </div>
                    <div class="form-group">
                        <label for="img_highlight4" class="form-label">Image_highlight4:</label>
                        <input class="form-control" name="img_highlight4" type="file" accept="/image*"/>
                    </div>
                    <div class="form-group">
                        <label for="img_highlight5" class="form-label">Image_highlight5:</label>
                        <input class="form-control" name="img_highlight5" type="file" accept="/image*"/>
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
