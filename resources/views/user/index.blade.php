@foreach($users as $user)
    @foreach($user as $elem)
        {{ $elem }}
    @endforeach
@endforeach