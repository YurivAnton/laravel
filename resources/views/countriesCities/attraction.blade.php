<a href="/countries">Countries</a>-><a href="/countries?country={{ $name['country'] }}">Cities</a>
<ol>
    @foreach($attractions as $attraction)
        <li>
            <a href="{{ $_SERVER['REQUEST_URI'] }}&attraction={{ $attraction->name }}">{{ $attraction->name }}</a>
        </li>
    @endforeach
</ol>

