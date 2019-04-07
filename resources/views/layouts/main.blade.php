<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <h1>MathHelp</h1>
        <ul>
            <li><a href="/triangle">Площадь треугольника</a></li>
            <li><a href="/circle">Площадь круга</a></li>
            <li><a href="/mediana">Формула медианы</a></li>
        </ul>
        <h2>@yield("heading")</h2>
        <p>@yield("description")</p>
        @yield("form")
        <p>@yield("answer")</p>
    </body>
</html>
