@extends('layouts.app', ['title' => $event->title . ' - HDC Events'])

@section('content')
    <article class="overflow-hidden rounded-lg border border-white/10 bg-white/10 shadow-2xl shadow-black/20">
        <div class="grid gap-0 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="min-h-80 bg-slate-900">
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="h-full min-h-80 w-full object-cover">
                @else
                    <div class="flex h-full min-h-80 items-center justify-center bg-gradient-to-br from-teal-400/30 to-slate-900">
                        <span class="text-5xl font-bold text-white/80">HDC</span>
                    </div>
                @endif
            </div>

            <div class="p-6 lg:p-8">
                <p class="text-sm font-semibold uppercase tracking-wide text-teal-200">Detalhes do evento</p>
                <h1 class="mt-2 text-4xl font-bold text-white">{{ $event->title }}</h1>

                <dl class="mt-6 grid gap-4 text-sm text-slate-300 sm:grid-cols-2">
                    <div class="rounded-lg border border-white/10 bg-slate-950/60 p-4">
                        <dt class="font-semibold text-white">Data</dt>
                        <dd class="mt-1">{{ $event->date->format('d/m/Y') }}</dd>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-slate-950/60 p-4">
                        <dt class="font-semibold text-white">Cidade</dt>
                        <dd class="mt-1">{{ $event->city ?: 'Nao informada' }}</dd>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-slate-950/60 p-4">
                        <dt class="font-semibold text-white">Tipo</dt>
                        <dd class="mt-1">{{ $event->private ? 'Privado' : 'Publico' }}</dd>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-slate-950/60 p-4">
                        <dt class="font-semibold text-white">Cadastro</dt>
                        <dd class="mt-1">{{ $event->created_at->format('d/m/Y H:i') }}</dd>
                    </div>
                </dl>

                <p class="mt-6 leading-7 text-slate-200">{{ $event->description }}</p>

                <div class="mt-6">
                    <h2 class="text-lg font-semibold text-white">Itens salvos em JSON</h2>
                    @if ($event->items)
                        <div class="mt-3 flex flex-wrap gap-2">
                            @foreach ($event->items as $item)
                                <span class="rounded-full bg-teal-400/15 px-3 py-1 text-sm font-medium text-teal-100">{{ $item }}</span>
                            @endforeach
                        </div>
                    @else
                        <p class="mt-2 text-sm text-slate-400">Nenhum item selecionado.</p>
                    @endif
                </div>

                <a href="{{ route('events.index') }}" class="mt-8 inline-flex rounded-lg border border-white/10 px-5 py-3 font-semibold text-slate-200 transition hover:bg-white/10">Voltar para eventos</a>
            </div>
        </div>
    </article>
@endsection
