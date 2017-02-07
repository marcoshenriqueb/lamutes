<?php

namespace App\Http\Controllers;

use App\Cover;
use App\Http\Requests\CoverRequest;
use App\Http\Requests\CoverUpdateRequest;
use Carbon\Carbon;

class CoverController extends Controller
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

    public function edit()
    {
        $cover = Cover::first();
        return view('cover', compact('cover'));
    }

    public function store(CoverRequest $request)
    {
        $cover = new Cover(
            $request->only(
                [
                    'title',
                    'subtitle1',
                    'subtitle2',
                ]
            )
        );

        $file = $request->file('cover_image');
        $file_name = Carbon::now() . '_cover' . '.' . $file->guessClientExtension();
        $file->storeAs('public/cover/', $file_name);
        $cover->cover_image = '/storage/cover/' . $file_name;

        $file = $request->file('cover_image_responsive');
        $file_name = Carbon::now() . '_cover' . '.' . $file->guessClientExtension();
        $file->storeAs('public/cover-mobile/', $file_name);
        $cover->cover_image_responsive = '/storage/cover-mobile/' . $file_name;
        $cover->save();

        return redirect()->route('admin.index')->with('status', 'Capa salva!');
    }

    public function update(CoverUpdateRequest $request)
    {
        $cover = Cover::first();
        $cover->title = $request->input('title');
        $cover->subtitle1 = $request->input('subtitle1');
        $cover->subtitle2 = $request->input('subtitle2');

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $file_name = Carbon::now() . '_cover' . '.' . $file->guessClientExtension();
            $file->storeAs('public/cover/', $file_name);
            $cover->cover_image = '/storage/cover/' . $file_name;
        }

        if ($request->hasFile('cover_image_responsive')) {
            $file = $request->file('cover_image_responsive');
            $file_name = Carbon::now() . '_cover' . '.' . $file->guessClientExtension();
            $file->storeAs('public/cover-mobile/', $file_name);
            $cover->cover_image_responsive = '/storage/cover-mobile/' . $file_name;
        }

        $cover->save();

        return redirect()->route('admin.index')->with('status', 'Capa salva!');
    }
}
