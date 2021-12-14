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
{{--{{ $employees }}--}}
{{--
@foreach($employees as $employee)
    {{ $employee }}
@endforeach
</table>
--}}
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

{{--21.24--}}
{{--<table border="1">
    @foreach($employees as $employee)
        <tr>
            @foreach($employee as $elem)
                <td>
                    {{ $elem }}
                </td>
            @endforeach
        </tr>
    @endforeach
</table>--}}

{{--23.2--}}
{{--<table border="1">
    @foreach($products as $product)
        <tr>
            @foreach($product as $elem)
                <td>{{ $elem }}</td>
            @endforeach
        </tr>
    @endforeach
</table>--}}

{{--28--}}
{{--

<table border="1">
    <tr>
        <th>login</th>
        <th>password</th>
        <th>City</th>
        --}}
{{--<th>name</th>
        <th>surname</th>
        <th>email</th>--}}{{--

    </tr>
    <tr>
        <td>{{ $city->user['login'] }}</td>
        <td>{{ $city->user['password'] }}</td>
        <td>{{ $city['name'] }}</td>
        --}}
{{--<td>{{ $user['login'] }}</td>
        <td>{{ $user['password'] }}</td>
        <td>{{ $user->profile['name'] }}</td>
        <td>{{ $user->profile['surname'] }}</td>
        <td>{{ $user->profile['email'] }}</td>--}}{{--

    </tr>
</table>
--}}

{{--
<table border="1">
    <tr>
        <th>login</th>
        <th>password</th>
        <th>name</th>
        <th>surname</th>
        <th>email</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user['login'] }}</td>
            <td>{{ $user['password'] }}</td>
            <td>{{ $user->profile['name'] }}</td>
            <td>{{ $user->profile['surname'] }}</td>
            <td>{{ $user->profile['email'] }}</td>
        </tr>
    @endforeach
</table>
--}}
{{--28.6--}}
{{--
<table border="1">
    <tr>
        <th>login</th>
        <th>password</th>
        <th>city</th>
    </tr>
    @foreach($cities as $city)
        <tr>
            <td>{{ $city->user['login'] }}</td>
            <td>{{ $city->user['password'] }}</td>
            <td>{{ $city['name'] }}</td>
        </tr>
    @endforeach
</table>
--}}
{{--28.8--}}
{{--
<table border="1">
    <th>country</th>
    <th>city</th>
    @foreach($countries as $country)
        <tr>
            <td>{{ $country['name'] }}</td>
            <td>{{ $country->city['name'] }}</td>
        </tr>
    @endforeach
</table>
--}}
{{--28.9--}}
{{--
<table border="1">
    <th>name</th>
    <th>surname</th>
    <th>email</th>
    <th>login</th>
    <th>password</th>
    <th>city</th>
    <th>country</th>
    @foreach($countries as $country)
        <tr>
            <td>{{ $country->city->user->profile['name'] }}</td>
            <td>{{ $country->city->user->profile['surname'] }}</td>
            <td>{{ $country->city->user->profile['email'] }}</td>
            <td>{{ $country->city->user['login'] }}</td>
            <td>{{ $country->city->user['password'] }}</td>
            <td>{{ $country->city['name'] }}</td>
            <td>{{ $country['name'] }}</td>
        </tr>
    @endforeach
</table>
--}}
{{--28.10--}}
{{--
<table border="1">
    @foreach($countries as $country)
        <tr>
            <td>{{ $country['name'] }}</td>
            @if(count($country->city) > 1)
                @foreach($country->city as $city)
                    <td>{{ $city['name'] }}</td>
                @endforeach
            @else
                <td>{{ $country->city[0]['name'] }}</td>
            @endif
        </tr>
    @endforeach
</table>
--}}
{{--28.12--}}
{{--
<table border="1">
    @foreach($countries as $country)
        <tr>
            <td>{{ $country['name'] }}</td>
            @foreach($country->users as $user)
                <td>{{ $user['login'] }}</td>
                <td>{{ $user['password'] }}</td>
            @endforeach
        </tr>
    @endforeach
</table>
--}}

{{--28.13--}}
{{--
@foreach($products as $product)
    {{ $product->name }}<br>
    @foreach($product->categories as $category)
        {{ $category->name }}<br>
    @endforeach
    <br><br>
@endforeach
--}}
{{--28.14--}}
@foreach($categories as $category)
    {{ $category->name }}<br>
    @foreach($category->products as $product)
        {{ $product->name }}<br>
    @endforeach
    <br><br>
@endforeach
