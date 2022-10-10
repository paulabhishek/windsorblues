@extends('layouts.app')
@section('content')
    <h1>Create Mesage</h1>

    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action=" {{ route ('manage.presidentmsg.store') }} ">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="p3" class="form-label">President Message</label>
                        <textarea class="form-control" name="p3" type="text" rows="5"></textarea>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
