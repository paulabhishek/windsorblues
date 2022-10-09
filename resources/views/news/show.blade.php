@include('includes.header')
{{--Title: {{ $news->title }}<br>--}}
{{--author: {{ $news->author }}<br>--}}
{{--p1: {{ $news->p1 }}<br>--}}
{{--p2: {{ $news->p2 }}<br>--}}
{{--p3: {{ $news->p3 }}<br>--}}
{{--p4: {{ $news->p4 }}<br>--}}
{{--p5: {{ $news->p5 }}<br>--}}
{{--image_banner: {{ $news->image_banner }}<br>--}}
{{--img_highlight1: {{ $news->img_highlight1 }}<br>--}}
{{--img_highlight2: {{ $news->img_highlight2 }}<br>--}}
{{--img_highlight3: {{ $news->img_highlight3 }}<br>--}}
{{--img_highlight4: {{ $news->img_highlight4 }}<br>--}}
{{--img_highlight5: {{ $news->img_highlight5 }}<br>--}}
{{--user_id: {{ $news->user_id }}<br><br><br>--}}

<div class=" mb-3">
    <div class="row header">
        <div class="col-3"></div>
        <div class="col-12 col-md-6 text-light text-center p-5"><br><br>
            <h1 style="font-weight:bold">{{ $news->title }}</h1><br><br>
            {{--        <p>Phasellus congue commodo magna ut ultricies. Curabitur a nisi et lectus fringilla sodales. Duis dictum at dolor non luctus. Donec dapibus arcu eget tortor ullamcorper bibendum. Quisque mattis scelerisque malesuada. Cras velit lectus, sagittis vitae dui vehicula, cursus consequat nunc. Integer a pulvinar ante, quis molestie nunc. Ut eget lacus in lacus venenatis dignissim a at sapien.</p>--}}
            {{--        <button type="button" class="btn btn-outline-light">Learn More</button>--}}
        </div>
        <div class="col-3"></div>
    </div>
{{--    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">{{ $news->title }}</text></svg>--}}
    <div class="container">
        <div class="card-body">
            <div class="py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                </svg>
                <text class="text-muted" style=" font-size: large;"> {{date('l' . ', '. 'F Y', strtotime($news->date))}}</text>
            </div>

            @isset($news->img_banner)
{{--                <img class="" src="{{ asset('storage/' . $object->img_banner) }}"  height="200px" alt="news">--}}
                <img src="{{ asset('storage/' . $news->img_banner) }}" class="img-fluid" alt="...">
            @endisset

            <p class="fs-5 mt-3">{!! $news->p1 !!}</p>
            @isset($news->p2)
                <p class="fs-5">{!! $news->p2!!}</p>
            @endisset
            @isset($news->p3)
                <p class="fs-5">{!! $news->p3!!}</p>
            @endisset
            @isset($news->p4)
                <p class="fs-5">{!! $news->p4!!}</p>
            @endisset
            @isset($news->p5)
                <p class="fs-5">{!! $news->p5 !!}</p>
            @endisset
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                @if($news->img_highlight1 == Null)
                @else
                    <div class="col">
                        <div class="card" >
                            <img src="{{ asset('storage/' . $news->img_highlight1) }}" class="img-fluid" alt="...">
{{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
                        </div>
                    </div>
                @endif
                @if($news->img_highlight2 == Null)
                @else
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/' . $news->img_highlight2) }}" class="img-fluid" alt="...">
{{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
                        </div>
                    </div>
                @endif
                @if($news->img_highlight3 == Null)
                @else
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/' . $news->img_highlight3) }}" class="img-fluid" alt="...">
{{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
                        </div>
                    </div>
                @endif
                @if($news->img_highlight4 == Null)
                @else
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/' . $news->img_highlight4) }}" class="img-fluid" alt="...">
{{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
                        </div>
                    </div>
                @endif
                @if($news->img_highlight5 == Null)
                @else
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/' . $news->img_highlight5) }}" class="img-fluid" alt="...">
{{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@include('includes.footer')


