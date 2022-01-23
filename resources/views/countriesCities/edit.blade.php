@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
<a href="/countries/admin">back</a>
<br>

<form action="" method="get">
    {!! $selectCountry or ''!!}
    {!! $selectNewCountry or ''!!}
    {!! $selectCity or ''!!}
    {!! $selectNewCity or ''!!}
    {!! $selectAttraction or ''!!}
    {!! $selectNewAttraction or ''!!}
    {!! $selectDescription or ''!!}
    {!! $selectNewDescription or ''!!}
    <input type="submit" name="edit">
</form>
@endsection