@if(!empty($bulletins))
    <a href="/bulletinBoard">home</a>
    <br>
    @foreach($bulletins as $bulletin)
        {{ $bulletin->text }}
        <br>
        <br>
        {{ $bulletin->name }} {{ $bulletin->date }}
        <br>
        <br>
        <br>
        <br>
    @endforeach
    <form action="/bulletinBoard/add" method="post">
        {{ csrf_field() }}
        <input name="name">
        <br>
        <textarea name="text"></textarea>
        <br>
        <input type="hidden" name="date" value="{{ date('Y-m-d H:i:s') }}">
        <input type="hidden" name="headline_id" value="{{ $bulletin->headline_id }}">
        <input type="hidden" name="headline_name" value="{{ $bulletin->headline_name }}">
        <br>
        <input type="submit" name="addNewBulletin">
    </form>
@else
<ol>
    @foreach($headlines as $headline)
        <li><a href="/bulletinBoard/?headline={{ $headline->name }}">{{ $headline->name }}</a></li>
    @endforeach
</ol>
@endif