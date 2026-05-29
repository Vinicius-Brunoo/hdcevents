@csrf

@isset($method)
    @method($method)
@endisset

<div class="grid gap-5 md:grid-cols-2">
    <label class="block md:col-span-2">
        <span class="text-sm font-medium text-slate-200">Titulo do evento</span>
        <input name="title" value="{{ old('title', $event->title) }}" required class="mt-2 w-full rounded-lg border border-white/10 bg-slate-950/70 px-4 py-3 text-white outline-none transition focus:border-teal-300" />
    </label>

    <label class="block">
        <span class="text-sm font-medium text-slate-200">Data do evento</span>
        <input name="date" type="date" value="{{ old('date', optional($event->date)->format('Y-m-d')) }}" required class="mt-2 w-full rounded-lg border border-white/10 bg-slate-950/70 px-4 py-3 text-white outline-none transition focus:border-teal-300" />
    </label>

    <label class="block">
        <span class="text-sm font-medium text-slate-200">Cidade</span>
        <input name="city" value="{{ old('city', $event->city) }}" class="mt-2 w-full rounded-lg border border-white/10 bg-slate-950/70 px-4 py-3 text-white outline-none transition focus:border-teal-300" />
    </label>

    <label class="block md:col-span-2">
        <span class="text-sm font-medium text-slate-200">Descricao</span>
        <textarea name="description" rows="5" required class="mt-2 w-full rounded-lg border border-white/10 bg-slate-950/70 px-4 py-3 text-white outline-none transition focus:border-teal-300">{{ old('description', $event->description) }}</textarea>
    </label>

    @php
        $selectedItems = old('items', $event->items ?? []);
        $availableItems = ['Cadeiras', 'Palco', 'Bebidas', 'Comida', 'Brindes', 'Certificado'];
    @endphp

    <fieldset class="md:col-span-2">
        <legend class="text-sm font-medium text-slate-200">Itens de infraestrutura</legend>
        <div class="mt-3 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($availableItems as $item)
                <label class="flex items-center gap-3 rounded-lg border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-slate-200">
                    <input name="items[]" type="checkbox" value="{{ $item }}" @checked(in_array($item, $selectedItems, true)) class="rounded border-white/20 bg-slate-950 text-teal-400">
                    {{ $item }}
                </label>
            @endforeach
        </div>
    </fieldset>

    <label class="block">
        <span class="text-sm font-medium text-slate-200">Imagem</span>
        <input name="image" type="file" accept="image/*" class="mt-2 w-full rounded-lg border border-white/10 bg-slate-950/70 px-4 py-3 text-sm text-slate-200 file:mr-4 file:rounded-md file:border-0 file:bg-teal-400 file:px-3 file:py-2 file:font-semibold file:text-slate-950" />
    </label>

    <label class="flex items-center gap-3 self-end rounded-lg border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-slate-200">
        <input name="private" type="checkbox" value="1" @checked(old('private', $event->private)) class="rounded border-white/20 bg-slate-950 text-teal-400">
        Evento privado
    </label>
</div>

<div class="mt-6 flex flex-wrap gap-3">
    <button type="submit" class="rounded-lg bg-teal-400 px-5 py-3 font-semibold text-slate-950 transition hover:bg-teal-300">{{ $button }}</button>
    <a href="{{ route('events.index') }}" class="rounded-lg border border-white/10 px-5 py-3 font-semibold text-slate-200 transition hover:bg-white/10">Cancelar</a>
</div>
