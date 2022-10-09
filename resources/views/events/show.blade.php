@include('includes.header')
{{--<div class="container">--}}
{{--    <div class="card mb-3" style="max-width:100%;">--}}
{{--        <div class="row g-0">--}}
{{--            <div class="col-md-4">--}}
{{--                <img src="../images/monkeyjunk1.jpg" class="img-fluid rounded-start" alt="...">--}}
{{--                @isset($event->file)--}}
{{--                    <img class="img-fluid rounded-start" src="{{ asset('storage/' . $event->file) }}"  height="200px" alt="Card image cap">--}}
{{--                @endisset--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card-body">--}}
{{--                    <h1 class="card-title"> {{ $event->name }}</h1>--}}

{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">--}}
{{--                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
{{--                    </svg>--}}
{{--                    <p style="display:inline" class="card-text px-1 ">{{ $event->artist }}</p><br><br>--}}

{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">--}}
{{--                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>--}}
{{--                    </svg>--}}
{{--                    <p style="display:inline" class="card-text px-1">{{$event->location }}</p><br><br>--}}

{{--                    <b>Overview:</b><p class="card-text">{{$event->description }}</p>--}}
{{--                    <b>Watch Video:</b><a href="{{$event->yt_url }}">  {{$event->yt_url }}</a><br>--}}
{{--                    <a href="https://www.ticketscene.ca/events/42349/"  target="_blank" class="btn btn-primary">Buy Tickets</a>--}}
{{--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="row header">
    <div class="col-3"></div>
    <div class="col-12 col-md-6 text-light text-center p-5"><br><br>
        <h1 style="font-weight:bold">WINDSOR BLUES EVENT</h1><br><br>
        {{--        <p>Phasellus congue commodo magna ut ultricies. Curabitur a nisi et lectus fringilla sodales. Duis dictum at dolor non luctus. Donec dapibus arcu eget tortor ullamcorper bibendum. Quisque mattis scelerisque malesuada. Cras velit lectus, sagittis vitae dui vehicula, cursus consequat nunc. Integer a pulvinar ante, quis molestie nunc. Ut eget lacus in lacus venenatis dignissim a at sapien.</p>--}}
        {{--        <button type="button" class="btn btn-outline-light">Learn More</button>--}}
    </div>
    <div class="col-3"></div>
</div>

<div class="container mt-4">
    <div class="mb-3" style="max-width:100%;">
        <div class="row g-0">
                <div class="col-md-4">
                    {{--                <img src="../images/monkeyjunk1.jpg" class="img-fluid rounded-start" alt="...">--}}
                    @isset($event->file)
                        <img class="img-fluid rounded-start" src="{{ asset('storage/' . $event->file) }}"  height="150px" alt="Card image cap">
                    @endisset
                    @if(! isset( $event->file))
                        <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class=" text-center">
                        <h1 class="card-title "> {{ $event->name }}</h1>
                        <div class="container ">
                            <div class="row">
                                <div class="col">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    <p style="display:inline" class="card-text px-1">{{ $event->artist }}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <p style="display:inline" class="card-text px-1">{{$event->location }}</p><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 justify-content-start">
                                    <b>Overview:</b><p class="card-text">{{$event->description }}
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "L</p>
                                    <a href="{{ url('/event/')}}/{{$event->id }}" class="btn btn-primary">Details</a>
                                    <button href="https://www.ticketscene.ca/events/42349/" class="btn btn-primary" type="button">Buy ticket</button>
                                </div>
                                <div class="col-xl-6 col-lg-6 ">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.4937262696244!2d-83.02891038470538!3d42.2893293791917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2c4fb69a96fb%3A0xf1ce8b13ec8e800a!2s2401%20Dougall%20
                                {{$event->location}}%201T3!5e0!3m2!1sen!2sca!4v1664163013670!5m2!1sen!2sca" width="100%" height="250"  allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <div class="row justify-content-end">
                                        <div class="col-xl-12 col-lg-12 col-sm-12 ">
                                            @php
                                                $video_id = substr($event->yt_url, -11);
//                                                dump($video_id)
                                            @endphp
                                                <iframe width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
