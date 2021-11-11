{{--
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@include('elems.header')
<aside>
    сайдбар
    @yield('aside')
</aside>
<main>
    @yield('main')
</main>
@include('elems.footer')
</body>
</html>
--}}

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<header>
    <h1>@yield('title')</h1>
</header>
<main>
    @yield('main')
</main>
</body>
</html>
