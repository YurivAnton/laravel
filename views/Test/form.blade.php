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

{{--<form action="/test/result/">
    <input name="num1">
    <input name="num2">
    <input name="num3">
    <input type="submit">
</form>--}}


{{--12--}}
{{--<form action="" method="POST">
    {{ csrf_field() }}
    <input name="num1">
    <input name="num2">
    <input name="num3">
    <input type="submit">
</form>--}}

{{--13--}}
<form action="" method="POST">
    {{ csrf_field() }}
    <label>name<br>
        <input type="text" name="name"><br>
    </label>
    <label>surname<br>
        <input type="text" name="surname"><br>
    </label>
    <label>email<br>
        <input type="text" name="email"><br>
    </label>
    <label>login<br>
        <input type="text" name="login"><br>
    </label>
    <label>password<br>
        <input type="password" name="password"><br>
    </label>
        <input type="submit"><br>
</form>
