<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="../app.css">
        <script src="./app.js"></script>
    </head>
    <body>
        <h1>Hello World Blog</h1>
        @auth

        <span>Welcome back, {{ auth()->user()->name }} </span>
        <ul>
            <li><a href="/admin/posts/create">New Post</a>
            <li><a href="/admin/posts">Manage Posts</a>

            <li>
                <form method="POST" action="/logout">
                @csrf

                <button type="submit">Log Out</button>
                </form>
            </li>
        </ul>

        @else

        <a href="/register">Register</a>
        <a href="/login">Login</a>


        @endauth
       <div>{{ Request::is('/') ? $posts->links() : '' }}</div>

        <?php foreach ($posts as $post) : ?>

            <article>
                <h1>
                 <a href="/posts/{{ $post->id }}{{isset($_REQUEST['page']) ? '?page='.urlencode($_REQUEST['page']) : '' }}">
                  {{ $post->title }}
                 </a>
                </h1>
                <p> By <a href="/authors/{{ $post->author->username}}">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->id}}">{{ $post->category->name }}</a>  </p>
                <div>
                    {{ $post->excerpt; }}

                </div>

            </article>
        <?php endforeach; ?>

    </body>
</html>
@if (session()->has('success'))
    <p>{{ session('success') }}</p>
@endif
