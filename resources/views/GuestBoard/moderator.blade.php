@if(session('status'))
    <h1>
        {{ session('status') }}
        <br>
    </h1>
@endif

<table border="1">
    <tr>
        <th>text</th>
        <th>name</th>
        <th>created</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->text }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->created_at }}</td>
            <td><a href="/guestBoard/moderator?deleteId={{ $post->id }}">delete</a></td>
            <td><a href="/guestBoard/moderator?editId={{ $post->id }}">edit</a></td>
        </tr>
    @endforeach
</table>
