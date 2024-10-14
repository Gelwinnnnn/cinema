@extends('layout')

@section('head')
    <style>
        body {
            min-height: 100vh;
            width: 100vw;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
@endsection

@section('content')
    <section class="w-screen px-16 py-8">
        <h1 class="w-full text-center font-bold text-5xl text-black-400">Tickets of {{ $movie->movie_title }}</h1>
        <div class="my-8 grid grid-cols-3 gap-8">
            @foreach ($movie->tickets as $ticket)
                <div class="w-[400px] bg-blue-300 rounded-xl h-[300px] p-8 flex-col flex justify-center">
                    <p class="text-lg font-semibold">Customer Name: {{ $ticket->customer_name }}</p>
                    <p class="text-lg font-semibold">Seat Number: {{ $ticket->seat_number }}</p>
                    <p class="text-lg font-semibold">Check in Status: {{ $ticket->is_checked_in }}</p>
                    <p class="text-lg font-semibold">Check in Time: {{ $ticket->check_in_time }} </p>
                    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" class="contents">
                        @method('PUT')
                        @csrf
                        <button class="h-[35px] w-fit px-4 py-1 bg-slate-200 rounded-lg my-1 border border-black">Change Status</button>
                    </form>
                    <form action="{{ route('tickets.delete', $ticket->id) }}" method="POST" class="contents">
                        @method('DELETE')
                        @csrf
                        <button
                            class="h-[35px] w-fit px-4 py-1 bg-red-200 rounded-lg my-1 border border-black">Delete</button>
                    </form>
                    @if (session()->has('error'))
                        <p class="semibold text-red-500">{{ session('error') }}</p>
                    @endif
                </div>
            @endforeach

        </div>
    </section>
@endsection
