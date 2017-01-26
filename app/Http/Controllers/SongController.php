<?php

namespace App\Http\Controllers;

use App\Album;
use App\Song;
use Illuminate\Http\Request;
use App\Http\Requests\SongStoreRequest;
use App\Http\Requests\SongUpdateRequest;

class SongController extends Controller
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
        $songs = Song::with('album')->get();

        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $as = Album::all();
        $albums = ['0' => 'Escolha um álbum'];
        foreach ($as as $a) {
            $albums[$a->id] = $a->title;
        }
        return view('songs.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongStoreRequest $request)
    {
        $song = new Song(
            $request->only(
                [
                    'title',
                ]
            )
        );

        if ($request->input('album_id') !== 0) {
            $song->album_id = $request->input('album_id');
        }

        $file = $request->file('file');
        $file_name = str_slug($request->input('title')) . '.mp3';
        $file->storeAs('public/songs/', $file_name);
        $song->file = '/storage/songs/' . $file_name;

        $song->save();

        return redirect()->route('songs.index')->with('status', 'Música salva!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return redirect()->route('songs.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        $as = Album::all();
        $albums = ['0' => 'Escolha um álbum'];
        foreach ($as as $a) {
            $albums[$a->id] = $a->title;
        }
        return view('songs.edit', compact('albums', 'song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SongUpdateRequest $request, Song $song)
    {
        $song->update(
            $request->only(
                [
                    'title',
                ]
            )
        );

        if ($request->input('album_id') !== 0) {
            $song->album_id = $request->input('album_id');
        }

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $file_name = str_slug($request->input('title')) . '.mp3';
            $file->storeAs('public/songs/', $file_name);
            $song->file = '/storage/songs/' . $file_name;
        }

        $song->save();

        return redirect()->route('songs.index')->with('status', 'Música salva!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index')->with('status', 'Música deletada!');
    }
}
