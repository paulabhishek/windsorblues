
@include('includes.header')

<div class="container mt-5">
    <p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Become a member today!</p>
    <form class="row g-3" method="POST" action=" {{route('membership.submit')}}">
        {{ csrf_field() }}
        <div class="col-md-6">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" name="first_name"  class="form-control" id="first_name" value="" required/>
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Last name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" value="" required/>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" name="phone" class="form-control" id="phone" value="" required/>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="" required/>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" name="terms" type="checkbox" value="1" id="terms" required>
                <label class="form-check-label" for="terms">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" name="newsletter" type="checkbox" value="1" id="newsletter" required>
                <label class="form-check-label" for="newsletter">
                    Agree to receiving News and Updates
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit request</button>
        </div>
    </form>
</div>



@include('includes.footer')

{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
