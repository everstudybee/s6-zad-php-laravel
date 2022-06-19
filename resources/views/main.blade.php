<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{$title ?? '📝 Fabryka postów'}}</title>
    <link rel="icon" href="/img/favicon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/app.css" media="screen,projection"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>{{$title ?? '📝 Fabryka postów'}}</h1>
        </div>
    </div>
    <div class="row">
        @yield('menu')
    </div>
</div>
<hr/>

@yield('content')

{{-- wczytujemy skrtypt który jest generowany przez Webpack i zawiera materialize.js --}}
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>
