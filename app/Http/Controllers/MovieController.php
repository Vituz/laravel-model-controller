<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index()
    {

        $movies = Movie::all();
        // ddd(Movie::all());

        return view('movies.index', compact('movies'));
    }
}
