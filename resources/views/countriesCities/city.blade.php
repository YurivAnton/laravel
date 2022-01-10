<a href="/countries">Countries</a>
<ol>
    @foreach($cities as $city)
        <li>
            <a href="{{ $_SERVER['REQUEST_URI'] }}&city={{ $city->name }}">{{ $city->name }}</a>
        </li>
    @endforeach
</ol>
