@include('includes.header')
{{--<h1 class="text-3xl font-bold underline text-center mb-4">Events</h1>--}}
{{--<p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Upcoming Events</p>--}}
<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Windsor Blues Events</text></svg>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <a href="{{route('event.index')}}" style="text-decoration: none; "><p class="fw-bold t ext-justify text-center fs-1 text-uppercase hdline" style="color: #150185; font-family: 'Source Sans Pro', sans-serif; ">Upcoming Events</p></a>
        </div>
        <div class="col">
            <a href="{{route('event.index.past')}}" style="text-decoration: none; "><p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Past Events</p></a>
        </div>
    </div>
</div>
{{--{{dd(count($events))}}--}}
@if(count($events) == 1)
    <div class="container">
        <div class="card mb-3" style="max-width:100%;">
            <div class="row g-0">
                @foreach ($events as $object)
                <div class="col-md-4">
                    {{--                <img src="../images/monkeyjunk1.jpg" class="img-fluid rounded-start" alt="...">--}}
                    @isset($object->file)
                        <img class="img-fluid rounded-start" src="{{ asset('storage/' . $object->file) }}"  height="150px" alt="Card image cap">
                    @endisset
                    @if(! isset( $object->file))
                        <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body text-center">
                        <h1 class="card-title "> {{ $object->name }}</h1>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <p style="display:inline" class="card-text px-1">{{ $object->artist }}</p>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        <p style="display:inline" class="card-text px-1">{{$object->location }}</p><br><br>
                        <div class="col">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.4937262696244!2d-83.02891038470538!3d42.2893293791917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2c4fb69a96fb%3A0xf1ce8b13ec8e800a!2s2401%20Dougall%20
                            {{$object->location}}%201T3!5e0!3m2!1sen!2sca!4v1664163013670!5m2!1sen!2sca" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <b>Overview:</b><p class="card-text">{{$object->description }}</p>
{{--                        <a href="https://www.ticketscene.ca/events/42349/"  target="_blank" class="btn btn-primary">Buy Tickets</a>--}}
                            <a href="{{ url('/event/')}}/{{$object->id }}" class="btn btn-primary">Details</a>
                            <button href="https://www.ticketscene.ca/events/42349/" class="btn btn-primary" type="button">Buy ticket</button>

                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
{{--                    <div class="col">--}}
{{--                        <div class="card">--}}
{{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                @endforeach
            </div>
        </div>
    </div>

@else
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($events as $object)

                <div class="col">
                    <div class="card h-100">
                        <p class=" fs-1 text-center mb-1">{{$object->name}}</p>
                        {{--            <img width="20" height="100" src="images/75274204C4084884AC8373DD486C0793.jpg" class="card-img-top" alt="...">--}}
                        {{--                    @dump($object->file)--}}
                        @isset($object->file)
                            <a href="{{ url('/event/')}}/{{$object->id }}">
                                <img class="card-img-top" src="{{ asset('storage/' . $object->file) }}" alt="Card image cap">
                            </a>
                        @endisset
                        {{--                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
                        <div class="card-body">
                            <a href="{{ url('/event/')}}/{{$object->id }}" class="btn btn-primary">Details</a>
                            <button href="" class="btn btn-primary" type="button">Buy ticket</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@include('includes.footer')




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
