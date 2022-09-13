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

<div class="card mb-3">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">{{ $news->title }}</text></svg>

    <div class="card-body">
        <h5 class="card-title">{{ $news->title }}</h5>
        <p class="card-text">{{ $news->p1 }}</p>
        @isset($news->p2)
            <p class="card-text">{{ $news->p2}}</p>
        @endisset
        @isset($news->p3)
            <p class="card-text">{{ $news->p3}}</p>
        @endisset
        @isset($news->p4)
            <p class="card-text">{{ $news->p4}}</p>
        @endisset
        @isset($news->p5)
            <p class="card-text">{{ $news->p5}}</p>
        @endisset
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            @if($news->img_highlight1 == Null)
            @else
            <div class="col">
                <div class="card" >
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                </div>
            </div>
            @endif
                @if($news->img_highlight2 == Null)
                @else
            <div class="col">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                </div>
            </div>
                @endif
                @if($news->img_highlight2 == Null)
                @else
            <div class="col">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                </div>
            </div>
                @endif
                @if($news->img_highlight2 == Null)
                @else
            <div class="col">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                </div>
            </div>
                @endif
                @if($news->img_highlight2 == Null)
                @else
            <div class="col">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                </div>
            </div>
                @endif
        </div>


    </div>
</div>

@include('includes.footer')


