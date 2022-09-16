@include('includes.header')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
{{--                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" src="images/da65a44a16402ca63c12e1b3d926009b.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em"></text></img>--}}
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">First slide</text></svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Buy Tickets Now!</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>


            <div class="carousel-item" data-bs-interval="2000">
{{--                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" src="images/65-og.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em"></text></img>--}}
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Second slide</text></svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sign up now!</h5>
                    <p>Get discounted tickets on memberships</p>
                </div>
            </div>

            <div class="carousel-item">
{{--                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" src="images/monkeyjunk1.png" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em"></text></img>--}}
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Donate to the Blues Society</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



{{--Chatham Site--}}

<div class="container mt-4">
        <div class="row text-center">
            <div class="col-lg-4 col-md-3 col-sm-4">
                <div>
                    <img width="105" height="95" src="images/75274204C4084884AC8373DD486C0793.jpg"/>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 col-sm-4">
                <div>
                    <p class="fs-5" style="font-family: 'Roboto Slab', serif; color: #150185">WHERE WE STRIVE TO KEEP THE BLUES ALIVE</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 mt-3 col-sm-4">
                <button href="{{route('welcome.chatham')}}" type="button"  class="btn btn-outline-danger">Visit Our Chatham Site</button>
            </div>
        </div>
</div>

{{--Wing man--}}
<div class="container mt-4">
    <div class="row ">
        <div class="col-sm-12 col-lg-6 col-md-6 text-center .d-sm-none .d-md-block">
            <div class="mt-5">
                <img src="images/wingedwheel.png" width="350" height="300">
            </div>
        </div>
        {{--News--}}
        <div class="col-lg-6 col-md-6">
            <div class="card pt-10">
                <div class="card-header text-center">
                   Windsor Blues Latest News
                </div>
                <div class="card-body overflow-auto" style="max-width: 100%; max-height: 400px;">
                    @foreach ($news as $object)
                    <h5 class="card-title" style="color: #150185">{{ $object->title }}</h5>
                    <p class="card-text">{{ $object->p1 }}</p>
                            <small class="text-primary fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                {{\App\Http\Controllers\WelcomeController::time_elapsed_string($object->date, false)}}
                            </small>
                        <a href="{{ url('/news/')}}/{{$object->id }}" class="btn btn-sm btn-primary btn-end">Read more</a>
                        @if (count($news) >! count($news)-1)
                            <hr style="color: #150185; height: 3px;">
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{--Mission History--}}

    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-12 text-center ">
                <div class="p-2 m-1">
                    <h1 class=" text-center hdline  mb-4" style=" color: #150185; font-family: 'Playfair Display', serif;">Our Mission Statement</h1>
                    <p class="px-4 fs-4" style="text-align: left !important; font-family: 'Source Sans Pro', sans-serif;">The mandate of the Canada South Blues Society as described in By-Law #1 of our Charter is to unite the blues community in the Canada South area and give it a central voice; to expand the overall awareness of the blues in the general population, to expose our youth to the art form via blues programs in our schools, to help support blues artists in Canada and abroad and to create an exciting social setting for blues lovers to meet.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-md-12 text-black ">
                <div class="p-2 m-1">
                    <h1 class="hdline mb-4" style="color: #150185; font-family: 'Playfair Display', serif;">History</h1>
                    <p class="text-right fs-4 px-2" style="text-align: left !important; font-family: 'Source Sans Pro', sans-serif;">The Canada South Blues Society, based in Windsor Ontario, was founded November 19th, 2000. The Chatham-Kent chapter was established in 2012.
                        We are a certified non-profit volunteer group and are affiliated with the International Blues Foundation in Memphis Tennessee.
                        In addition to hosting world class blues, rhythm & blues and roots artists on a regular basis we also host and/or support various benefits and charity fundraisers each year.
                        We annually hold a regional competition for the Road to Memphis challenge for local blues artists.  The winner represents our Society at the international competition in Memphis.</p>
                </div>
            </div>
        </div>
    </div>
{{--Our Sponsors--}}
<div class="container text-center mt-4">
    <h1 class="text-center  mb-4 hdline" style="color: #150185; font-family: 'Playfair Display', serif;">Our Sponsors</h1>
    <div class="row">
        <div class="col-sm-2 col-md-4">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
        </div>
        <div class="col-sm-2 col-md-4">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
        </div>
        <div class="col-sm-2 col-md-4">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>

        </div>
        <div class="col-sm-2 col-md-4 p-2">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>

        </div>
    </div>
</div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center">
                <p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Sign up to our Newsletter today!</p>
            </div>
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0" method="POST" action=" {{route('welcome.newsletterStore')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" name="name" type="text" id="validationTextarea3" required/>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input class="form-control" name="phone" type="tel" id="validationTextarea2" required/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" name="email" type="email" id="validationTextarea" required/>
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-check-input" name="newsletter" type="checkbox" value="1" id="validationFormCheck1" required/>
                        <label for="validationFormCheck1" class="form-check-label">I accept terms and conditions</label>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center ">
        <h1 class="text-center  mb-4 hdline" style="color: #150185; font-family: 'Playfair Display', serif;">Message from our president</h1>
        <blockquote class="blockquote mt-4">
            <p class="text-justify fs-4" style="font-family: 'Source Sans Pro', sans-serif;">Stay tuned.!</p>
        </blockquote>
    </div>

@include('includes.footer')

