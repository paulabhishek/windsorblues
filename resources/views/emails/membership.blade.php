@component('mail::message')
   Membership Request
   Name: {{$first_name}}{{$last_name}}
   Phone:  {{$phone}}
   Email: {{$email}}
   Newsletter: {{$newsletter}}
   Terms: {{$terms}}


    @component('mail::button', ['url' => 'windsorblues.ca/manage/member/'])
        Add User
    @endcomponent


@endcomponent
