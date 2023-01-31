@include('includes.header')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <img class="img-fluid d-block d-sm-none border border-primary" style="width:100%; height:90%;"   src="images/Blues Foundation logo - horizontal stacked.jpg"/>
        </div>
    </div>
</div>

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner rounded border-primary border-bottom position-relative">
            <div class="carousel-item active  " data-bs-interval="100000">
                <div class=" d-none d-sm-block 	d-md-block d-lg-block">
                    <a target="_blank type=" type="button" href="https://www.ticketscene.ca/events/43289/" class="btn btn-primary btn-lg fw-bold position-absolute top-0 start-50 translate-middle-x">Buy Tickets Now!</a><br>
                    {{--                    <p class="badge text-bg-warning">The Cash Box Kings</p>--}}
                </div>
                <a target="_blank" href="https://www.ticketscene.ca/events/43289/"><img src="images/ticket-website.jpg" class="d-block w-100 c-img " title="Upcoming event"></a>
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/Harding-Davis slider.jpg" class="d-block w-100 c-img" title="Slide 2">
            </div>

            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/tim swaddling.jpg" class="d-block w-100 c-img" title="Slide 3">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/event-planner.jpg" class="d-block w-100 c-img" title="Slide 4">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/jw-jones teazer slider.jpg" class="d-block w-100 c-img" title="Slide 5">
            </div>


            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/website sponsor sheet.jpg" class="d-block w-100 c-img" title="Slide 6">
{{--                <div class="carousel-caption d-none d-md-block">--}}
{{--                                        <button type="button" class="btn btn-outline-light">Sign up now!</button>--}}
{{--                                        <p>Get discounted tickets on memberships</p>--}}
{{--                </div>--}}
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/news collage.jpg" class="d-block w-100 c-img" title="Slide 7">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/slider-3.jpg" class="d-block h-80 w-100 c-img" title="Slide 8">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1" >Read more</button>
{{--                    <p class="fs-6 badge text-bg-primary fw-bold " data-bs-toggle="modal" data-bs-target="#exampleModal1">Read more</p>--}}
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="images/windsor-declaration.jpg" class="d-block w-100 c-img" title="Slide 1">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

{{--    </div>--}}
{{--        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-0 col-sm-0 h-50 text-center">--}}
{{--            <img class="img-fluid d-none d-md-inline"images/Logo-KBA.jpg"/>--}}
{{--            <img class="img-fluid d-none d-md-inline"images/Blues Foundation logo - vertical stacked.jpg"/>--}}
{{--        </div>--}}

{{--        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-11">--}}
{{--            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">--}}
{{--                <div class="carousel-indicators">--}}
{{--                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>--}}
{{--                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>--}}
{{--                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>--}}
{{--                </div>--}}
{{--                <div class="carousel-inner">--}}
{{--                    --}}{{--        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-20"  height="532images/Blues Foundation logo - horizontal stacked.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em"></text></img>--}}

{{--                    <div class="carousel-item active" data-bs-interval="10000">--}}
{{--                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="337" height="532images/Z3DsIGxE1FVfEj2eE7zVG1NSgBzk0PwZvYzAWWWo.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em"></text></img>--}}
{{--                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">First slide</text></svg>--}}
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <button type="button" class="btn btn-outline-light">Buy Tickets Now!</button>--}}
{{--                            <p>The Cash Box Kings</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="carousel-item" data-bs-interval="2000">--}}
{{--                        --}}{{--                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532images/65-og.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em"></text></img>--}}
{{--                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Second slide</text></svg>--}}
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <button type="button" class="btn btn-outline-light">Sign up now!</button>--}}

{{--                            --}}{{--                    <h5>Sign up now!</h5>--}}
{{--                            <p>Get discounted tickets on memberships</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="carousel-item">--}}
{{--                        --}}{{--                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532images/monkeyjunk1.png" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em"></text></img>--}}
{{--                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>--}}
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <h5>Donate to the Blues Society</h5>--}}
{{--                            --}}{{--                    <p>Some representative placeholder content for the third slide.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="visually-hidden">Previous</span>--}}
{{--                </button>--}}
{{--                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="visually-hidden">Next</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-0 col-sm-0 h-50 text-center">--}}
{{--                <img class="img-fluid d-md-none d-lg-inline d-none d-md-inlineimages/Logo-KBA.jpg"/>--}}
{{--                <img class="img-fluid d-md-none d-lg-inline d-none d-md-inlineimages/Blues Foundation logo - vertical stacked.jpg"/>--}}
{{--        </div>--}}

{{--<title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>--}}
{{--<text x="50%" y="50%" fill="#555" dy=".3em">--}}

{{--</text>--}}




{{--Chatham Site--}}

<div class="container mt-4">
        <div class="row text-center">
            <div class="col-md-3 col-sm-4 d-none d-sm-block">
                <div>
                    <img width="105" height="95" src="images/The_Blues_Foundation_logo_no_background.png"/>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 col-sm-4">
                <div>
                    <p class="fs-5" style="font-family: 'Roboto Slab', serif; color: #150185">WHERE WE STRIVE TO KEEP THE BLUES ALIVE</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 mt-3 col-sm-4">
                <a target="_blank" href="http://canadasouthbluessocietyck.blogspot.com/" type="button"  class="btn btn-outline-primary" style="color: #150185; font-family: 'Abyssinica SIL', serif; font-weight: bold;">Visit Our Chatham Site</a>
            </div>
        </div>
</div>

{{--Wing man--}}
<div class="container mt-4">
    <div class="row ">
        <div class="col-sm-12 col-lg-6 col-md-6 text-center .d-sm-none .d-md-block">
            <div class="my-2 mx-1">
                <img src="images/Canada South Blues Est 2000 .jpg" class="shadow rounded" width="340" height="310">
            </div>
        </div>
        {{--News--}}
        <div class="col-lg-6 col-md-6">
            <div class="card pt-10" style="border-color: rgb(0 15 255);">
                <div class="card-header text-center" style="border-color: rgb(0 15 255); background-color: white;">
                    <small class="fs-3" style="font-family: 'Lobster', cursive; color: #0f0e40;">Windsor Blues News</small>
                </div>
                <div class="card-body overflow-auto" style="max-width: 100%; max-height: 400px;">
                    @foreach ($news as $object)
                    <p class="card-title fs-4" style="font-family: 'Abyssinica SIL', serif; font-weight: bold; color: #150185;">{{ $object->title }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                        </svg>
                        <text class="text-muted ">{{date('l' . ', '. 'F j' . ', ' .  'Y', strtotime($object->date))}}</text>

                    <p class="card-text mt-2">{!! Str::limit($object->p1, 80)!!}</p>
                            <small class="text-primary fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                {{\App\Http\Controllers\WelcomeController::time_elapsed_string($object->date, false)}}
                            </small>
                        <a href="{{ url('/news/')}}/{{$object->id }}" class="btn btn-sm btn-primary btn-end">Read more</a>
                        @if (count($news) >! count($news)-1)
                            <hr style="color: rgb(0 15 255); ">
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
            <div class="col-sm-12 col-lg-6 col-md-12 text-center ">
                <div class="p-2 m-1">
                    <h1 class="text-center redline  mb-4" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif; ">Our Mission Statement</h1>
                    <p class="px-4 fs-3" style="color:#000000; text-align: left !important; font-family: 'Didact Gothic', sans-serif;">The mandate of the Canada South Blues Society as described in By-Law #1 of our Charter is to unite the blues community in the Canada South area and give it a central voice; to expand the overall awareness of the blues in the general population, to expose our youth to the art form via blues programs in our schools, to help support blues artists in Canada and abroad and to create an exciting social setting for blues lovers to meet.</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-12 text-black ">
                <div class="p-2 m-1">
                    <h1 class="text-center redline mb-4" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">History</h1>
                    <p class="text-right fs-3 px-4" style="color:#000000; text-align: left !important; font-family: 'Didact Gothic', sans-serif;">The Canada South Blues Society, based in Windsor Ontario, was founded November 19th, 2000. The Chatham-Kent chapter was established in 2012. We are a certified non-profit volunteer group and are affiliated with the International Blues Foundation in Memphis Tennessee.
                        In addition to hosting world class blues, rhythm & blues and roots artists on a regular basis we also host and/or support various benefits and charity fundraisers each year.
                        We annually hold a regional competition for the Road to Memphis challenge for local blues artists.  The winner represents our Society at the international competition in Memphis.</p>
                </div>
            </div>
        </div>
    </div>
{{--Our Sponsors--}}
<div class="container text-center mt-4">
    <h1 class="text-center  mb-4 redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Our Sponsors</h1>
    <div class="row">
        <div class="col-sm-2 col-md-2 mt-2">
{{--            <img class="img-fluid d-block d-sm-none"images/Blues Foundation logo - horizontal stacked.jpg"/>--}}
            <img class="img-fluid contain shadow rounded" src="images/liuna.png" title="LiUNA!625"/>
{{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" src="images/Long and McQuade sponsor shot.jpg" title="Long & McQuade"/>
{{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" src="images/unifor2.png" title="UNIFOR Local195"/>
{{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" src="images/unifor.png" title="UNIFOR Local2458"/>

{{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/AngelStar.jpg" title="Angel Star"/>
            {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/Little Glenn's.jpg" title="Little Glenn's"/>
{{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/D&R.jpg" title="D&R Vacuum Sewing Centre"/>
            {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/Dean's Beans.jpg" title="Deans's BBQ Sauce"/>
            {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="40%" height="20%" src="images/urbnbud.png" title="URBNBUD"/>
            {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>--}}
        </div>

    </div>
</div>

    <div class="container mt-5" id="news">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center">
                <p class="fw-bold text-justify text-center fs-1 text-uppercase " style="color: #150185; font-family: 'Carter One', cursive;">Sign up to our Newsletter today!</p>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="container row g-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form class="mt-4 mt-md-0" method="POST" action=" {{route('welcome.newsletterStore')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input placeholder="Name" class="form-control shadow rounded" name="name" type="text" id="validationTextarea3" style="border-width: 3px; border-color: #3029f438;" required />

                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input placeholder="Phone" class="form-control shadow rounded" name="phone" type="tel" id="validationTextarea2" style="border-width: 3px; border-color: #3029f438;" required/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input placeholder="name@example.com" class="form-control shadow rounded" name="email" type="email" id="validationTextarea" style="border-width: 3px; border-color: #3029f438;" required/>
                    </div>

                    <div class="form-group mt-3">
                        <input class="form-check-input" name="newsletter" type="checkbox" value="1" id="validationFormCheck1" required/>
                        <label for="validationFormCheck1" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-check-label" style="color:#000000;">I accept terms and conditions</label>
{{--                        <label data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary">read here</label>--}}
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions/ Privacy Policy</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    By agreeing to the terms and conditions of our privacy policy you give the Canada South Blues Society
                                    the right to communicate with you via the contact information provided. At no time will your
                                    information be shared with a third party. Our communications will consist of mainly notices of upcoming
                                    concerts and news regarding our society. All questions regarding these terms and conditions can be
                                    forwarded to (contact@windsorblues.ca). These terms and conditions may be updated from time to
                                    time as deemed by the board of directors.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Agree & Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary shadow rounded">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center ">
        <h1 class="text-center  mb-3 redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Message from our president</h1>
        <blockquote class="blockquote mt-4">
            @foreach ($pres_msg as $object)
            <p class="text-justify fs-1" style="font-family: 'Josefin Sans', sans-serif;">{{$object->message}}</p>
            @endforeach
        </blockquote>
    </div>


@include('includes.footer')

