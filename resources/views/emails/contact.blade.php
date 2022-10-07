@component('mail::message')
    <h1>Contact message</h1>
    <p>Name: {{$name}}</p>
    <p>Email: {{$email}}</p>
    <p>Message: {{$message}}</p>
@component('mail::button', ['url' => 'windsorblues.ca'])
Reply to {{$email}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
