<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Hall</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-red-500">
    @auth
    <p>You are logged in!</p>
    <form action="/logout" method="post">
        @csrf

        <button type="submit">Log out</button>
    </form>

    <div class="border">
        <h2>Create a new Post</h2>
        <form action="/createPost" method="post" class="flex flex-col gap-2 items-start">
            @csrf

            <input name="title" type="text" placeholder="Post title">
            <textarea name="body" id="" cols="30" rows="10" placeholder="Post content"></textarea>
            <button type="submit">Create Post</button>
        </form>
    </div>

    <div class="flex flex-col gap-2">
        <h2>Your posts</h2>
        @foreach($posts as $post)
        <div class="bg-slate-800 p-4">
            <div class="flex gap-2">
                <h3 class="text-white">{{$post['title']}}</h3>
                <span>by {{$post->user->name}}</span>
            </div>
            <p>{{$post['body']}}</p>

            <div class="flex gap-2 text-slate-400">
                <p><a href="/editPost/{{$post->id}}">Edit</a></p>
                <form action="/deletePost/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="border">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="border">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="password" type="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
    @endauth
</body>

</html>