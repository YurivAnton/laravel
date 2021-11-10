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
