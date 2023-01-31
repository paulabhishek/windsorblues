
@include('includes.header')

<div class="container mt-5">
    <div class="col-12 text-center">
        <p class="fw-bold t ext-justify text-center fs-1 text-uppercase redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif; ">Become a member today!</p>
    </div>
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
    <form class="row g-2 mt-5" method="POST" action=" {{route('membership.submit')}}">
        {{ csrf_field() }}
        <div class="row justify-content-md-center">
            <div class="col-md-6 text">
                <label for="first_name" class="form-label ">First name</label>
                <input type="text" name="first_name"  class="form-control shadow" id="first_name" value="{{ old('first_name') }}" required/>
            </div>
        </div>
        <div class="row g-2 justify-content-md-center">
            <div class="col-md-6">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" name="last_name" class="form-control shadow" id="last_name" value="{{ old('last_name') }}" required/>
            </div>
        </div>
        <div class="row g-2 justify-content-md-center">
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control shadow" id="phone" value="{{ old('phone') }}" required/>
            </div>
        </div>
        <div class="row g-2 justify-content-md-center">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control shadow" id="email" value="{{ old('email') }}" required/>
            </div>
        </div>
        <div class="row g-2 justify-content-md-center">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" name="terms" type="checkbox" value="1" id="terms" >
                    <label class="form-check-label text-primary" for="terms" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
        </div>
        <div class="row g-2 justify-content-md-center">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" name="newsletter" type="checkbox" value="1" id="newsletter" >
                    <label class="form-check-label text-primary" for="newsletter" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agree to receiving News and Updates
                    </label>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="row g-2 justify-content-md-center">
                <div class="col-md-6">
                    <button class="btn btn-primary shadow" type="submit">Submit request</button>
                </div>
        </div>
    </form>
</div>



@include('includes.footer')

{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
