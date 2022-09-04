<h1 class="text-3xl font-bold underline">Unsubscribe</h1>


<form method="POST" action="{{ route('manage.mailchimp.unsubscribe') }}">
    {{csrf_field()}}
    <label for="email">Email</label>
    <input name="email" type="email" ><br>
    <input type="submit" value="Unsubscribe"><br>
</form> <br><br>
