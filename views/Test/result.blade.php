{{--{{ $num1 }}
{{ $num2 }}
{{ $num3 }}
{{ $method }}--}}

{{--12--}}
{{--{{ $num1 + $num2 }}--}}

{{--13--}}

{{--<ul>
    @foreach($data as $key=>$elem)
        <li>{{ $key }} - {{ $elem }}</li>
    @endforeach
</ul>--}}

{{--<ul>
    @foreach($data as $key=>$elem)
        <li>{{ $key }} - {{ $elem }}</li>
    @endforeach
</ul>--}}

{{--15--}}
{{--форма успешна отправлена
{{ $email }}--}}

{{--20--}}
{{--
<table border="1">
@foreach($users as $user)
    <tr>
        @foreach($user as $elem)
            <td>
                {{ $elem }}
            </td>
        @endforeach
    </tr>
@endforeach
</table>
--}}

{{--21--}}
{{--
<table border="1">
   @foreach($employees as $employee)
        <tr>
            @foreach($employee as $elem)
                <td>
                    {{ $elem }}
                </td>
            @endforeach
        </tr>
    @endforeach
--}}
{{ $employees }}
{{--
@foreach($employees as $employee)
    {{ $employee }}
@endforeach
--}}
</table>
{{--21.8-21.9--}}
{{--<table border="1">
    <tr>
        --}}{{--<td>{{ $employees }}</td>--}}{{--
    @foreach($employees as $employee)
        <td>
            {{ $employee }}
        </td>
    @endforeach
    </tr>
</table>--}}


{{--
<table border="1">
    @foreach($events as $event)
        <tr>
            @foreach($event as $elem)
                <td>{{ $elem }}</td>
            @endforeach
        </tr>
    @endforeach
</table>
--}}
