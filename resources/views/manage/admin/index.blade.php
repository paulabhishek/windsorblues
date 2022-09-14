@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold underline text-center">Admins page</h1>
    <div class="container">
        <a href="{{ url('/manage/admin/create')}}" class="btn btn-primary">Create new Admin</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($admin as $object)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{ $object->name }}</h5>
                            <p class="card-text">Email: {{ $object->email }}</p>
                            <p class="card-text px-1 ">Access Level: {{ $object->level }}</p>
                            <p class="card-text px-1 ">User_id: {{ $object->id }}</p>
                            <form method="POST" action="{{ route('manage.admin.delete', $object->id) }}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{ url('/manage/admin/')}}/{{$object->id }}/edit" class="btn btn-primary">update</a>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
{{--Name:   {{ $object->name }}<br>--}}
{{--Email: {{ $object->email }}<br>--}}
{{--Level: {{ $object->level }}<br>--}}
{{--user_id: {{ $object->id }}<br>--}}
{{--<form method="POST" action="{{ route('manage.admin.delete', $object->id) }}">--}}
{{--    {{method_field('DELETE')}}--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="submit" value="Delete"></form>--}}
{{--</form> <br><br>--}}
