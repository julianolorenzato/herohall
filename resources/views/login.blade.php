<x-layout title="Login">

    <div class="border">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="password" type="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
</x-layout>
