@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('aside')
    @parent

    <br>
    aside-practic
@endsection

@section('main')
    {{--9.1--}}
    {{--@foreach($links as $link)
        <a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a>
    @endforeach--}}

    {{--9.2--}}
    {{--<ul>
    @foreach($links as $link)
        <li><a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a></li>
    @endforeach
    </ul>--}}

    {{--9.3 - 9.6--}}
    {{--<table border="1">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach($employees as $employee)
            @if($employee['salary'] == 2000)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    @foreach($employee as $elem)
                        <td>{{ $elem }}</td>
                    @endforeach
                </tr>
            @endif
        @endforeach
    </table>--}}

    {{--9.7 - 9.8--}}
    {{--<table border="1">
        <tr>
            <th>имя</th>
            <th>фамилия</th>
            <th>статус</th>
        </tr>
        @foreach($users as $user)
            @if($user['banned'])
                <tr bgcolor="red">
            @else
                <tr bgcolor="green">
            @endif
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                @if($user['banned'])
                    <td>забанен</td>
                @else
                    <td>активен</td>
                @endif
            </tr>
        @endforeach
    </table>--}}

    {{--9.9 - 9.10--}}
    {{--<form action="">
        <select>
        @foreach($inputs as $input)
            --}}{{--<input type="text" value="{{ $input }}">--}}{{--
            <option>{{ $input }}</option>
        @endforeach
        </select>
        <input type="submit">
    </form>--}}

    {{--9.11--}}
    <ul>
        @foreach($days as $day)
            @if($day == $today)
                <li class="active">{{ $day }}</li>
            @else
                <li>{{ $day }}</li>
            @endif
        @endforeach
    </ul>
@endsection
