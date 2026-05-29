@extends('layouts.app', ['title' => 'Criar evento - HDC Events'])

@section('content')
    <section class="rounded-lg border border-white/10 bg-white/10 p-6 shadow-2xl shadow-black/20">
        <p class="text-sm font-semibold uppercase tracking-wide text-teal-200">Formulario + CSRF</p>
        <h1 class="mt-2 text-3xl font-bold text-white">Criar novo evento</h1>

        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" class="mt-6">
            @include('events._form', ['button' => 'Salvar evento'])
        </form>
    </section>
@endsection
