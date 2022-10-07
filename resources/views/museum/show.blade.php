@include('includes.header')
<div class="container">

    <div class="row intext">
        <div class="col-4">
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
            <iframe width="100%" height="250"  src="https://www.youtube.com/watch?v=iUCyU_U0J2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="100%" height="250"  src="https://www.youtube.com/watch?v=iUCyU_U0J2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="col-8" style="float: none;">
            <h2>{{$museum->artist_name}}</h2>
            <h2>Inducted in: {{$museum->date}}</h2>
            <p class="text-lg-start fs-3"> {{$museum->p1}}</p>
            <p class="text-lg-start fs-3"> {{$museum->p2}}</p>
            <p class="text-lg-start fs-3"> {{$museum->p3}}</p>
        </div>
{{--        <div class="col-12">--}}
{{--            {{$museum->video_url1}}--}}
{{--            {{$museum->video_url2}}--}}
{{--        </div>--}}
    </div>
</div>


@include('includes.footer')
