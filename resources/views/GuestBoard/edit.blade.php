@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/guestBoard">guestBoard</a>
    <a class="navbar-brand" href="/guestBoard/moderator">moderator</a>
@endsection
@section('content')
<form action="/guestBoard/add" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $editPost->id }}">
    <input name="name" value="{{ $editPost->name }}">
    <textarea name="text">{{ $editPost->text }}</textarea>
    <input type="submit" name="update">
</form>
@endsection
