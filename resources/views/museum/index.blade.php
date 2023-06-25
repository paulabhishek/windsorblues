@include('includes.header');
{{--<div class="container mt-4 text-center">--}}
{{--    <h1 class=" text-center hdline  mb-4" style=" color: #150185; font-family: 'Playfair Display', serif;">This Day In History</h1>--}}
{{--    <blockquote class="blockquote mt-4">--}}
{{--        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
{{--    </blockquote>--}}
{{--</div>--}}
<div class="container mt-4 text-center">
    <h1 class="fw-bold ext-justify text-center fs-1 text-uppercase redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif; ">Our Hall Of Fame Inductees</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        @foreach ($museum as $object)
        <div class="col">
            <div class="card h-100 " style="border-color: rgb(0 15 255); background-color: white;">
                @php
                    $id =('carouselExampleControls' . $object->id)
                @endphp
                <div class="card-body">
                <div id="{{$id}}" class="carousel slide"  data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @isset($object->image1)
                                <img style="border: 1px solid red;" class="bd-placeholder-img img-fluid rounded d-block w-100" src="{{ asset('storage/' . $object->image1) }}"  width="800" height="400" alt="Card image cap">
                            @endisset
{{--                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>--}}
                        </div>
{{--                        <div class="carousel-item ">--}}
{{--                            @isset($object->image2)--}}
{{--                                <img style="border-color: rgb(0 15 255); background-color: green;" class="bd-placeholder-img img-fluid rounded d-block w-100" src="{{ asset('storage/' . $object->image2) }}"  width="800" height="400" alt="Card image cap" >--}}
{{--                            @endisset--}}
{{--                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>--}}
{{--                        </div>--}}
                    </div>
{{--                    <button class="carousel-control-prev" type="button" data-bs-target="#{{$id}}" data-bs-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Previous</span>--}}
{{--                    </button>--}}
{{--                    <button class="carousel-control-next" type="button" data-bs-target="#{{$id}}" data-bs-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Next</span>--}}
{{--                    </button>--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">{{$object->artist_name}}</h5>--}}
{{--                        <p class="card-text">{{Str::limit($object->p1, 40) }}</p>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer">--}}
{{--                        <small class="text-muted">Inducted in {{ $object->date }}</small>--}}
{{--                        <a href="{{ url('museum/')}}/{{$object->id }}" class="btn btn-sm btn-primary btn-end">Read more</a>--}}

{{--                    </div>--}}
                </div>
{{--                    <p class="card-title fs-1 mt-2" style="color: #150185; font-family: Arial, sans-serif;">{{$object->artist_name}}</p>--}}
{{--                    <p class="card-text">{{Str::limit($object->p1, 40) }}</p>--}}
                    <a href="{{ url('museum/')}}/{{$object->id }}" class="card-title fs-1 mt-2 display-5"  style="font-family: 'Candal', sans-serif; color: blue">{{$object->artist_name}}</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@include('includes.footer');


