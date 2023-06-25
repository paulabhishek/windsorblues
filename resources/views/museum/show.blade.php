@include('includes.header')
<div class="container">

    <div class="row intext">
        <div class="col-lg-4 col-md-4">
            @php
                $id =('carouselExampleControls' . $museum->id)
            @endphp
            <div id="{{$id}}" class="carousel slide "  data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item clearfix">
                        @isset($museum->image1)
                            <img class="bd-placeholder-img img-fluid rounded-start d-block w-100" src="{{ asset('storage/' . $museum->image1) }}"  width="800" height="400" alt="Card image cap">
                        @endisset
                        {{--                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>--}}
                    </div>
                    <div class="carousel-item active">
                        @isset($museum->image2)
                            <img class="bd-placeholder-img img-fluid rounded-start d-block w-100" src="{{ asset('storage/' . $museum->image2) }}"  width="800" height="400" alt="Card image cap">
                        @endisset
                        {{--                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>--}}
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#{{$id}}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#{{$id}}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            @php
                    $video_id1 = substr($museum->video_url1, -11);
                    $video_id2 = substr($museum->video_url2, -11);
            @endphp
            <div class ="row">
                <div class="col-lg-12 col-md-6 mt-4 d-md-none d-lg-block d-sm-none d-md-block d-none d-sm-block">
                    <h3 style="font-family: 'Archivo Black', sans-serif;">Watch {{$museum->artist_name}}:</h3>
                    @isset($museum->video_url1)
                        <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endisset
                    @isset($museum->video_url2)
                        <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endisset
                </div>
            </div>
{{--            @isset($museum->video_url1)--}}
{{--                <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--            @endisset--}}
{{--            @isset($museum->video_url2)--}}
{{--                <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--            @endisset--}}

{{--            <iframe width="100%" height="250"  src="https://www.youtube.com/watch?v=iUCyU_U0J2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--            <iframe width="100%" height="250"  src="https://www.youtube.com/watch?v=iUCyU_U0J2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}

        </div>
        <div class="col">
            <h1 class="text-center text-light display-1" style="font-family: 'Candal', sans-serif; -webkit-text-stroke: 0.2vw rgb(9, 34, 148);">{{$museum->artist_name}}</h1>
            <h4 class="text-center display-6" style="font-family: 'Gloock', serif; color: red">Inducted in: {{$museum->date}}</h4><br>
            <p class="text-lg-start fs-5" style="font-family: 'Poppins', sans-serif;"> {{$museum->p1}}</p><br>
            <p class="text-lg-start fs-5" style="font-family: 'Poppins', sans-serif;"> {{$museum->p2}}</p><br>
            <p class="text-lg-start fs-5" style="font-family: 'Poppins', sans-serif;"> {{$museum->p3}}</p>
        </div>

{{--        <div class="col-lg-8 col-md-8" style="float: none;">--}}
{{--            <h2>{{$museum->artist_name}}</h2>--}}
{{--            <h2>Inducted in: {{$museum->date}}</h2>--}}
{{--            <p class="text-lg-start fs-3"> {{$museum->p1}}</p>--}}
{{--            <p class="text-lg-start fs-3"> {{$museum->p2}}</p>--}}
{{--            <p class="text-lg-start fs-3"> {{$museum->p3}}</p>--}}
{{--        </div>--}}
{{--        <div class="col-12">--}}
{{--            {{$museum->video_url1}}--}}
{{--            {{$museum->video_url2}}--}}
{{--        </div>--}}

        <div class ="row">
            <div class="col-md-6 col-sm-10 d-lg-none d-xl-block d-xl-none">
                <h3 class="mt-5" style="font-family: 'Archivo Black', sans-serif;">Watch {{$museum->artist_name}}:</h3>
                @isset($museum->video_url1)
                    <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endisset
                @isset($museum->video_url2)
                    <iframe class="shadow rounded" width="100%" height="250"  src="https://www.youtube.com/embed/{{$video_id2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endisset
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
