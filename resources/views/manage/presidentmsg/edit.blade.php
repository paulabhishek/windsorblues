@extends('layouts.app')
@section('content')
    <h1>Update Pres msg</h1>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action="{{ route ('manage.presidentmsg.update', $presidentmsg->id) }}">
                    {{method_field('PATCH')}}
                    {{ csrf_field() }}
{{--                    @dump($presidentmsg->id)--}}
                    <div class="form-group">
                        <label for="message" class="form-label">President Message</label>
                        <textarea class="form-control" name="message" type="text" rows="5">{{$presidentmsg->message}}"</textarea>
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-label">Date:</label>
                        <input class="form-control" name="date" type="date" value="{{$presidentmsg->date}}" required/>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

