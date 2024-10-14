<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Movie $movie)
    {
        $data['movie'] = $movie;
        return view('tickets-create', $data);
    }
}
