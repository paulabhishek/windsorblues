<h1>Edit Event</h1>

<form method="POST" action="{{ route('event.update', $event->id) }}">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <label for="name">Event Name:</label>
    <input name="name" type="text" value="{{$event->name}}"><br>
    <label for="description">Event Description</label>
    <input name="description" type="text" value="{{$event->description}}"><br>
    <label for="location">Event Location</label>
    <input name="location" type="text" value="{{$event->location}}"><br>
    <label for="artist">Event Artist</label>
    <input name="artist" type="text" value="{{$event->artist}}"><br>
    <label for="artist">Event YT_URL</label>
    <input name="yt_url" type="text" value="{{$event->yt_url}}"><br>
    <label for="artist">Event Date</label>
    <input name="date" type="date" value="{{$event->date}}"><br>
    <input type="submit" value="update"><br>
</form> <br><br>
