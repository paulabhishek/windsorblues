<h1>Create Event</h1>
@if(\Illuminate\Support\Facades\Auth::user())
    <form method="POST" action="{{ route ('manage.event.store') }}">
        {{ csrf_field() }}
        <label for="name">Event Name:</label>
        <input name="name" type="text" ><br>
        <label for="description">Event Description</label>
        <input name="description" type="text" ><br>
        <label for="location">Event Location</label>
        <input name="location" type="text" ><br>
        <label for="artist">Event Artist</label>
        <input name="artist" type="text" ><br>
        <label for="yt_url">Event YT_URL</label>
        <input name="yt_url" type="text" ><br>
        <label for="date">Event Date</label>
        <input name="date" type="date" ><br>
        <label for="user_id">User</label>
        <select name="user_id">
            @foreach($users as $id )
                <option value="{{$id}}">{{$id}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Create"><br>
    </form>
@endif

