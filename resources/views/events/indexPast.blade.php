@include('includes.header')
{{--<h1 class="text-3xl font-bold underline text-center mb-4">Events</h1>--}}
{{--<p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Upcoming Events</p>--}}

<div class="row header">
    <div class="col-3"></div>
    <div class="col-12 col-md-6 text-light text-center p-5"><br><br>
        <h1 style="font-weight:bold">WINDSOR BLUES PAST EVENTS</h1><br><br>
    </div>
    <div class="col-3"></div>
</div>
<div class="container text-center mt-4">
    <div class="row">
        <div class="col">
           <a href="{{route('event.index')}}" style="text-decoration: none; "> <p class="fw-bold text-justify text-center fs-1 text-uppercase " style="color: #150185; font-family: 'Source Sans Pro', sans-serif; ">Upcoming Events</p></a>
        </div>
        <div class="col">
            <a href="{{route('event.index.past')}}" style="text-decoration: none; "><p href="{{route('event.index.past')}}" class="fw-bold text-justify text-center fs-1 text-uppercase redline" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Past Events</p></a>
        </div>
    </div>
</div>
<div class="container mt-3">
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
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('includes.footer')




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
