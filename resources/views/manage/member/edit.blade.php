@extends('layouts.app')
@section('content')

<h1>Edit Member</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <form class="mt-4 mt-md-0" method="POST" action="{{route ('manage.member.update', $member->id)}}">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label for="name" class="form-label">Member Name:</label>
                    <input class="form-control" name="name" type="text" value="{{$member->name}}" required/>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Member email</label>
                    <input class="form-control" name="email" type="email" value="{{$member->email}}" required/>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input class="form-control" name="phone" type="tel" value="{{$member->phone}}" required/>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Date</label>
                    <input class="form-control" name="phone" type="tel" value="{{$member->date}}" required/>
                </div>
                <div class="form-group">
                    <label for="newsletter" class="form-label">Newsletter</label>
                    <input class="form-control" name="newsletter" type="text" value="{{$member->newsletter}}" required/>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

