{{--35--}}

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
{{ dump($counter) }}

<form action="" method="get">
    <input name="name">
    <input name="name_confirmation">
    <input type="submit">
</form>
