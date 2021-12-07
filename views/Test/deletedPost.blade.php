{{--27--}}

<table border="1">
    <th>id</th>
    <th>title</th>
    <th>description</th>
    <th>text</th>
    <th>restore</th>
    @foreach($deletedPost as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['title'] }}</td>
            <td>{{ $post['description'] }}</td>
            <td>{{ $post['text'] }}</td>
            <td><a href="/post/restorePost/{{ $post['id'] }}/">restore</a></td>
        </tr>
    @endforeach
</table>
