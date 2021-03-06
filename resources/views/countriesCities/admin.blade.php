@extends('layouts.app')
@section('menu')
    <a class="navbar-brand" href="/countries">countries</a>
    <a class="navbar-brand" href="/countries/admin">admin</a>
@endsection
@section('content')
<table border="1">
    <tr>
        <th>num</th>
        <th>title</th>
        <th>show all</th>
        <th>add new</th>
        {{--<th>edit</th>--}}
        {{--<th>delete</th>--}}
    </tr>
    <tr>
        <td>1</td>
        <td>Countries</td>
        <td><a href="/countries/admin/show/Country">show all</a></td>
        <td><a href="/countries/admin/add/Country">add</a></td>
        {{--<td><a href="/countries/admin/edit/Country">edit</a></td>--}}
        {{--<td><a href="/countries/admin/deleteCountry">delete</a></td>--}}
    </tr>
    <tr>
        <td>2</td>
        <td>Cities</td>
        <td><a href="/countries/admin/show/City">show all</a></td>
        <td><a href="/countries/admin/add/City">add</a></td>
        {{--<td><a href="/countries/admin/edit/City">edit</a></td>--}}
        {{--<td><a href="/countries/admin/deleteCity">delete</a></td>--}}
    </tr>
    <tr>
        <td>3</td>
        <td>Attractions</td>
        <td><a href="/countries/admin/show/Attraction">show all</a></td>
        <td><a href="/countries/admin/add/Attraction">add</a></td>
        {{--<td><a href="/countries/admin/edit/Attraction">edit</a></td>--}}
        {{--<td><a href="/countries/admin/deleteAttraction">delete</a></td>--}}
    </tr>
    <tr>
        <td>4</td>
        <td>Descriptions</td>
        <td><a href="/countries/admin/show/Description">show all</a></td>
        <td><a href="/countries/admin/add/Description">add</a></td>
        {{--<td><a href="/countries/admin/edit/Description">edit</a></td>--}}
        {{--<td><a href="/countries/admin/deleteAttraction">delete</a></td>--}}
    </tr>
</table>
@endsection