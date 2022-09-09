@include('includes.header')

<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">News and updates</text></svg>
@foreach ($news as $object)
<div class="container card my-5">
    <div class="row g-0">
        <div class="col-md-4">
            <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$object->title}}</h5>
                <p class="card-text">{{ $object->p1 }}</p>
                <p class="card-text"><small class="text-muted">{{\App\Http\Controllers\NewsController::time_elapsed_string($object->date, false)}}</small></p>
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
