<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('movies');
Route::get('/movies/tickets/{movie:id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/book/{movie:id}', [TicketController::class, 'create'])->name('movies.create');
