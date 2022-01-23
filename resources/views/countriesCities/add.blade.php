@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
@if(session('status'))
    {{ session('status') }}
@endif
<a href="/countries/admin">back</a>
<br>

<p>add new {{ $title }}</p>

<form action="" method="get">
    {!! $selectCountry !!}
    {!! $selectNewCountry !!}
    {!! $selectCity !!}
    {!! $selectNewCity !!}
    {!! $selectAttraction !!}
    {!! $selectNewAttraction !!}
    {!! $selectDescription !!}
    {!! $selectNewDescription !!}

    {{--@if($title == 'Attraction')
        {!! $selectCity !!}
    @endif
    @if($title == 'City')
            {!! $selectCountry !!}
    @endif
    @if($title == 'Description')
            {!! $selectCountry !!}
            {!! $selectCity !!}
            {!! $selectAttraction !!}
        <textarea name="new">text</textarea>
    @else
        <input name="new" value="{{ old('new') }}">
    @endif--}}
    <input type="submit" name="add">
</form>

@endsection