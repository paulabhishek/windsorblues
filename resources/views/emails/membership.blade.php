@component('mail::message')
    <h1>Membership Request</h1>
    <p>Name: {{$first_name}} {{$last_name}}</p>
    <p>Phone:  {{$phone}}</p>
    <p>Email: {{$email}}</p>
    <p>Newsletter: {{$newsletter}}</p>
    <p>Terms: {{$terms}}</p>
    <p>Note: '1' indicates user accepted terms '0' indicates they did not</p>
{{--    <a href="windsorblues.ca/manage/member/create" type="button">Add user</a>--}}
@component('mail::button', ['url' => 'windsorblues.ca/manage/member/create'])
Add User
@endcomponent
@endcomponent
