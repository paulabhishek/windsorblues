@include('includes.header')
{{--<h1 class="text-3xl font-bold underline text-center mb-4">Events</h1>--}}
{{--<p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Upcoming Events</p>--}}
{{--<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Windsor Blues Events</text></svg>--}}

    <div class="text-light text-center p-1 header"><br><br>
        <p class="display-2 my-6" style="font-weight:bold">WINDSOR BLUES EVENTS</p>
{{--        <p>Phasellus congue commodo magna ut ultricies. Curabitur a nisi et lectus fringilla sodales. Duis dictum at dolor non luctus. Donec dapibus arcu eget tortor ullamcorper bibendum. Quisque mattis scelerisque malesuada. Cras velit lectus, sagittis vitae dui vehicula, cursus consequat nunc. Integer a pulvinar ante, quis molestie nunc. Ut eget lacus in lacus venenatis dignissim a at sapien.</p>--}}
{{--        <button type="button" class="btn btn-outline-light">Learn More</button>--}}
    </div>


<div class="container text-center mt-4">
    <div class="row">
        <div class="col">
            <a href="{{route('event.index')}}" style="text-decoration: none; "><p class="fw-bold text-justify text-center fs-2 text-uppercase redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Upcoming Events</p></a>
        </div>
        <div class="col">
            <a href="{{route('event.index.past')}}" style="text-decoration: none; "><p class="fw-bold text-justify text-center fs-2 text-uppercase" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Past Events</p></a>
        </div>
    </div>
</div>
{{--{{dd(count($events))}}--}}
<style>

    </style>
@if(count($events) == 1)
    @foreach ($events as $object)
        <div class="container" id="event">
            <div class = "img-holder" style="overflow: hidden;">
                @isset($object->file)
                    <img src = "{{ asset('storage/' . $object->file) }}" alt = "blur-img" class = "blurr">
                    <img src = "{{ asset('storage/' . $object->file) }}" alt = "clear-img" class = "clear shadow rounded">
                @endisset
                @if(! isset( $object->file))
                    <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="150px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                @endif

            </div>

            <div class="row text-center">
                <div class="col">
                    <h1 class="text-center text-light display-1" style="font-family: 'Candal', sans-serif; -webkit-text-stroke: 0.2vw rgb(9, 34, 148);">{{$object->artist}}</h1>
                    <h4 class="text-center text-danger"><em>Presented by Canada South Blues Society</em></h4>
                </div>
            </div>
            <div class ="row">
                <div class="col-lg-8 col-md-8 col-sm-6 mb-4">
                    <h3 class="pt-3" style="font-family: 'Archivo Black', sans-serif;">Details:</h3>
{{--                    <p class="display-">{{$object->description}}</p>--}}
                   <h4> {{$object->description}}</h4>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-6" >
                    <div class="row mb-4 pt-3"><h3 style="font-family: 'Archivo Black', sans-serif;">When: {{date('l' . ', '. 'F j', strtotime($object->date))}}</h3></div>
                    <div class="row mb-4"><h3 style="font-family: 'Archivo Black', sans-serif;">Where: <a target="_blank" href="https://maps.google.com/?saddr=Current+Location&daddr={{$object->location}}" style="color: black; text-decoration: none;"  onmouseover='this.style.textDecoration="underline"'  onmouseout='this.style.textDecoration="none"' >{{$object->location}}</a></h3></div>

                    <a href="https://www.ticketscene.ca/events/{{$object->ticketscene_id}}" target="_blank" class="btn btn-danger btn-lg mb-2 text-center shadow rounded" type="button">Buy tickets on Ticketscene</a>
                </div>
            </div>
            <div class ="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h3 style="font-family: 'Archivo Black', sans-serif;">Watch {{$object->artist}}:</h3>
                    @php
                        $video_id = substr($object->yt_url, -11);
                    @endphp
                    <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>
        </div>
    @endforeach
@elseif(count($events) > 1)
    <div class="container" id="events">
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
@elseif(count($events) == 0)
    <p class="text-center fs-4 mt-5" style="font-family: 'Archivo Black', sans-serif;">No Upcoming events</p>
    <p class="text-center fs-4 mt-5"><a class="link-dark" style="font-family: 'Archivo Black', sans-serif; text-decoration: none; " href="{{route('event.index.past')}}">(Checkout our past events)</a></p>
@endif
{{--<div class="iframe-container">--}}
{{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.4937262696244!2d-83.02891038470538!3d42.2893293791917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2c4fb69a96fb%3A0xf1ce8b13ec8e800a!2s2401%20Dougall%20--}}
{{--                            {{$object->location}}%201T3!5e0!3m2!1sen!2sca!4v1664163013670!5m2!1sen!2sca" width="550" height="350" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--</div>--}}
{{--{{$events->links()}}--}}
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $.get('https://beta.windsorblues.ca/api/upcomingevent', (data)=>{--}}
{{--            if(data.length == 1){--}}
{{--                console.log('event');--}}
{{--            }else{--}}
{{--                console.log('events');--}}
{{--            }--}}

{{--        });--}}



{{--    });--}}
{{--</script>--}}
@include('includes.footer')




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
