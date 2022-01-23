@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
<a href="/countries">Countries</a>-><a href="/countries?country={{ $name['country'] }}">Cities</a>-><a href="/countries?country={{ $name['country'] }}&city={{ $name['city'] }}">Attractions</a>
<br>
{{ $description->descriptionOfAttraction }}
@endsection