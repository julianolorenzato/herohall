<x-layout title="Edit Post">

    <h2>Edit post</h2>
    <form class="flex flex-col gap-2" action="/editPost/{{ $post->id }}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $post->title }}">
        <textarea name="body" cols="30" rows="10">{{ $post->body }}</textarea>
        <button type="submit">Save post</button>
    </form>
</x-layout>
