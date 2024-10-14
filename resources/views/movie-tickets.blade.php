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
        <h1 class="w-full text-center font-bold text-5xl text-yellow-400">Tickets of {{ $movie->movie_title }}</h1>
        <div class="my-8 grid grid-cols-3 gap-8">
            {{-- @foreach ($movies as $movie) --}}
            <div class="w-[400px] bg-green-200 rounded-xl h-[160px] p-8 flex-col flex justify-center">
                <p class="text-lg font-semibold">Customer Name: </p>
                <p class="text-lg font-semibold">Seat Number: </p>
                <p class="text-lg font-semibold">Check in Status: </p>
                <p class="text-lg font-semibold">Check in Time: </p>



                {{-- <button class="h-[35px] w-fit px-4 py-1 bg-slate-200 rounded-lg my-1 border border-black"
                        onclick="window.location.href='{{ route('movies.book') }}'">Book now</button> --}}
            </div>
            {{-- @endforeach --}}

        </div>
    </section>
@endsection
