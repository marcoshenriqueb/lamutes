<?php

namespace App\Http\Controllers;

use App\HomeImages;
use App\Http\Requests\HomeImagesRequest;
use App\Http\Requests\HomeImagesUpdateRequest;
use Carbon\Carbon;

class HomeImagesController extends Controller
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
        $homeImages = HomeImages::first();
        return view('homeImages', compact('homeImages'));
    }

    public function store(HomeImagesRequest $request)
    {
        $homeImages = new HomeImages();

        $file = $request->file('next_event_image');
        $file_name = Carbon::now() . '_next_event_image' . '.' . $file->guessClientExtension();
        $file->storeAs('public/images/next_event/', $file_name);
        $homeImages->next_event_image = '/storage/images/next_event/' . $file_name;

        $file = $request->file('next_event_image2');
        $file_name = Carbon::now() . '_next_event_image2' . '.' . $file->guessClientExtension();
        $file->storeAs('public/images/next_event_2/', $file_name);
        $homeImages->next_event_image2 = '/storage/images/next_event_2/' . $file_name;

        $homeImages->save();

        return redirect()->route('admin.index')->with('status', 'Fotos salvas!');
    }

    public function update(HomeImagesUpdateRequest $request)
    {
        $homeImages = HomeImages::first();

        if ($request->hasFile('next_event_image')) {
            $file = $request->file('next_event_image');
            $file_name = Carbon::now() . '_next_event_image' . '.' . $file->guessClientExtension();
            $file->storeAs('public/images/next_event/', $file_name);
            $homeImages->next_event_image = '/storage/images/next_event/' . $file_name;
        }

        if ($request->hasFile('next_event_image2')) {
            $file = $request->file('next_event_image2');
            $file_name = Carbon::now() . '_next_event_image2' . '.' . $file->guessClientExtension();
            $file->storeAs('public/images/next_event_2/', $file_name);
            $homeImages->next_event_image2 = '/storage/images/next_event_2/' . $file_name;
        }

        $homeImages->save();

        return redirect()->route('admin.index')->with('status', 'Fotos salvas!');
    }
}
