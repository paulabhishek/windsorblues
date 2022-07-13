@component('mail::message')
# Introduction
{{$name}}
{{$email}}
The body of your message.
{{$message}}
@component('mail::button', ['url' => 'windsorblues.ca'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
