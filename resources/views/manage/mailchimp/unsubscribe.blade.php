@include('includes.header')
<h1 class="text-3xl text-center font-bold underline">Unsubscribe</h1>

<div class="container mt-5">
    <div class="row">
        <div class="col offset-md-12">
            <form class="mt-6 mt-md-12" method="POST" action=" {{route('manage.mailchimp.unsubscribe')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" name="email" type="email" id="validationTextarea" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" value="Unsubscribe" class="btn btn-primary">Unsubscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('includes.footer')
