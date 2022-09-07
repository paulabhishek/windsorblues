
@include('includes.header')
<div class="container">

    <div class="container">

        <p class="fw-bold text-justify text-center fs-1 text-uppercase" style="color: #150185; font-family: 'Source Sans Pro', sans-serif;">Contact Us</p>

        <form class="row g-3 needs-validation" novalidate="" method="POST" action=" {{route('contact.submit')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 position-relative">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name"  class="form-control" id="name"  required/>
            </div>
            <div class="col-md-6 position-relative">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="validationTooltipUsernamePrepend" required/>
{{--                    <div class="invalid-tooltip">--}}
{{--                        Please enter a valid email.--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
{{--                <div class="invalid-tooltip">--}}
{{--                    This field is needed.--}}
{{--                </div>--}}
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div>


@include('includes.footer')

