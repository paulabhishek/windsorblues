@include('includes.header')
<div class="container">
    <div class="card mb-3" style="max-width:100%;">
        <div class="row g-0">
            <div class="col-md-4">
{{--                <img src="../images/monkeyjunk1.jpg" class="img-fluid rounded-start" alt="...">--}}
                @isset($event->file)
                    <img class="img-fluid rounded-start" src="{{ asset('storage/' . $event->file) }}"  height="200px" alt="Card image cap">
                @endisset
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title"> {{ $event->name }}</h1>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <p style="display:inline" class="card-text px-1 ">{{ $event->artist }}</p><br><br>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <p style="display:inline" class="card-text px-1">{{$event->location }}</p><br><br>

                    <b>Overview:</b><p class="card-text">{{$event->description }}</p>
                    <a href="https://www.ticketscene.ca/events/42349/"  target="_blank" class="btn btn-primary">Buy Tickets</a>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
{{--ID:   {{ $event->id }}<br>--}}
{{--Name:   {{ $event->name }}<br>--}}
{{--Location: {{ $event->location }}<br>--}}
{{--des: {{ $event->description }}<br>--}}
{{--artist: {{ $event->artist }}<br>--}}
{{--user_id: {{ $event->user_id }}<br>--}}
{{--yt_url: {{ $event->yt_url }}<br><br><br>--}}
