<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit post</h1>
    <form action="/editPost/{{$post->id}}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="body">{{$post->body}}</textarea>
        <button type="submit">Save post</button>
    </form>
</body>

</html>