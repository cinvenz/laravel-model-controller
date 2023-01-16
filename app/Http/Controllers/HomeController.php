<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('guest.home');
    }

    public function list()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('guest.list', compact('movies'));
    }
}
