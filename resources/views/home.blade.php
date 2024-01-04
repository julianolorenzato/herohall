<x-layout title="Home">
    @auth
        <div class="flex mb-3 border border-black">
            <a href="/all">
                <button class="bg-gray-200 p-2 shadow-md">All posts</button>
            </a>

            <a href="/yours">
                <button class="bg-gray-200 p-2 shadow-md">Your posts</button>
            </a>

            <a href="/createPost">
                <button class="bg-gray-200 p-2 shadow-md">+ New Post</button>
            </a>
        </div>
    @endauth

    @foreach ($posts as $post)
        <div class="bg-slate-800 p-4 w-[600px]">
            <div class="flex gap-2">
                <h3 class="text-white">{{ $post['title'] }}</h3>
                <span>by {{ $post->user->name }}</span>
            </div>
            <p>{{ $post['body'] }}</p>

            <div class="flex gap-2 text-slate-400">
                @if (auth()->id() === $post->user_id)
                    <p><a href="/editPost/{{ $post->id }}">Edit</a></p>
                    <form action="/deletePost/{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach

</x-layout>
