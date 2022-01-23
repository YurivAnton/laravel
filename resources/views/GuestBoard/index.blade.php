@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/guestBoard">guestBoard</a>
    <a class="navbar-brand" href="/guestBoard/moderator">moderator</a>
@endsection
@section('content')
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
    author's name<br>
    <input name="name" value="{{ old('name') }}"><br><br>
    <textarea name="text">{{ old('text') }}</textarea><br><br>
    <input type="submit" name="submit">
</form>
@endsection