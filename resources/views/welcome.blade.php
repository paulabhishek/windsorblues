@include('includes.header')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" src="images/da65a44a16402ca63c12e1b3d926009b.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em"></text></img>

                <div class="carousel-caption d-none d-md-block">
                    <h5>Buy Tickets Now!</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" src="images/65-og.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em"></text></img>

                <div class="carousel-caption d-none d-md-block">
                    <h5>Sign up now!</h5>
                    <p>Get discounted tickets on memberships</p>
                </div>
            </div>
            <div class="carousel-item active">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mt-4 col-sm-4">
                        <div>
                            <p>!!</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-3 col-sm-4">
                        <div>
{{--                            <img width="100" height="85" src="images/75274204C4084884AC8373DD486C0793.jpg"/>--}}
                            <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="532" src="images/monkeyjunk1.png" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em"></text></img>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mt-3 col-sm-4">
                        <button type="button" class="btn btn-outline-primary">!!</button>
                    </div>

                </div>

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
<div class="container mt-4">
        <div class="row text-center " >
            <div class="col-lg-4 col-md-3 col-sm-4">
                <div>
                    <img width="100" height="85" src="images/75274204C4084884AC8373DD486C0793.jpg"/>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 col-sm-4">
                <div>
                    <p>WHERE WE STRIVE TO KEEP THE BLUES ALIVE</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 mt-3 col-sm-4">
                <button type="button" href="{{route('chatham.home')}}" class="btn btn-outline-primary">Visit Our Chatham Site</button>
            </div>
        </div>
</div>

<div class="container mt-4">
    <div class="row ">
        <div class="col-sm-12 col-lg-6 col-md-6 text-center .d-sm-none .d-md-block">
            <div class="mt-2">
                <img src="images/wingedwheel.png" width="350" height="300">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card pt-10">
                <div class="card-header text-center">
                    Windsor Blues News
                </div>
                <div class="card-body overflow-auto">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Open</a>

                    <h5 class="card-title mt-2">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Open</a>
                    <h5 class="card-title mt-2">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Open</a>

                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-12 text-black ">
                <div class="p-2 m-1">
                    <h3 class="text-center">Our Mission Statement</h3>
                    <p class="text-justify">The mandate of the Canada South Blues Society as described in By-Law #1 of our Charter is to unite the blues community in the Canada South area and give it a central voice; to expand the overall awareness of the blues in the general population, to expose our youth to the art form via blues programs in our schools, to help support blues artists in Canada and abroad and to create an exciting social setting for blues lovers to meet.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-md-12 text-black ">
                <div class="p-2 m-1">
                    <h3 class="text-center">History</h3>
                    <p class="text-justify">The Canada South Blues Society, based in Windsor Ontario, was founded November 19th, 2000. The Chatham-Kent chapter was established in 2012.
                        We are a certified non-profit volunteer group and are affiliated with the International Blues Foundation in Memphis Tennessee.
                        In addition to hosting world class blues, rhythm & blues and roots artists on a regular basis we also host and/or support various benefits and charity fundraisers each year.
                        We annually hold a regional competition for the Road to Memphis challenge for local blues artists.  The winner represents our Society at the international competition in Memphis.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center">
                <h2>Sign up to our Newsletter today!</h2>
            </div>
            <div class="col-md-6 offset-md-1">
                <form class="mt-4 mt-md-0 was-validated">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" id="validationTextarea3" required/>
                        <div class="invalid-feedback">
                            Please enter your name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input class="form-control" name="phone" type="tel" id="validationTextarea2" required/>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="email" id="validationTextarea" required/>
                        <div class="invalid-feedback">
                            Please enter your email.
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" id="validationFormCheck1" required/>
                        <label for="validationFormCheck1" class="form-check-label">I accept terms and conditions</label>
                        <div class="invalid-feedback">Accept our terms</div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-4 text-center">
        <h1>Message from our president</h1>
        <blockquote class="blockquote mt-4">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        </blockquote>
    </div>

@include('includes.footer')

