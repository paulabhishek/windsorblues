@include('includes.header')

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <img class="img-fluid d-block d-sm-none border border-primary" style="width:100%; height:90%;"   src="images/Blues Foundation logo - horizontal stacked.jpg"/>
        </div>
    </div>
</div>
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
        <div class="col-lg-4 col-md-3 mt-3 mb-3 col-sm-4">
            <a target="_blank" href="http://canadasouthbluessocietyck.blogspot.com/" type="button"  class="btn btn-outline-primary" style="color: #150185; font-family: 'Abyssinica SIL', serif; font-weight: bold;">Visit Our Chatham Site</a>
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
        </div>
        <div class="carousel-inner rounded border-2 border-bottom border-primary position-relative">
            <div class="carousel-item active  " data-bs-interval="100000">
                <div class=" d-none d-sm-block 	d-md-block d-lg-block">
                    <a target="_blank type=" type="button" href="https://www.ticketscene.ca/events/" class="btn btn-primary btn-lg fw-bold position-absolute top-0 start-50 translate-middle-x border border-2 border-danger">Buy Tickets Now!</a><br>
                    {{--                    <p class="badge text-bg-warning">The Cash Box Kings</p>--}}
                </div>
                @foreach ($event as $object)
                <a  href="https://windsorblues.ca/event/{{$object->id}}"><img src="images/promo angel forrest .jpg" class="d-block w-100 c-img " title="Upcoming event"></a>
                @endforeach
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/Johnnle Johnson slider.jpg" class="d-block w-100 c-img" title="Slide 3">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/event-planner.jpg" class="d-block w-100 c-img" title="Slide 4">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/Windsor Chatham ad.jpg" class="d-block w-100 c-img" title="Slide 4">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/Road to Memphis .jpg" class="d-block w-100 c-img" title="Slide 4">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/latest sponsor.jpg" class="d-block w-100 c-img" title="Slide 6">
{{--                <div class="carousel-caption d-none d-md-block">--}}
{{--                                        <button type="button" class="btn btn-outline-light">Sign up now!</button>--}}
{{--                                        <p>Get discounted tickets on memberships</p>--}}
{{--                </div>--}}
            </div>
            <div class="carousel-item" data-bs-interval="20000">
                <img src="images/news collage.jpg" class="d-block w-100 c-img" title="Slide 7">
            </div>
{{--            Windsor Proclamation Model--}}
{{--            <div class="carousel-item" data-bs-interval="00000">--}}
{{--                <img src="images/slider-3.jpg" class="d-block h-80 w-100 c-img" title="Slide 9">--}}
{{--                <div class="carousel-caption">--}}
{{--                    <div class="d-none d-sm-block">--}}
{{--                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1-modal-xl" >Read more</button>--}}
{{--                        <div class="modal fade" id="exampleModal1-modal-xl"  tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-xl modal-dialog-centered">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <img src="images/windsor-declaration.jpg" class="d-block w-100 c-img" title="Slide 1">--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button type="button" class="btn btn-primary btn-sm d-md-none d-lg-block" data-bs-toggle="modal" data-bs-target="#exampleModal1-modal-xl">Read more</button>--}}
{{--                    <a href="{{url('https://docs.google.com/document/d/1u0-NURCMT238GfWDygwVfDRiW7YgzGiTx4o28G4XgaU/edit?usp=sharing')}}" type="button" class="btn btn-primary btn-sm d-block d-sm-none" >Read more</a>--}}
{{--                    <p class="fs-6 badge text-bg-primary fw-bold " data-bs-toggle="modal" data-bs-target="#exampleModal1">Read more</p>--}}
{{--                    <!-- Modal -->--}}
{{--                    <div class="modal fade" id="exampleModal1-modal-xl"  tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-xl modal-dialog-centered">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <img src="images/windsor-declaration.jpg" class="d-block w-100 c-img" title="Slide 1">--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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

{{--<div class="container mt-4">--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-md-3 col-sm-4 d-none d-sm-block">--}}
{{--                <div>--}}
{{--                    <img width="105" height="95" src="images/The_Blues_Foundation_logo_no_background.png"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 mt-4 col-sm-4">--}}
{{--                <div>--}}
{{--                    <p class="fs-5" style="font-family: 'Roboto Slab', serif; color: #150185">WHERE WE STRIVE TO KEEP THE BLUES ALIVE</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-3 mt-3 col-sm-4">--}}
{{--                <a target="_blank" href="http://canadasouthbluessocietyck.blogspot.com/" type="button"  class="btn btn-outline-primary" style="color: #150185; font-family: 'Abyssinica SIL', serif; font-weight: bold;">Visit Our Chatham Site</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--</div>--}}

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
                    <p class="text-right fs-3 px-4" style="color:#000000; text-align: left !important; font-family: 'Didact Gothic', sans-serif;">Founded November 19, 2000 and adding the Chatham-Kent chapter in 2012, the Canada South Blues Society is a registered non-profit. As a member of the Blues Foundation we annually send the winner of our competition to the International Blues Challenge. Recognized by the Blues Foundation with the 2011 Historical Preservation Award. Survivors of the Covid shutdown, we bring you world class blues music, promote local aspiring musicians, and support local charities. We are community focused.</p>
                </div>
            </div>
        </div>
    </div>
{{--Our Sponsors--}}
<div class="container text-center mt-4">
    <h1 class="text-center  mb-4 redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Our Sponsors</h1>
    <div class="row">
        <div class="col-sm-2 col-md-2 mt-2">

            <img class="img-fluid contain shadow rounded" src="images/liuna.png" title="LiUNA!625">

        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" src="images/Long and McQuade sponsor shot.jpg" title="Long &amp; McQuade">

        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" src="images/unifor2.png" title="UNIFOR Local195">

        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" src="images/unifor.png" title="UNIFOR Local2458">


        </div>





        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/Little Glenn's.jpg" title="Little Glenn's">

        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/D&amp;R.jpg" title="D&amp;R Vacuum Sewing Centre">

        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" width="50%" height="30%" src="images/444 Retiree image 3.jpg" title="444 Retiree">

        </div>

        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" style="width:80%; height:70%;" src="images/urbnbud.png" title="URBNBUD">

        </div>
        <div class="col-sm-2 col-md-2 mt-2">
            <img class="img-fluid contain shadow rounded" style="width:80%; height:70%;" src="images/couvillon logo remade.jpg" title="URBNBUD">

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
                    <div class="form-group pb-3">
                        <label for="name" class="form-label h5" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Name</label>
                        <input placeholder="Name" class="form-control shadow rounded" name="name" type="text" id="validationTextarea3" style="border-width: 3px; border-color: #3029f438;" required />

                    </div>
                    <div class="form-group pb-3">
                        <label for="phone" class="form-label h5" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">Phone</label>
                        <input placeholder="Phone" class="form-control shadow rounded" name="phone" type="tel" id="validationTextarea2" style="border-width: 3px; border-color: #3029f438;" required/>
                    </div>
                    <div class="form-group pb-3">
                        <label for="email" class="form-label h5" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">E-mail</label>
                        <input placeholder="name@example.com" class="form-control shadow rounded" name="email" type="email" id="validationTextarea" style="border-width: 3px; border-color: #3029f438;" required/>
                    </div>

                    <div class="form-group mt-3">
                        <input class="form-check-input" name="newsletter" type="checkbox" value="1" id="validationFormCheck1" required/>
                        <label for="validationFormCheck1" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-check-label" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif;">I accept terms and conditions</label>
{{--                        <label data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary">read here</label>--}}
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="border-color: rgb(0 15 255); background-color: white;">
                                <div class="modal-header" style="border-color: rgb(0 15 255); background-color: white;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions/ Privacy Policy</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" >
                                    By agreeing to the terms and conditions of our privacy policy you give the Canada South Blues Society
                                    the right to communicate with you via the contact information provided. At no time will your
                                    information be shared with a third party. Our communications will consist of mainly notices of upcoming
                                    concerts and news regarding our society. All questions regarding these terms and conditions can be
                                    forwarded to (contact@windsorblues.ca). These terms and conditions may be updated from time to
                                    time as deemed by the board of directors.
                                </div>
                                <div class="modal-footer" style="border-color: rgb(0 15 255); background-color: white;">
                                    <button type="button" class="btn btn-primary" style="color: white; font-family: 'Aref Ruqaa Ink', serif;" data-bs-dismiss="modal">I Agree & Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary shadow rounded" style="color: white; font-family: 'Aref Ruqaa Ink', serif;">Subscribe</button>
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
{{--Sponsors redesign--}}
{{--<div class="demo-row">--}}
{{--    <div class="container" id="id-sponsors">--}}
{{--        <div class="text-center">--}}
{{--            <h2 style="margin:20px 0;color:#fff;">Platinum Sponsors</h2>--}}
{{--        </div>--}}
{{--        <div id="sponsor-carousel" class="carousel slide" data-ride="carousel">--}}
{{--            <!-- Indicators -->--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
{{--            </ol>--}}
{{--            <!-- Wrapper for slides -->--}}
{{--            <div class="carousel-inner" role="listbox">--}}
{{--                <div class="item active">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/liuna.png" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/Long and McQuade sponsor shot.jpg" style="width: 155px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/Little Glenn's.jpg" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/D&R.jpg" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/unifor2.png" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/unifor.png" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/444 Retiree image.jpg" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/444 Retiree image 3.jpg" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/couvillon logo remade.jpg" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-5 col-md-4 col-xs-6">--}}
{{--                            <div class="sponsor-feature"><img alt="" src="images/urbnbud.png" style="width: 200px;" /></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script>--}}
{{--    $('#sponsor-carousel').carousel({--}}
{{--        interval: 3000,--}}
{{--        cycle: true,--}}
{{--    });--}}
{{--</script>--}}

@include('includes.footer')

