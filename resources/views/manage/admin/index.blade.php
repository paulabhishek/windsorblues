@foreach ($admin as $object)
    Name:   {{ $object->name }}<br>
    Email: {{ $object->email }}<br>
    Level: {{ $object->level }}<br>
    user_id: {{ $object->id }}<br><br><br>
@endforeach
