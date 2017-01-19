<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventStoreRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        $event = new Event(
            $request->only(
                [
                    'venue',
                    'location',
                    'fb_url',
                ]
            )
        );

        $event->date = $request->date . ' ' . $request->time;
        $event->save();

        return redirect()->route('events.index')->with('status', 'Evento salvo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return redirect()->route('events.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $c = Carbon::parse($event->date);
        $event = [
            'id' => $event->id,
            'venue' => $event->venue,
            'location' => $event->location,
            'fb_url' => $event->fb_url,
            'date' => $c->year . '-' . $c->month . '-' . $c->day,
            'time' => str_pad($c->hour, 2, '0', STR_PAD_LEFT) . ':' . str_pad($c->minute, 2, '0', STR_PAD_LEFT),
        ];
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventStoreRequest $request, Event $event)
    {
        $event->update(
            $request->only(
                [
                    'venue',
                    'location',
                    'fb_url',
                ]
            )
        );

        $event->date = $request->date . ' ' . $request->time;
        $event->save();

        return redirect()->route('events.index')->with('status', 'Evento salvo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('status', 'Evento deletado!');
    }
}
