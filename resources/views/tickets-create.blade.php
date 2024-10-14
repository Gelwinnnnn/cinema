@extends('layout')


@section('content')
    <div class="">
    <section class="w-screen h-screen flex justify-center items-center">
        <div class="bg-gray-100 p-8 rounded-lg shadow-md">
            <h1 class="w-full text-center font-bold text-5xl text-black-400 mb-4">Ticket Booking of {{ $movie->movie_title }}</h1>
            
            <form action="{{ route('tickets.store') }}" method="POST" class="contents">
                @csrf
                
                <input type="hidden" value="{{ $movie->id }}" name="movie_id">
                <div class="mb-6">
                    <label for="customer_name" class="block mb-2 text-sm font-medium text-black">Customer Name</label>
                    <input name="customer_name" type="text" id="customer_name" class="bg-white border border-black text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5">
                    @error('customer_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="seat_number" class="block mb-2 text-sm font-medium text-black">Seat Number</label>
                    <input type="text" name="seat_number" id="seat_number" class="bg-white border border-black text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5">
                    @error('seat_number')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="check_in_time" class="block mb-2 text-sm font-medium text-black">Check in Time</label>
                    <input type="datetime-local" name="check_in_time" id="check_in_time" class="bg-white border border-black text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5">
                    @error('check_in_time')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>            </form>

            @if (session()->has('success'))
                <p class="text-sm text-green-500">{{ session('success') }}</p>
            @endif
        </div>
    </section>
    </div>
@endsection
