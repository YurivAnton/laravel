<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
{{--<p class="{{$class}}">{{$name}}</p>
<p style="{{$style}}">{{$age}}</p>
<p>{{$salary}}</p>
<input value="{{$name}}">
<input value="{{$age}}">
<input value="{{$salary}}">
<a href="{{$href}}">{{$text}}</a>
<p>текущую дату {{date('d.m.Y', time())}}</p>--}}

{{--<p>{{$employee['name']}}</p>
<p>{{$employee['age']}}</p>
<p>{{$employee['salary']}}</p>
<p>{{count($employee)}}</p>
<p>{{isset($location['country']) ? $location['country'] : 'Ukrajina'}}</p>
<p>{{isset($location['city']) ? $location['city'] : 'Dolyna'}}</p>
<p>{{isset($year) ? $year:date('Y')}}, {{isset($month) ? $month:date('m')}}, {{isset($day) ? $day:date('d')}}</p>
<p>{!! $str !!}</p>
@php
for($i=0; $i<10; $i++){
    echo $i;
}
@endphp--}}

{{--6--}}
{{--@if($day == 6)
    subota
@endif
@if($day == 7)
    nedilya
@endif--}}

{{--@if($day > 5)
    выходному дню
@else
    рабочего дня недели
@endif

@if($month > 2 AND $month < 6)
    vesna
@elseif ($month > 5 AND $month < 9)
    lito
@elseif ($month > 8 AND $month < 12)
    osin
@elseif ($month == 12 OR $month == 1 OR $month == 2)
    zyma
@else
    0000000
@endif

@unless($age > 17)
    несовершеннолетний
@endunless

@if(count($arr) > 0)
    @php
        echo array_sum($arr);
    @endphp
@else
    количество элементов равно нулю
@endif--}}

{{--7--}}

<ul>
    @foreach($arr as $elem)
        {{--<li>{{$elem}}</li>--}}
        {{--<li>{{$elem * $elem}}</li>--}}
        <li>{{ sqrt($elem) }}</li>
    @endforeach
</ul>

<ul>
    @foreach($str as $key=>$elem)
        <li>{{ ($key+1).' '.$elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach($arr as $elem)
        @if($elem % 2 == 0)
            <li>{{ $elem }}</li>
        @endif
    @endforeach
</ul>

@if(is_array($data))
    <ul>
        @foreach($data as $elem)
            <li>{{ $elem }}</li>
        @endforeach
    </ul>
@else
    <p>{{ $data }}</p>
@endif

<table>
    @foreach($arr5 as $subArr5)
        <tr>
            @foreach($subArr5 as $elem)

        </tr>
</table>
</body>
</html>
