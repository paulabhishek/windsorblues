@component('mail::message')
    <h1>Membership Request</h1>
    <p>Name: {{$first_name}} {{$last_name}}</p>
    <p>Phone:  {{$phone}}</p>
    <p>Email: {{$email}}</p>
    <p>Newsletter: {{$newsletter}}</p>
    <p>Terms: {{$terms}}</p>
    <p>Note: '1' indicates user accepted terms '0' indicates he did not</p>
@component('mail::button', ['url' => 'windsorblues.ca/manage/member/'])
Add User
@endcomponent
@endcomponent
