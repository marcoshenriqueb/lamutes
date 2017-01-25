<?php

namespace App\Http\Controllers;

use App\Album;
use App\Cover;
use App\Event;
use App\HomeImages;
use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cover = Cover::first();
        $albums = Album::all();
        $events = Event::orderBy('date', 'asc')->get();
        $firstEvent = false;

        if (count($events) > 0) {
            $c = Carbon::parse($events[0]->date);
            $firstEvent = [
                'link' => $events[0]->fb_url,
                'venue' => $events[0]->venue,
                'date' => $c->year . '/' . $c->month . '/' . $c->day,
            ];
        }

        $homeImages = HomeImages::first();

        if (!$cover) {
            return redirect()->route('login');
        }

        return view('home', compact('cover', 'albums', 'events', 'firstEvent', 'homeImages'));
    }
}
