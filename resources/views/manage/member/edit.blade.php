

<h1>Edit Member</h1>
<form method="POST" action="{{ route ('manage.member.update', $member->id) }}">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <label for="name">Member Name:</label>
    <input name="name" type="text" value="{{$member->name}}"><br>
    <label for="email">Member email</label>
    <input name="email" type="email" value="{{$member->email}}"><br>
    <label for="phone">Member Phone</label>
    <input name="phone" type="tel" value="{{$member->phone}}"><br>
    <label for="newsletter">Newsletter</label>
    <input name="newsletter" type="text" value="{{$member->newsletter}}"><br>
    <input type="submit" value="Update"><br>
</form>

