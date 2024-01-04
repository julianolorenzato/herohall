<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="dotted">
    <x-header />
    <div class="flex flex-col items-center gap-1 pt-4">
        {{ $slot }}
    </div>
</body>

</html>
