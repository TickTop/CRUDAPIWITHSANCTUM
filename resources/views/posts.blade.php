<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Blog</title>
</head>
<body>
    <div class="justify-center bg-green-300 max-w-5xl mx-auto">
    @foreach ($posts as $post)
    <article>
       <h1><a href="/posts/{{$post->id}}">
         {{$post->title}}
       </a></h1>
       <div>
           {{$post->excerpt}}
       </div>

    </article>
    @endforeach
  </div>
</body>
</html>