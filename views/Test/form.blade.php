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
{{--<form action="" method="POST">
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
</form>--}}

{{--15--}}
{{--{{ $message }}
<form action="" method="get">
    <input type="text" name="num">
    <input type="submit">
</form>--}}

{{--{{ $message }}
<form action="" method="get">
    {{ csrf_field() }}
    <input name="email">
    <input type="submit">
</form>--}}

{{--16--}}
{{--<form action="" method="get">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit">
</form>--}}
{{--<form action="" method="get">
    <input type="text" name="num1" value="{{ old('num1') }}">
    <input type="text" name="num2" value="{{ old('num2') }}">
    <input type="text" name="num3" value="{{ old('num3') }}">
    <input type="text" name="num4" value="{{ old('num4') }}">
    <input type="text" name="num5" value="{{ old('num5') }}">
    <input type="submit">
</form>--}}

{{--18--}}
{{--{{ $message }}
{{ Cookie::get('message') }}
<form action="" method="get">
    <input type="text" name="birthday">
    <input type="submit">
</form>--}}
{{ Cookie::get('counter') }}
