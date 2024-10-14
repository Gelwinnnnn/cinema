<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data['movies'] = Movie::all();
        return view('movies', $data);
    }

    public function show(Movie $movie)
    {
        $data['movie'] = $movie->load(['tickets']);
        return view('movie-tickets', $data);
    }
}
