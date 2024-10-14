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
        <h1 class="w-full text-center font-bold text-5xl text-black-400">Now Playing</h1>
        <div class="my-8 grid grid-cols-3 gap-8">
            @foreach ($movies as $movie)
                <div class="w-[350px] bg-green-200 rounded-xl h-[190px] p-8 flex-col flex justify-center">
                    <p class="text-lg font-semibold">Movie Title: {{ $movie->movie_title }}</p>
                    <p class="text-lg font-semibold">Duration: {{ $movie->duration }}</p>
                    <p class="text-lg font-semibold">Release Date: {{ $movie->release_date }}</p>

                    <button class="h-[35px] w-fit px-4 py-1 bg-slate-200 rounded-lg my-1 border border-black"
                        onclick="window.location.href='{{ route('movies.show', $movie->id) }}'">View Tickets</button>

                    <button class="h-[35px] w-fit px-4 py-1 bg-slate-200 rounded-lg my-1 border border-black"
                        onclick="window.location.href='{{ route('movies.create', $movie->id) }}'">Book now</button>
                </div>
            @endforeach

        </div>
    </section>
@endsection
