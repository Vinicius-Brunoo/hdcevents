<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(Request $request): View
    {
        $events = Event::orderBy('date')->get();

        return view('welcome', compact('events'));
    }

    public function create(): View
    {
        return view('events.create', ['event' => new Event()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedEvent($request);
        $data['items'] = $request->input('items', []);
        $data['private'] = $request->boolean('private');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('events', 'public');
        }

        $event = Event::create($data);

        return redirect()
            ->route('events.show', $event)
            ->with('status', 'Evento criado com sucesso.');
    }

    public function show(Event $event): View
    {
        return view('events.show', compact('event'));
    }

    private function validatedEvent(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'city' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2000'],
            'items' => ['nullable', 'array'],
            'items.*' => ['string', 'max:100'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);
    }
}
