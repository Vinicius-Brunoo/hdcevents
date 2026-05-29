<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'HDC Events' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 font-sans text-slate-100 antialiased">
        <div class="min-h-screen bg-[radial-gradient(circle_at_top_left,rgba(20,184,166,0.20),transparent_32rem),linear-gradient(135deg,#020617_0%,#111827_48%,#0f172a_100%)]">
            <header class="border-b border-white/10 bg-slate-950/80 backdrop-blur">
                <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                    <a href="{{ route('events.index') }}" class="flex items-center gap-3">
                        <span class="flex size-10 items-center justify-center rounded-lg bg-teal-400 text-lg font-bold text-slate-950">H</span>
                        <span>
                            <span class="block text-lg font-semibold text-white">HDC Events</span>
                            <span class="block text-xs text-teal-200">Laravel + EC2 + GitHub Actions</span>
                        </span>
                    </a>

                    <nav class="flex flex-wrap items-center gap-2 text-sm">
                        <a href="{{ route('events.index') }}" class="rounded-md px-3 py-2 text-slate-200 transition hover:bg-white/10 hover:text-white">Eventos</a>
                        <a href="{{ route('contact') }}" class="rounded-md px-3 py-2 text-slate-200 transition hover:bg-white/10 hover:text-white">Contato</a>
                        <a href="{{ route('products') }}" class="rounded-md px-3 py-2 text-slate-200 transition hover:bg-white/10 hover:text-white">Produtos</a>
                        <a href="{{ route('events.create') }}" class="rounded-md bg-teal-400 px-3 py-2 font-semibold text-slate-950 transition hover:bg-teal-300">Criar evento</a>
                    </nav>
                </div>
            </header>

            <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:px-8">
                @if (session('status'))
                    <div class="mb-6 rounded-lg border border-teal-300/30 bg-teal-300/10 px-4 py-3 text-sm text-teal-100">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-lg border border-red-400/30 bg-red-500/10 px-4 py-3 text-sm text-red-100">
                        <strong class="font-semibold">Confira os dados:</strong>
                        <ul class="mt-2 list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </body>
</html>
