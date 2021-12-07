{{--25--}}

{{ $message }}
<table border="1">
    <th>id</th>
    <th>title</th>
    <th>description</th>
    <th>edit</th>
    <th>delete</th>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td><a href="/post/{{ $post['id'] }}/">{{ $post['title'] }}</a></td>
            <td>{{ $post['description'] }}</td>
            <td><a href="/post/edit/{{ $post['id'] }}/">edit</a></td>
            <td><a href="/post/del/{{ $post['id'] }}/">delete</a></td>
        </tr>
    @endforeach
</table>
