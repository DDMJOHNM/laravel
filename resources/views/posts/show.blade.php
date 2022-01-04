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
            <a href="{{isset($_REQUEST['page']) ? '/?page='.urlencode($_REQUEST['page']) : '/' }}">back</a>
        </article>


        @if ($post->comments->count())
        <section>
            <article>
                <div>
                    <img src="https://i.pravatar.cc/50" alt="">
                </div>
                <div>
                    <header>
                        <h3>{{ $post->comments->last()->author->username}}</h3>
                        <p>{{ $post->comments->last()->created_at }}</p>
                    </header>
                    <p>
                        {{ $post->comments->last()->body}}
                    </p>
                </div>
            </article>
        </section>
        <section>
            <form method="POST" action="#">
                @csrf
                <header>
                    <img src="https://i.pravatar.cc/50" alt="">
                    <p>Want to participate?</p>
                    <textarea placeholder="Comment here" rows="5" cols="30">

                    </textarea>
                </header>
                <button type="submit">Comment</button>
            </form>
        </section>
        @endif
    </body>
</html>
