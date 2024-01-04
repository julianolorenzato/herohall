<div class="bg-gray-200 shadow-md px-8 h-12 flex items-center justify-between border border-black">
    <a href="/">Home</a>

    @auth
        <span>
            Welcome, {{ auth()->user()->name }}
        </span>

        <form class="p-0 m-0" action="/logout" method="post">
            @csrf
            <button type="submit">Log out</button>
        </form>
    @else
        <div class="flex gap-4">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    @endauth
</div>
