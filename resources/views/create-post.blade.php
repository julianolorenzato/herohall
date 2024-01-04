<x-layout title="Create post">
    <h2>Create a new Post</h2>
    <form action="/createPost" method="post" class="flex flex-col gap-2">
        @csrf

        <input name="title" type="text" placeholder="Post title">
        <textarea name="body" cols="30" rows="10" placeholder="Post content"></textarea>
        <button type="submit">Create Post</button>
    </form>
</x-layout>
