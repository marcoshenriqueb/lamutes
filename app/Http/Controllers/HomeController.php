<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cover;

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

      if (!$cover) {
        return redirect()->route('login');
      }

      return view('home', compact('cover'));
    }
}
