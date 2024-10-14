<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Movie $movie)
    {
        $data['movie'] = $movie;
        return view('tickets-create', $data);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'movie_id' => 'required',
            'customer_name' => 'required',
            'seat_number' => 'required',
            'check_in_time' => 'required'
        ]);

        Ticket::create($valid);
        return redirect()->back()->with('success', 'Ticket successfully booked');
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update(['check_in_time' => now(), 'is_checked_in' => 1]);
        return redirect()->back()->with('success', 'Ticket status successfully updated');
    }

    public function delete(Request $request, Ticket $ticket)
    {

        // if ($ticket->is_checked_in) {
        //     return redirect()->back()->with('error', 'Ticket Deletion is failed because its already checked in');
        // }
        $ticket->delete();
        return redirect()->back()->with('success', 'Ticket status successfully deleted');
    }
}
