@extends('layouts.app')
@section('content')
<h1>Create Admin. (Has to have level 2 access)</h1>
@can('isLevelTwo')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <form method="POST" action="{{ route ('manage.admin.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input class="form-control" name="name" type="text" id="validationTextarea3" required/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input class="form-control" name="email" type="email" id="validationTextarea3" required/>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password:</label>
                        <input class="form-control" name="password" type="password" id="validationTextarea3" required/>
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
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--    --}}
{{--        <label for="name"> Name:</label>--}}
{{--        <input name="name" type="text" ><br>--}}
{{--        <label for="email">Email</label>--}}
{{--        <input name="email" type="email" ><br>--}}
{{--        <label for="password">Password</label>--}}
{{--        <input name="password" type="password" ><br>--}}
{{--        <label for="level">Level</label>--}}
{{--        <select name="level">--}}
{{--                <option value="1">1</option>--}}
{{--                <option value="2">2</option>--}}
{{--        </select><br>--}}
{{--        <input type="submit" value="Create"><br>--}}
{{--    </form>--}}

@endcan
@endsection

