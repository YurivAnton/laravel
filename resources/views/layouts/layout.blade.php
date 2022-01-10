<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>home</title>

    <link href="/css/app.css" rel="stylesheet">

    <script src="/js/app.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 logo" style="border: 1px solid black">HEADER</div>
            {{--<nav class="col-lg-7 top-nav" style="border: 1px solid black">--}}
                <nav class="navbar navbar-default col-lg-7 top-nav" style="border: 1px solid black">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">MySite</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-main">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Ссылка 1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Ссылка 2</a></li>
                                <li><a href="#">Ссылка 3</a></li>
                                <li><a href="#">Ссылка 4</a></li>
                                <li><a href="#">Ссылка 5</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            {{--</nav>--}}
        </div>
    </div>
</header>

<main class="main">
    <div class="container">
        <div class="row main-article">
            <aside class="col-xs-12 col-sm-3 col-lg-3 left" style="border: 1px solid black">LEFT</aside>
            {{--<div class="clearfix hidden-lg"></div>--}}
            <article class="col-xs-12 col-sm-9 col-lg-6 article" style="border: 1px solid black">ARTICLE</article>
        </div>
    </div>
</main>

<footer class="footer" style="border: 1px solid black">
    <div class="container">
        FOOTER
    </div>
</footer>

</body>
</html>
@yield('main')