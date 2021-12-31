<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="./app.css">
        <script src="./app.js"></script>
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <article>
            <div>
                {{ $post->body }}
            </div>
            <a href="/">back</a>
        </article>
    </body>
</html>
