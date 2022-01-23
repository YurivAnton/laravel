@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
<ul>
    @foreach($countries as $country)
        <li>
            <a href="/countries?country={{ $country->name }}">{{ $country->name }}</a>
        </li>
    @endforeach
</ul>
@endsection
