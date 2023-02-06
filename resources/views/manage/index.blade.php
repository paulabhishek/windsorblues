@extends('layouts.app')
@section('content')
    @auth
        @php
            $name = trim( Auth::user()->name);
            $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
            $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
        @endphp
        <h1 class="text-center">Welcome back {{$first_name}}, Manage</h1><br>
        <h1 class="text-center">Events, Members, News, Admins, Presidents MSG</h1>
    @endauth
{{--<h1 class="text-center">Welcome back {{$first_name}}, Manage</h1><br>--}}
{{--<h1 class="text-center">Events, Members, News, Admins, Presidents MSG</h1>--}}
@endsection
