<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Single post view</h1>
    <li>
        Title: {{ $post->title }}
        <br>
        Content: {{ $post->content }}
        <br>
        <br>
    </li>
    
    <br>

    <a href="/posts">Back To All Posts</a>

</body>

</html>
