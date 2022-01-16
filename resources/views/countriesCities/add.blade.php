@if(session('status'))
    {{ session('status') }}
@endif
<a href="/countries/admin">back</a>
<br>

<p>add new {{ $title }}</p>

<form action="" method="get">
    @if($title == 'Attraction')
        {!! $selectCountry !!}
        {!! $selectCity !!}
    @endif
    @if($title == 'City')
            {!! $selectCountry !!}
    @endif
    @if($title == 'Description')
            {!! $selectCountry !!}
            {!! $selectCity !!}
            {!! $selectAttraction !!}
        <textarea name="descriptionOfAttraction">text</textarea>
    @else
        <input name="new" value="{{ old('new') }}">
    @endif
    <input type="submit" name="add">
</form>