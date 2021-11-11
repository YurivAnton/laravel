{{--
{{ $result }}
<form action="">
    <input type="text" name="text">
    <input type="submit">
</form>
@if(empty($sum))
    <form action="">
        <input name="num1">
        <input name="num2">
        <input type="submit">
    </form>
@else
    {{ $sum }}
@endif
--}}

<form action="/test/result/">
    <input name="num1">
    <input name="num2">
    <input name="num3">
    <input type="submit">
</form>
