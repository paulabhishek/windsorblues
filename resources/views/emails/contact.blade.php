@component('mail::message')
Contact
Name: {{$name}}
{{$email}}
The body of your message.
Message: {{$message}}
@component('mail::button', ['url' => 'windsorblues.ca'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
