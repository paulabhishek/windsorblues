
@include('includes.header')



<div class="container">
    <h1 class="text-center mt-4 mb-4" style="color: #150185; font-family: 'Playfair Display', serif;">Become a member today!</h1>
    <form class="row g-3 needs-validation" novalidate="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">First name</label>
            <input type="text" name="first_name"  class="form-control" id="validationTooltip01" value="Mark" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Last name</label>
            <input type="text" name="last_name" class="form-control" id="validationTooltip02" value="Otto" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip03" class="form-label">Email</label>
            <div class="input-group has-validation">
                <input type="email" name="email" class="form-control" id="validationTooltip03" aria-describedby="validationTooltipUsernamePrepend" required="">
                <div class="invalid-tooltip">
                    Please enter a valid email.
                </div>
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Phone</label>
            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" class="form-control" id="validationTooltip03" required="">
            <div class="invalid-tooltip">
                Please provide a valid phone number.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>



<div class="container">
    <form>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">First name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Last name</label>
                </div>
            </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form3Example4" class="form-control" />
            <label class="form-label" for="form3Example4">Password</label>
        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
            <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
            </label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

    </form>
</div>


@include('includes.footer')

{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
