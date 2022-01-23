@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
<a href="/countries/admin">back</a>
<br>

@if($title != 'Country')
    @if($title == 'City')
        <br>
        <a href="/countries/admin/add/City">add new City</a>
    @elseif($title == 'Attraction')
        <br>
        <a href="/countries/admin/add/Attraction">add new Attraction</a>
    @else
        <br>
        <a href="/countries/admin/add/Description">add new Description</a>
    @endif

    <form action="" method="get">
        @if($title == 'City')
            {!! $selectCountry !!}
        @endif
        @if ($title == 'Attraction')
            {!! $selectCity !!}
        @endif
        @if ($title == 'Description')
            {!! $selectAttraction !!}
        @endif
        <input type="submit" value="orderBy">
    </form>
@else
    <a href="/countries/admin/add/Country">add new country</a>
@endif



<table border="1">
    @foreach($names as $elem)
        <tr>
            @if($title == 'Attraction')
                <td><a href="/countries/admin/show/Description?orderBy={{ $elem->name }}">{{ $elem->name }}</a></td>
                <td><a href="/countries/admin/edit/Attraction?editName={{ $elem->name }}">edit</a></td>
                <td><a href="/countries/admin/delete/Attraction?deleteId={{ $elem->id }}">del</a></td>
            @elseif ($title == 'Description')
                @foreach($elem->descriptions as $description)
                    <td>{{ $description->name }}</td>
                    <td><a href="/countries/admin/edit/Description?editName={{ $description->name }}">edit</a></td>
                    <td><a href="/countries/admin/delete/Description?deleteId={{ $description->id }}">del</a></td>
                @endforeach
            @elseif($title == 'Country')
                <td><a href="/countries/admin/show/City?orderBy={{ $elem->name }}">{{ $elem->name }}</a></td>
                <td><a href="/countries/admin/edit/Country?editName={{ $elem->name }}">edit</a></td>
                <td><a href="/countries/admin/delete/Country?deleteId={{ $elem->id }}">del</a></td>
            @elseif($title == 'City')
                <td><a href="/countries/admin/show/Attraction?orderBy={{ $elem->name }}">{{ $elem->name }}</a></td>
                <td><a href="/countries/admin/edit/City?editName={{ $elem->name }}">edit</a></td>
                <td><a href="/countries/admin/delete/City?deleteId={{ $elem->id }}">del</a></td>
            @endif
            {{--<td><a href="/countries/admin/edit/Attraction?orderBy={{ $elem->name }}">edit</a></td>--}}

        </tr>
    @endforeach
</table>
@endsection

