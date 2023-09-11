<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $comics = config('comics');

        $data = compact('comics');

        // dd($data);

        return view('home', $data);
    }

    public function singleComic($index)
    {
        $fumetti = config('comics');

        $fumetto = $fumetti[$index];

        // dd($fumetto);

        return view('show-comic', compact('fumetto'));
    }

}