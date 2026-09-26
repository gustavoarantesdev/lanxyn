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

<body class="flex h-screen bg-slate-50 font-sans antialiased">
    {{-- Sidebar --}}
    <nav>
        @include('partials.sidebar')
    </nav>

    {{-- Content container --}}
    <div class="flex flex-1 flex-col">
        {{-- Navbar --}}
        <header>
            @include('partials.navbar')
        </header>

        {{-- Content --}}
        <main class="relative flex-1 shrink-0 overflow-hidden p-4">
            <article class="flex h-full flex-col overflow-y-auto rounded-xl border border-slate-300 bg-white shadow-md">
                @yield('content')
            </article>
        </main>
    </div>
</body>
