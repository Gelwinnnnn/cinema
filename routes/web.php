<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('main');
Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::get('/movies/tickets/{movie:id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/book/{movie:id}', [TicketController::class, 'create'])->name('movies.create');
Route::post('/ticket/submit', [TicketController::class, 'store'])->name('tickets.store');
Route::put('/ticket/checkin/{ticket:id}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name('tickets.delete');
