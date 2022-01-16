<a href="/countries/admin">back</a>
@if($title == 'Country')
<br>
<a href="/countries/admin/add/Country">add new country</a>
@endif

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
        <select name="orderByCountry">
            <option>all</option>
            @foreach($countries as $country)
                <option>{{ $country->name }}</option>
            @endforeach
        </select>
        @if ($title == 'Attraction' or $title == 'Description')
            <select name="orderByCity">
                <option>all</option>
                @foreach($cities as $city)
                    <option>{{ $city->name }}</option>
                @endforeach
            </select>
        @endif
        @if ($title == 'Description')
            <select name="orderByAttraction">
                <option>all</option>
                @foreach($attractions as $attraction)
                    <option>{{ $attraction->name }}</option>
                @endforeach
            </select>
        @endif
        <input type="submit" value="orderBy">
    </form>
@endif

<table border="1">
    @foreach($names as $elem)
        <tr>
            @if ($title == 'Description')
                @foreach($elem->descriptions as $description)
                    <td>{{ $description->descriptionOfAttraction }}</td>
                @endforeach
            @else
                <td>{{ $elem->name }}</td>
            @endif
            <td>edit</td>
            <td>del</td>
        </tr>
    @endforeach
</table>

{{--
{{ dump($names) }}
--}}


{{--
{{ $names }}
--}}

{{--
{{ $title }}
--}}
