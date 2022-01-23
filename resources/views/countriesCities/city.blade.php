@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
<a href="/countries">Countries</a>
<ol>
    @foreach($cities as $city)
        <li>
            <a href="{{ $_SERVER['REQUEST_URI'] }}&city={{ $city->name }}">{{ $city->name }}</a>
        </li>
    @endforeach
</ol>
@endsection