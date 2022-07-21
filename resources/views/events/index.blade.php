@include('includes.header')

<h1 class="text-3xl font-bold underline">Events page</h1>
<!-- This example requires Tailwind CSS v2.0+ -->
@foreach ($events as $object)
Name:   {{ $object->name }}<br>
Location: {{ $object->location }}<br>
des: {{ $object->description }}<br>
artist: {{ $object->artist }}<br>
date: {{ $object->date }}<br>
yt_url: {{ $object->yt_url }}<br>
user_id: {{ $object->user_id }}<br><br><br>

@endforeach

@include('includes.footer')


