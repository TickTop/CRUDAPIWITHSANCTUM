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
    <div class="max-w-2xl mx-auto">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    
    <a href="/">Go Back</a>

   </div>
</body>
</html>