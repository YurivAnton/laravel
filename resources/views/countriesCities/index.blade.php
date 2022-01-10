@extends('layouts.layout')
@section('main')
<ul>
    @foreach($countries as $country)
        <li>
            <a href="/countries?country={{ $country->name }}">{{ $country->name }}</a>
        </li>
    @endforeach
</ul>


@endsection
