
@include('includes.header')
<div class="container">
    <div class="col-12 text-center">
        <p class="fw-bold t ext-justify text-center fs-1 text-uppercase redline" style="color: #150185; font-family: 'Aref Ruqaa Ink', serif; ">Contact US</p>
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
    <form class="row g-3 needs-validation mt-3" novalidate="" method="POST" action=" {{route('contact.submit')}}" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-md-6 text">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name"  class="form-control shadow" value="{{ old('name') }}" id="name" required/>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6 text">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control shadow" id="email" value="{{ old('email') }}" aria-describedby="validationTooltipUsernamePrepend" required/>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6 text">
                    <label for="message">Message</label>
                    <textarea class="form-control shadow" name="message" value="{{ old('message') }}" id="message" rows="3"></textarea>
                </div>
            </div>
            <div class="row g-2 justify-content-md-center">
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Send message</button>
                </div>
            </div>
        </form>
</div>


@include('includes.footer')

