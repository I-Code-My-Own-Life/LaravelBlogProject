<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog with laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">
</head>

<body class="antialiased">
    <article>
        <h1 style="color:blue;">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <p>Category :<a style="color: blue;" href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
    </article>
    <p style="margin-left:300px">Submitted by <a href="#" style="color:rgb(6, 180, 113);">{{ $post->user->name }}</a></p>
    <a href="/posts">Go back</a>
</body>

</html>