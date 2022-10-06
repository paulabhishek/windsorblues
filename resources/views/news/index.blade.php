@include('includes.header')
<div class="row header">
    <div class="col-3"></div>
    <div class="col-12 col-md-6 text-light text-center p-5"><br><br>
        <h1 style="font-weight:bold">NEWS AND UPDATES</h1><br><br>
        {{--        <p>Phasellus congue commodo magna ut ultricies. Curabitur a nisi et lectus fringilla sodales. Duis dictum at dolor non luctus. Donec dapibus arcu eget tortor ullamcorper bibendum. Quisque mattis scelerisque malesuada. Cras velit lectus, sagittis vitae dui vehicula, cursus consequat nunc. Integer a pulvinar ante, quis molestie nunc. Ut eget lacus in lacus venenatis dignissim a at sapien.</p>--}}
        {{--        <button type="button" class="btn btn-outline-light">Learn More</button>--}}
    </div>
    <div class="col-3"></div>
</div>
{{--<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">News and updates</text></svg>--}}
@foreach ($news as $object)

<div class="container card my-5">
    <div class="row g-0">
        <div class="col-md-4 col-lg-3 text-center">
{{--            <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>--}}
            @isset($object->img_banner)
{{--                @dump(asset('storage/' . $object->img_banner))--}}
                <img class="img-thumbnail" src="{{ asset('storage/' . $object->img_banner) }}"  alt="news">
            @endisset
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="card-body">
                <p class="card-title fs-2" style="font-family: 'Abyssinica SIL', serif; font-weight: bold; color: #150185;">{!! $object->title !!}</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                </svg>
                <text class="text-muted"> {{date('l' . ', '. 'F Y', strtotime($object->date))}}</text>
                <p class="mt-3">{{  Str::limit($object->p1, 150) }}</p>
{{--                <p class="card-text"><small class="text-muted">{{\App\Http\Controllers\NewsController::time_elapsed_string($object->date, false)}}</small></p>--}}
                <a href="{{ url('/news/')}}/{{$object->id }}" class="btn btn-sm btn-primary btn-end">Read more</a>
            </div>
        </div>
    </div>
</div>
@endforeach

{{--<div class="container mt-4">--}}
{{--    <div class="row row-cols-1 row-cols-md-3 g-4">--}}
{{--        @foreach ($news as $object)--}}
{{--            Title: {{ $object->title }}<br>--}}
{{--            author: {{ $object->author }}<br>--}}
{{--           p1: {{ $object->p1 }}<br>--}}
{{--            p2: {{ $object->p2 }}<br>--}}
{{--            p3: {{ $object->p3 }}<br>--}}
{{--            p4: {{ $object->p4 }}<br>--}}
{{--           p5:  {{ $object->p5 }}<br>--}}
{{--            image_banner: {{ $object->image_banner }}<br>--}}
{{--            img_highlight1: {{ $object->img_highlight1 }}<br>--}}
{{--            img_highlight2: {{ $object->img_highlight2 }}<br>--}}
{{--            img_highlight3: {{ $object->img_highlight3 }}<br>--}}
{{--            img_highlight4: {{ $object->img_highlight4 }}<br>--}}
{{--            img_highlight5: {{ $object->img_highlight5 }}<br><br><br><br><br>--}}
{{--            user_id: {{ $object->user_id }}<br><br><br>--}}

{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
@include('includes.footer')




{{--Name:   {{ $object->name }}<br>--}}
{{--Location: {{ $object->location }}<br>--}}
{{--des: {{ $object->description }}<br>--}}
{{--artist: {{ $object->artist }}<br>--}}
{{--date: {{ $object->date }}<br>--}}
{{--yt_url: {{ $object->yt_url }}<br>--}}
{{--user_id: {{ $object->user_id }}<br><br><br>--}}
