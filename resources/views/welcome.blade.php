@extends('layouts.app', ['title' => 'HDC Events - Home'])

@section('content')
    <section class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-teal-200">Praticando parte 2</p>
            <h1 class="mt-3 text-4xl font-bold tracking-tight text-white sm:text-5xl">Eventos cadastrados no Laravel</h1>
            <p class="mt-5 text-lg leading-8 text-slate-300">
                Home alterada para listar registros do banco, com data, upload de imagem, JSON e pagina de detalhes.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('events.create') }}" class="rounded-lg bg-teal-400 px-5 py-3 font-semibold text-slate-950 transition hover:bg-teal-300">Criar evento</a>
                <a href="{{ route('contact') }}" class="rounded-lg border border-white/10 px-5 py-3 font-semibold text-slate-200 transition hover:bg-white/10">Ver contact</a>
            </div>
        </div>

        <div class="rounded-lg border border-white/10 bg-white/10 p-6 shadow-2xl shadow-black/20">
            <h2 class="text-xl font-semibold text-white">Itens demonstrados</h2>
            <ul class="mt-4 grid gap-3 text-sm text-slate-300 sm:grid-cols-2">
                <li class="rounded-md bg-slate-950/60 p-3">Migration `events`</li>
                <li class="rounded-md bg-slate-950/60 p-3">Model `Event` com cast</li>
                <li class="rounded-md bg-slate-950/60 p-3">Formulario com `@csrf`</li>
                <li class="rounded-md bg-slate-950/60 p-3">Flash message</li>
                <li class="rounded-md bg-slate-950/60 p-3">Upload em `storage`</li>
                <li class="rounded-md bg-slate-950/60 p-3">View `show` por ID</li>
            </ul>
        </div>
    </section>

    <section class="mt-10">
        <div class="mb-5 flex items-center justify-between gap-4">
            <h2 class="text-2xl font-bold text-white">Lista de eventos</h2>
            <span class="rounded-full bg-white/10 px-3 py-1 text-sm text-slate-300">{{ $events->count() }} evento(s)</span>
        </div>

        @if ($events->isEmpty())
            <div class="rounded-lg border border-dashed border-white/20 bg-white/5 p-8 text-center">
                <h3 class="text-xl font-semibold text-white">Nenhum evento cadastrado</h3>
                <p class="mt-2 text-slate-300">Crie o primeiro registro para mostrar a listagem vindo do banco.</p>
                <a href="{{ route('events.create') }}" class="mt-5 inline-flex rounded-lg bg-teal-400 px-5 py-3 font-semibold text-slate-950 transition hover:bg-teal-300">Cadastrar evento</a>
            </div>
        @else
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($events as $event)
                    <article class="overflow-hidden rounded-lg border border-white/10 bg-white/10 shadow-xl shadow-black/10">
                        <div class="aspect-video bg-slate-900">
                            @if ($event->image)
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="h-full w-full object-cover">
                            @else
                                <div class="flex h-full items-center justify-center bg-gradient-to-br from-teal-400/30 to-slate-900">
                                    <span class="font-bold text-white/80">HDC Events</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-5">
                            <div class="flex items-center justify-between gap-3 text-sm text-slate-300">
                                <span>{{ $event->date->format('d/m/Y') }}</span>
                                <span class="rounded-full bg-white/10 px-2 py-1">{{ $event->private ? 'Privado' : 'Publico' }}</span>
                            </div>
                            <h3 class="mt-3 text-xl font-semibold text-white">{{ $event->title }}</h3>
                            <p class="mt-2 text-sm text-slate-300">{{ $event->city ?: 'Cidade nao informada' }}</p>
                            <a href="{{ route('events.show', $event) }}" class="mt-5 inline-flex rounded-lg bg-teal-400 px-4 py-2 font-semibold text-slate-950 transition hover:bg-teal-300">Saber mais</a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
@endsection
