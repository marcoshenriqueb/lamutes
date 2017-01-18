<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\AlbumStoreRequest;
use App\Http\Requests\AlbumUpdateRequest;
use Illuminate\Http\Request;

class AlbumController extends Controller
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
     * Display a listing of albums.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumStoreRequest $request)
    {
        $album = new Album(
            $request->only(
                [
                    'title',
                    'subtitle',
                ]
            )
        );

        $file = $request->file('cover_image');
        $file_name = str_slug($request->title) . '.' . $file->guessClientExtension();
        $file->storeAs('public/albums/cover/', $file_name);
        $album->cover_image = '/storage/albums/cover/' . $file_name;

        if ($request->hasFile('disk_image')) {
            $file = $request->file('disk_image');
            $file_name = str_slug($request->title) . '.' . $file->guessClientExtension();
            $file->storeAs('public/albums/disk/', $file_name);
            $album->disk_image = '/storage/albums/disk/' . $file_name;
        }

        $album->save();

        return redirect()->route('albums.index')->with('status', 'Album salvo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return redirect()->route('albums.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumUpdateRequest $request, Album $album)
    {
        $album->update(
            $request->only(
                [
                    'title',
                    'subtitle',
                ]
            )
        );

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $file_name = str_slug($request->title) . '.' . $file->guessClientExtension();
            $file->storeAs('public/albums/cover/', $file_name);
            $album->cover_image = '/storage/albums/cover/' . $file_name;
        }

        if ($request->hasFile('disk_image')) {
            $file = $request->file('disk_image');
            $file_name = str_slug($request->title) . '.' . $file->guessClientExtension();
            $file->storeAs('public/albums/disk/', $file_name);
            $album->disk_image = '/storage/albums/disk/' . $file_name;
        }

        $album->save();

        return redirect()->route('albums.index')->with('status', 'Album atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index')->with('status', 'Album deletado!');
    }
}
