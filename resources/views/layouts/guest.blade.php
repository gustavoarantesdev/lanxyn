<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <title>Lanxyn</title>
    <link
        type="image/x-icon"
        href="{{ asset('favicon.ico') }}"
        rel="icon"
    />

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans antialiased">
    @yield('content')
</body>
