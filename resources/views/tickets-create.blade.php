@extends('layout')


@section('content')
    <section class="w-screen px-16 py-8">
        <div class="">
            <h1 class="w-full text-center font-bold text-5xl text-yellow-400 mb-4">Ticket Booking of
                {{ $movie->movie_title }}
            </h1>

            <div class="flex flex-col w-[300px] my-2">
                <label for="customer_name">Customer Name</label>
                <input class="border border-black" type="text" name="customer_name" id="customer_name">
            </div>
            <div class="flex flex-col w-[300px] my-2">
                <label for="seat_number">Seat Number</label>
                <input class="border border-black" type="text" name="seat_number" id="seat_number">
            </div>
            <div class="flex flex-col w-[300px] my-2">
                <label for="check_in_time">Check in Time</label>
                <input class="border border-black" type="time" name="check_in_time" id="check_in_time">
            </div>
        </div>
    </section>
@endsection
