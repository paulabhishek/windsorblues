@component('mail::message')
    # Introduction
    {{$first_name}}{{$last_name}}
    {{$phone}}
    The body of your message.
    {{$email}}
    @component('mail::button', ['url' => 'windsorblues.ca'])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
