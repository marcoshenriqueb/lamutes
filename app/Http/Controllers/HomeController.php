<?php

namespace App\Http\Controllers;

use App\Album;
use App\Cover;
use App\Event;

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
        $events = Event::all();

        if (!$cover) {
            return redirect()->route('login');
        }

        return view('home', compact('cover', 'albums', 'events'));
    }
}
