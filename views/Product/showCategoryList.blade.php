<ul>
    @foreach($categories as $category)
        <li>
            <a href="/product/{{{ $loop->iteration }}}/">{{ $category['name'] }}</a> - {{ count($category['products']) }} шт
        </li>
    @endforeach
</ul>
