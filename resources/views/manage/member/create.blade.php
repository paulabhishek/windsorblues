@extends('layouts.app')
@section('content')
<h1>Create Member</h1>
<form method="POST" action="{{ route ('manage.member.store') }}">
    {{ csrf_field() }}
{{--    <label for="name">Member Name:</label>--}}
{{--    <input name="name" type="text" ><br>--}}
{{--    <label for="email">Member email</label>--}}
{{--    <input name="email" type="email" ><br>--}}
{{--    <label for="phone">Member Phone</label>--}}
{{--    <input name="phone" type="tel" ><br>--}}
{{--    <label for="newsletter">Newsletter</label>--}}
{{--    <input name="newsletter" type="text" ><br>--}}
{{--    <label for="terms">Terms</label>--}}
{{--    <input name="terms" type="text" ><br>--}}
{{--    <label for="user_id">User</label>--}}
{{--    <select name="user_id">--}}
{{--        @foreach($users as $id )--}}
{{--            <option value="{{$id}}">{{$id}}</option>--}}
{{--        @endforeach--}}
{{--    </select><br>--}}
{{--    <input type="submit" value="Create"><br>--}}
{{--</form>--}}

<div class="container mt-5">
    <div class="row">

        <div class="col-md-6 offset-md-1">
            <form class="mt-4 mt-md-0" method="POST" action=" {{route('manage.member.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="form-label">Member Name:</label>
                    <input class="form-control" name="name" type="text" id="validationTextarea3" required/>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Member Phone</label>
                    <input class="form-control" name="phone" type="tel" id="validationTextarea2" required/>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Member email</label>
                    <input class="form-control" name="email" type="email" id="validationTextarea" required/>
                </div>
                <div class="form-group">
                        <label for="date" class="form-label">Date</label>
                    <input class="form-control" name="date" type="date" id="validationTextarea" required/>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="newsletter" class="form-label">Newsletter</label>--}}
{{--                    <input class="form-control" name="newsletter" type="text" id="validationTextarea" required/>--}}
{{--                </div>--}}
                <div class="form-group mt-3">
                    <input class="form-check-input" name="newsletter" type="checkbox" value="1" id="validationFormCheck1" required/>
                    <label for="validationFormCheck1" class="form-check-label">I accept terms and conditions(membership)</label>
                </div>
                <div class="form-group mt-3">
                    <input class="form-check-input" name="terms" type="checkbox" value="1" id="validationFormCheck1" required/>
                    <label for="validationFormCheck1" class="form-check-label">I accept terms and conditions(news)</label>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Add Member</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
