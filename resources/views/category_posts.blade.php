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
    <h2>Posts associated with the category "{{ $posts[0]->category->slug }}"</h2>
    @foreach ($posts as $post)
        <article style="margin-top: 40px;">
            <h1 style="color: blue;">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </article>
        <a href="/posts">Go back</a>
    @endforeach
</body>

</html>
