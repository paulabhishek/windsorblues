@extends('layouts.app')
@section('content')
<h1>Edit Admin</h1>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <form method="POST" action="{{ route('manage.admin.update', $id->id) }}">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input class="form-control" name="name" type="text" value="{{$id->name}}" required/>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input class="form-control" name="email" type="email" value="{{$id->email}}" required/>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password:</label>
                    <input class="form-control" name="password" type="password" value="{{$id->password}}" required/>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="level">Select Levels</label>
                    <div class="col-md-6">
                        <select name="level" id="level" class="form-control">
                            <option selected="">Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
