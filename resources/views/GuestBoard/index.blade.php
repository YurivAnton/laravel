@if(!empty($message))
    <h1>{{ $message }}</h1>
    <br>
@endif
@foreach($posts as $post)
    {{ $post->text }}
    <br>
    {{ $post->name }} {{ $post->created_at }}
    <br>
    <br>
@endforeach
<form action="/guestBoard/add" method="post">
    {{ csrf_field() }}
    <input name="name" value="{{ old('name') }}">
    <textarea name="text">{{ old('text') }}</textarea>
    <input type="submit" name="submit">
</form>
