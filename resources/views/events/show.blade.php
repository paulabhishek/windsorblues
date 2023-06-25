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
    <div class="col text-light text-center p-1 header"><br><br>
        <p class="display-2" style="font-weight:bold">WINDSOR BLUES PAST EVENTS</p>
        {{--        <p>Phasellus congue commodo magna ut ultricies. Curabitur a nisi et lectus fringilla sodales. Duis dictum at dolor non luctus. Donec dapibus arcu eget tortor ullamcorper bibendum. Quisque mattis scelerisque malesuada. Cras velit lectus, sagittis vitae dui vehicula, cursus consequat nunc. Integer a pulvinar ante, quis molestie nunc. Ut eget lacus in lacus venenatis dignissim a at sapien.</p>--}}
        {{--        <button type="button" class="btn btn-outline-light">Learn More</button>--}}
    </div>

</div>
    <div class="container">
            <div class = "img-holder" style="overflow: hidden;">
                @isset($event->file)
                    <img src = "{{ asset('storage/' . $event->file) }}" alt = "blur-img" class = "blurr rounded">
                    <img src = "{{ asset('storage/' . $event->file) }}" alt = "clear-img" class = "clear shadow rounded">
                @endisset
                @if(! isset( $event->file))
                    <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="150px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                @endif

            </div>

            <div class="row text-center">
                <div class="col">
                    <h1 class="text-center text-light display-1" style="font-family: 'Candal', sans-serif; -webkit-text-stroke: 0.2vw rgb(9, 34, 148);">{{$event->artist}}</h1>
                    <h4 class="text-center text-danger"><em>Presented by Canada South Blues Society</em></h4>
                </div>
            </div>
            <div class ="row">
                <div class="col-lg-8 col-md-8 col-sm-6 mb-4">
                    <h3 style="font-family: 'Archivo Black', sans-serif;">Details:</h3>
                    {{--                    <p class="display-">{{$event->description}}</p>--}}
                    <h4> {{$event->description}}</h4>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-6" >
                    <div class="row mb-4"><h3 style="font-family: 'Archivo Black', sans-serif;">When: {{date('l' . ', '. 'F j', strtotime($event->date))}}</h3></div>
                    <div class="row mb-4 "><h3 style="font-family: 'Archivo Black', sans-serif;">Where: <a target="_blank" href="https://maps.google.com/?saddr=Current+Location&daddr={{$event->location}}" style="color: black; text-decoration: none;"  onmouseover='this.style.textDecoration="underline"'  onmouseout='this.style.textDecoration="none"' >{{$event->location}}</a></h3></div>
                    @php
                    function showButton($date){
                        $datetime1 = date_create(date("d-m-Y"));
//                        dump($datetime1);
                        $datetime2 = date_create(date("d-m-Y", strtotime($date)));
                        $interval = date_diff($datetime1, $datetime2);
//                        dump(intval($interval->format('%R%a')));
//                        dump(intval($interval->format('%R%a')) < 0);
//                        dump(intval($interval->format('%R%a')) === 0);
                        if(intval($interval->format('%R%a')) === 0 || intval($interval->format('%R%a')) >  0 )
                            {
//                                dump(intval($interval->format('%R%a')) < 0);
//                                dump(str_contains($interval->format('%R%a days'), '0') || str_contains($interval->format('%R%a days'), '+'));
                                return true;
                            }
                        else{

                            return false;
                        }

                    }
                        @endphp
                    @if(showButton($event->date))
                        @dump($event->date)
                        <div class="row mb-4 px-5"><a href="https://www.ticketscene.ca/events/{{$event->ticketscene_id}}" target="_blank" class="btn btn-danger btn-lg mb-2 text-center shadow rounded border border-3 border-primary" type="button">Buy tickets on Ticketscene</a>
                        </div>

                    @endif

                </div>
            </div>
            <div class ="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h3 style="font-family: 'Archivo Black', sans-serif;">Watch {{$event->artist}}:</h3>
                    @php
                        $video_id = substr($event->yt_url, -11);
                    @endphp
                    <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    </div>
    </div>







{{--<div class="container mt-4">--}}
{{--    <div class="mb-3" style="max-width:100%;">--}}
{{--        <div class="row g-0">--}}
{{--                <div class="col-md-4">--}}
{{--                    --}}{{--                <img src="../images/monkeyjunk1.jpg" class="img-fluid rounded-start" alt="...">--}}
{{--                    @isset($event->file)--}}
{{--                        <img class="img-fluid rounded-start" src="{{ asset('storage/' . $event->file) }}"  height="150px" alt="Card image cap">--}}
{{--                    @endisset--}}
{{--                    @if(! isset( $event->file))--}}
{{--                        <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <p class=" text-center display-1" style="font-family: 'Oswald', sans-serif;"> {{ $event->artist }}</p>--}}
{{--                <div class="container ">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            --}}{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">--}}
{{--                            --}}{{--                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
{{--                            --}}{{--                                    </svg>--}}
{{--                            <p class="text-center px-1 fs-3"><strong>Presented by {{ $event->name }}</strong></p>--}}
{{--                            --}}{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">--}}
{{--                            --}}{{--                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>--}}
{{--                            --}}{{--                                    </svg>--}}
{{--                            --}}{{--                                    <p style="display:inline" class="card-text px-1">{{$event->location }}</p><br><br>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="container">--}}
{{--                    <div class="row text-center">--}}
{{--                        <div class="d-flex">--}}
{{--                            <div class="col-6">--}}
{{--                                <p class="fw-bold fs-4">Date</p>--}}
{{--                                <p> {{date('l' . ', '. 'F j' . ', ' .  'Y', strtotime($event->date))}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="mt-3 px-1" style="border-left:1px solid #000;height:50px"></div>--}}
{{--                            <div class="col-6">--}}
{{--                                <p class="fw-bold fs-4">Location</p>--}}
{{--                                <p> {{$event->location}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="container">--}}
{{--                    <div class="row text-center">--}}
{{--                        <div class="col-xl-12 col-lg-12">--}}
{{--                            --}}{{----}}{{--                                        <p>About</p>--}}
{{--                            --}}{{----}}{{--                                        <p class="text-right" style="text-align: left !important;">{{$event->description }}</p>--}}
{{--                            --}}{{----}}{{--                                        <a href="{{ url('/event/')}}/{{$event->id }}" class="btn btn-primary">Details</a>--}}
{{--                            --}}{{----}}{{--                                        <button href="https://www.ticketscene.ca/events/42349/" class="btn btn-primary" type="button">Buy ticket</button>--}}
{{--                            <a href="https://www.ticketscene.ca/events/42349/" target="_blank" class="btn btn-primary btn-lg mb-2" type="button">Buy tickets on Tickets Scene</a>--}}
{{--                        </div>--}}
{{--                        --}}{{--                                    <div class="col-xl-6 col-lg-6 ">--}}
{{--                        --}}{{--                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.4937262696244!2d-83.02891038470538!3d42.2893293791917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2c4fb69a96fb%3A0xf1ce8b13ec8e800a!2s2401%20Dougall%20--}}
{{--                        --}}{{--                                            {{$event->location}}%201T3!5e0!3m2!1sen!2sca!4v1664163013670!5m2!1sen!2sca" width="100%" height="250"  allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">--}}
{{--                        --}}{{--                                        </iframe>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-sm-6 ">--}}
{{--                            @php--}}
{{--                                $video_id = substr($event->yt_url, -11);--}}
{{--                            @endphp--}}
{{--                            <iframe width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class=" text-center">--}}
{{--                        <h1 class="card-title "> {{ $event->name }}</h1>--}}
{{--                        <div class="container ">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">--}}
{{--                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
{{--                                    </svg>--}}
{{--                                    <p style="display:inline" class="card-text px-1">{{ $event->artist }}</p>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">--}}
{{--                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>--}}
{{--                                    </svg>--}}
{{--                                    <p style="display:inline" class="card-text px-1">{{$event->location }}</p><br><br>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-6 col-lg-6 justify-content-start">--}}
{{--                                    <b>Overview:</b><p class="card-text">{{$event->description }}--}}
{{--                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "L</p>--}}
{{--                                    <a href="{{ url('/event/')}}/{{$event->id }}" class="btn btn-primary">Details</a>--}}
{{--                                    <button href="https://www.ticketscene.ca/events/42349/" class="btn btn-primary" type="button">Buy ticket</button>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6 col-lg-6 ">--}}
{{--                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.4937262696244!2d-83.02891038470538!3d42.2893293791917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2c4fb69a96fb%3A0xf1ce8b13ec8e800a!2s--}}
{{--                                {{$event->location}}%201T3!5e0!3m2!1sen!2sca!4v1664163013670!5m2!1sen!2sca" width="100%" height="250"  allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--                                    @dump($event->location)--}}
{{--                                    <div class="row justify-content-end">--}}
{{--                                        <div class="col-xl-12 col-lg-12 col-sm-12 ">--}}
{{--                                            @php--}}
{{--                                                $video_id = substr($event->yt_url, -11);--}}
{{--//                                                dump($video_id)--}}
{{--                                            @endphp--}}
{{--                                                <iframe width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@include('includes.footer')
{{--ID:   {{ $event->id }}<br>--}}
{{--Name:   {{ $event->name }}<br>--}}
{{--Location: {{ $event->location }}<br>--}}
{{--des: {{ $event->description }}<br>--}}
{{--artist: {{ $event->artist }}<br>--}}
{{--user_id: {{ $event->user_id }}<br>--}}
{{--yt_url: {{ $event->yt_url }}<br><br><br>--}}
