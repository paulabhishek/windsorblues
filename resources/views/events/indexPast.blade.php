@include('includes.header')
{{--<h1 class="text-3xl font-bold underline text-center mb-4">Events</h1>--}}
{{--<p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Upcoming Events</p>--}}

<div class="col text-light text-center p-1 header"><br><br>
    <p class="display-2" style="font-weight:bold">WINDSOR BLUES PAST EVENTS</p>
    {{--        <p>Phasellus congue commodo magna ut ultricies. Curabitur a nisi et lectus fringilla sodales. Duis dictum at dolor non luctus. Donec dapibus arcu eget tortor ullamcorper bibendum. Quisque mattis scelerisque malesuada. Cras velit lectus, sagittis vitae dui vehicula, cursus consequat nunc. Integer a pulvinar ante, quis molestie nunc. Ut eget lacus in lacus venenatis dignissim a at sapien.</p>--}}
    {{--        <button type="button" class="btn btn-outline-light">Learn More</button>--}}
</div>

<div class="container text-center mt-4">
    <div class="row">
        <div class="col">
           <a href="{{route('event.index')}}" style="text-decoration: none; "> <p class="fw-bold text-justify text-center fs-2 text-uppercase " style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Upcoming Events</p></a>
        </div>
        <div class="col">
            <a href="{{route('event.index.past')}}" style="text-decoration: none; "><p href="{{route('event.index.past')}}" class="fw-bold text-justify text-center fs-2 text-uppercase redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Past Events</p></a>
        </div>
        <div class="dropdown ">

            <button class="btn btn-primary dropdown-toggle btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                @php
                    $url = substr(url()->current(), -4);

                @endphp
                 @if(\Illuminate\Support\Facades\Request::is("past-event")) Sort By All @else Sort By "{{$url}}" @endif
            </button>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('event.index.past')}}">Sort By All</a></li>
            @foreach ($event_year as $object)
                    <li><a class="dropdown-item" href="{{ route('event.sort', $object) }}">{{ $object }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($events as $object)
            <div class="col">
                <div class="h-100 ignore-css" style="background-color: #c2c5d7; box-shadow: 0 0px 0px rgba(0, 0, 0, .00), 0 0 0px rgba(0, 0, 0, .00) !important;">
{{--                    <p class=" fs-1 text-center mb-1">{{$object->name}}</p>--}}
                    {{--            <img width="20" height="100" src="images/75274204C4084884AC8373DD486C0793.jpg" class="card-img-top" alt="...">--}}
                    {{--                    @dump($object->file)--}}
                    @isset($object->file)
                        <a href="{{ url('/event/')}}/{{$object->id }}">
                            <img class="card-img-top" loading="lazy" src="{{ asset('storage/' . $object->file) }}" alt="Card image cap" style="border-radius: 0.5rem;">
                        </a>
                    @endisset
{{--                    --}}{{--                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
{{--                    <div class="card-body">--}}
{{--                        <a href="{{ url('/event/')}}/{{$object->id }}" class="btn btn-primary">Details</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        @endforeach
    </div>
</div>
{{--<div class="text-center">--}}
{{--    {{$events->links()}}--}}
{{--</div>--}}

@include('includes.footer')




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
